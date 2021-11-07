<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $galerias = DB::table("portfolios")->limit(3)->orderBy("id", "DESC")->get();
        $blogs = DB::table("blogs")->limit(3)->orderBy("id", "DESC")->get();
        //dd($galerias);
        //$blogs = [];
        return view("site.home.index", compact('galerias', 'blogs'));
    }

    public function about(){
        return view("site.about.index");
    }

    public function portfolio(){
        $galerias = DB::table("portfolios")->limit(9)->orderBy("id", "DESC")->get();
        return view("site.portfolio.index", compact("galerias"));
    }

    public function portDetails($id){
        $galeria = DB::table("portfolios")->where("id", $id)->get();
        return view("site.portfolio.portfolio", compact("galeria"));
    }

    public function blog(){
        $blogs = DB::table("blogs")->limit(4)->orderBy("id", "DESC")->get();
        $blogsLateral = DB::table("blogs")->limit(3)->orderBy("id", "DESC")->get();
        return view("site.blog.index", compact("blogs", "blogsLateral"));
    }

    public function blogDetails($id){
        $blog = DB::table("blogs")->where("id", $id)->get();
        $blogsLateral = DB::table("blogs")->limit(3)->orderBy("id", "DESC")->get();
        return view("site.blog.blog", compact("blog", "blogsLateral"));
    }

    public function contact(){
        return view("site.contact.index");
    }

}
