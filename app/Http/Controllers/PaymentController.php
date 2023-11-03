<?php

namespace App\Http\Controllers;
require 'vendor/autoload.php';

use Illuminate\Http\Request;

class PaymentController extends Controller
{
   // public function payment(Request $request){
   //    // Set your Merchant Server Key
   //    \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
   //    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
   //    \Midtrans\Config::$isProduction = false;
   //    // Set sanitization on (default)
   //    \Midtrans\Config::$isSanitized = true;
   //    // Set 3DS transaction for credit card to true
   //    \Midtrans\Config::$is3ds = true;
   // }
}
