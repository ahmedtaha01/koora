<?php
namespace App\Traits;

trait LoginTrait{
    function checkEmailOrPhone($field){
        if(filter_var($field, FILTER_VALIDATE_EMAIL)){
            return 'email';
        }
        return 'phone';
    }
}
