<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        return view("shop.index");
    }

    public function product($id){
        return view("shop.product", compact("id"));
    }

    public function cart(){
        return view("shop.cart");
    }

    public function payment(){
        return view("shop.payment");
    }
}
