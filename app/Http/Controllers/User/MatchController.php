<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
    }
}