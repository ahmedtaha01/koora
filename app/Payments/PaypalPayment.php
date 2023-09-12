<?php


namespace App\Payments;

use Carbon\Carbon;
use App\Models\Reservation;
use App\Models\Stadium;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalPayment implements PaymentInterface{


    public function pay($data){
        $paypal = new PayPalClient();
        $paypal->setApiCredentials(config('paypal'));
        $paypalToken = $paypal->getAccessToken();

        $response = $paypal->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('user.paypal.success',$data),
                "cancel_url" => route('user.paypal.cancel'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $data['stadium']->hour_price,
                    ]
                ]
            ]
        ]);
    
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return route('user.paypal.cancel');
        } else {
            return route('user.paypal.cancel');
                
        }

    }

    public function success(Request $request){
        
        $paypal = new PayPalClient();
        $paypal->setApiCredentials(config('paypal'));
        $paypal->getAccessToken();
        
        $response = $paypal->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {

            $stadium = Stadium::find($request->stadium);

            DB::beginTransaction();

            //book
            $reservation_id = Reservation::create([
                'user_id'           => auth()->user()->id,
                'stadium_id'        => $stadium->id,
                'date'              => $request->dateTime,
                'hours'             => '1',
                'status'            => '1',
                'code'              => mt_rand(1000000,9999999),
                'money'             => $stadium->hour_price,
            ]);

            Transaction::create([
                'user_id'               => auth()->user()->id,
                'match_id'              => $reservation_id->id,
                'transaction_id'        => $response['id'],
                'payment_gateway'       => $request->payment_gateway,
                'transaction_datetime'  => Carbon::now(),
                'amount'                => $stadium->hour_price,
                'currency'              => 'egp',
            ]);


            DB::commit();

            $data = [
                'stadium'           => $stadium,
                'day'               => $request->day,
                'time'              => $request->time,
            ];
    
           
            return view('user.reservation-success',compact('data'));
                
        } else {
            return redirect()
                ->route('user.paypal.cancel'); 
        }
    }

    public function cancel(){
        return view('user.paypal_cancel'); // a view here
    }

}