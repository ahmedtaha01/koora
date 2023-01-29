<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\ForgetpasswordRequest;
use App\Models\User;
use App\Traits\LoginTrait;
use App\Traits\EmailTrait;
use Illuminate\Support\Facades\Session;

class ForgetpasswordController extends Controller
{
    use LoginTrait;
    use EmailTrait;
    public function index(){
        return view('registration.forget_password.forget-password');
    }

    public function sendCode(){
        return view('registration.forget_password.enter_code');
    }

    

    public function checkEmail(ForgetpasswordRequest $request){
        $field = $this->checkEmailOrPhone($request->email_or_phone);

        if($field != 'email'){
            $user = User::where('phone',$request->email_or_phone)->first();
            if(! $user){
                return redirect()->back()->with('error','لا وجود لهذا الرقم لدينا');
            }
            $request->email_or_phone = $user['email'];
        }
        $user = User::where('email',$request->email_or_phone)->first();
        if(! $user){
            return redirect()->back()->with('error','لا وجود لهذا البريد الاكلتروني ');
        }
        // send email [$request->email_or_phone]
        $code = rand(10000,100000);
        
        $data = [
            'subject' => 'you forget password',
            'code'  => $code,
        ];
        if($this->sendEmail($request->email_or_phone,$data)){
            Session::put('data',[
                'code'  => $code,
                'email' => $request->email_or_phone,
            ]);
            // Session::put('code',$code);
            // Session::put('email',$request->email_or_phone);
            return redirect()->route('login.send_code');
        }
        // Session::forget('code');
        // Session::forget('email');
        Session::forget('data');
        return redirect()->back()->with('error','حدث خطأ عند ارسال الكود السري');
    }

    public function checkCode(Request $request){
        if(Session::get('data')['code'] == $request->code){
            return redirect()->route('login.update_password');
        }

        return redirect()->back()->with('error','الرقم السري خطأ');
    }

}

// first login to your gmail account and under My account 
// > Sign In And Security > Sign In to google, enable two step verification,
// then you can generate app password, and you can use that app password in .env file.

// Your .env file will then look something like this
