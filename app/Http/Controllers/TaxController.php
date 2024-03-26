<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TaxController extends Controller
{
    public function taxview(){
        return view('tax');
    }
    public function  calculation(Request $request){
        $request->validate([
            "amount"=>"required",
            "parcentage"=>"required",
        ]);
       $parcent = " ";
        $amount = $request->amount;
        $parcent = $request->parcentage;
       
        $tax = " ";
       if($amount<220000){
        $tax = 0;
       
       }
       elseif($amount > 220000 && $amount < 520001){
        $tax = 22000;
        $parcent = 10;
       }
       
       elseif($amount > 520000 && $amount < 920001){
        $tax = 48000;
        $parcent = 15;
       }
       elseif($amount > 920000 && $amount < 1220001){
        $tax = 94000;
        $parcent = 20;
       }
       elseif($amount > 1220000){
        $tax = 155000;
        $parcent = 25;
       }
       $parc = $parcent/100;
        $vat = ($parc*$amount)-$tax;
        $total = $amount+$vat;
        
        Session::flash('message', 'Your Amount is = '.$amount."<br>".'Your Deducted Amount is = '.$tax.'<br>'.$parcent.'% Tax is = '.$vat.'<br> Your Total Amount is (withTax) = '.$total);
        return redirect()->back();
    }
    public function order(){
        return view('order');
    }
    public function product(){
        return view('product');
    }
    
}