<?php

namespace App\Payments;
use Carbon\Carbon;
use Monolog\Logger;
use App\Models\Stadium;
use Checkout\CheckoutApi;
use Checkout\CheckoutSdk;
use Checkout\Environment;
use App\Models\Reservation;
use App\Models\Transaction;
use Checkout\Common\Currency;
use Checkout\CheckoutException;
use Checkout\CheckoutApiException;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\StreamHandler;
use Checkout\Payments\Request\PaymentRequest;
use Checkout\Payments\Request\Source\RequestTokenSource;


class CheckoutPayment implements PaymentInterface{

    public function pay($data){
        $log = new Logger("checkout-sdk-php-sample");
        $log->pushHandler(new StreamHandler("php://stdout"));

        try {
            $api = CheckoutSdk::builder()->staticKeys()
                ->environment(Environment::sandbox())
                ->secretKey(env('CHECKOUT_CLIENT_SECRET'))
                ->build();
        } catch (CheckoutException $e) {
            $log->error("An exception occurred while initializing Checkout SDK : {$e->getMessage()}");
            http_response_code(400);
        }

        
        $postData = file_get_contents("php://input");
        $request = json_decode($postData);
        
        
        // The token generated by Frames on the client side
        $requestTokenSource = new RequestTokenSource();
        $requestTokenSource->token = $request->token;
        

        $request = new PaymentRequest();
        $request->source = $requestTokenSource;
        $request->currency = Currency::$EGP;
        $request->amount = $data['stadium']->hour_price*100;
        $request->processing_channel_id = env('CHECKOUT_CLIENT_PROCCESS_CHANNEL');
        
        
        try {
            $response = $api->getPaymentsClient()->requestPayment($request);
            
            DB::beginTransaction();

            //book
            $reservation_id = Reservation::create([
                'user_id'           => auth()->user()->id,
                'stadium_id'        => $data['stadium']->id,
                'date'              => $data['dateTime'],
                'hours'             => '1',
                'status'            => '1',
                'code'              => mt_rand(1000000,9999999),
                'money'             => $data['stadium']->hour_price,
            ]);

            Transaction::create([
                'user_id'               => auth()->user()->id,
                'match_id'              => $reservation_id->id,
                'transaction_id'        => $response['id'],
                'payment_gateway'       => $data['payment_gateway'],
                'transaction_datetime'  => Carbon::now(),
                'amount'                => $data['stadium']->hour_price,
                'currency'              => 'egp',
            ]);


            DB::commit();

            $data2 = [
                'stadium'           => $data['stadium'],
                'day'               => $data['day'],
                'time'              => $data['time'],
            ];
            return $data2;
        } catch (CheckoutApiException $e) {
            $log->error("An exception occurred while processing payment request");
            return $e->getMessage();
            http_response_code(400);
            
        }
       
    }
}