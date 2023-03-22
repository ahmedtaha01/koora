<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Reservation $reservation){
        return view('user.invoice-view',compact('reservation'));
    }
}
