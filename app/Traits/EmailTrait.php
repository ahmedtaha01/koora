<?php
namespace App\Traits;
use App\Mail\ForgetpasswordMail;
use Mail;


trait EmailTrait{
    function sendEmail($email,$data){
        
        try{
            Mail::to($email)->send(new ForgetpasswordMail($data));
        } catch(Exception $e){
            return false;
        }

        return true;
    }
}