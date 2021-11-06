<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function __construct()
    {
        
    }
    public function shop(){
        return view("shop.index");
    }

    public function product($id){
        return view("shop.product", compact("id"));
    }

    public function addCart($id){
        

    }

    public function cart(){
        
    }

    public function payment(){
        
    }
}
