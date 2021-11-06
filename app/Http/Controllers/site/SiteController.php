<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function __construct()
    {
        return Session::put([
            "idProdutos" => [
                
            ]
        ]);
    }

    public function index(){
        return view("site.home.index");
    }

    public function about(){
        return view("site.about.index");
    }

    public function portfolio(){
        return view("site.portfolio.index");
    }

    public function portDetails($id){
        return view("site.portfolio.portfolio", compact("id"));
    }

    public function blog(){
        return view("site.blog.index");
    }

    public function blogDetails($id){
        return view("site.blog.blog", compact("id"));
    }

    public function contact(){
        return view("site.contact.index");
    }

}
