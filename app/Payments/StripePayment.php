<?php


namespace App\Payments;
use Carbon\Carbon;
use Stripe\StripeClient;
use App\Models\Reservation;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class StripePayment implements PaymentInterface{

    private $stripe;

    public function __construct() {
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }

    public function pay($data){

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


            $payment = $this->stripe->paymentIntents->create([
                'amount'            => $data['stadium']->hour_price*100,
                'currency'          => 'egp',
                'payment_method'    => $data['payment_method'],
                'description'       => 'demo payment',
                'confirm'           => true,
                'receipt_email'     => $data['email'],
            ]);

            Transaction::create([
                'user_id'               => auth()->user()->id,
                'match_id'              => $reservation_id->id,
                'transaction_id'        => $payment->id,
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


        return view('user.reservation-success',compact('data'));

    }
}
