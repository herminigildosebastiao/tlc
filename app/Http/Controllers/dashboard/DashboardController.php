<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $dados;

    public function getDados(){return $this->dados;}
    public function setDados($dados){$this->dados = $dados; return $this;}
    
    public function __construct()
    {
        
    }

    public function index(){
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "admin@admin.com"];
        $qntno = 25;
        $qntga = 35;
        return view("dashboard.home", compact('user','qntno', 'qntga'));
    }

    public function blog(){
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "admin@admin.com"];
        $noticias = DB::table('noticias')
            ->orderBy('id', 'desc')
            ->get();

        return view("dashboard.blog", compact('user', 'noticias'));
    }

    public function portfolio(){
        $user = ["name" => "DennyLson", "apelido" => "Sebastian", "email" => "admin@admin.com"];
        $galerias = DB::table('galerias')
            ->orderBy('id', 'desc')
            ->get();
        return view("dashboard.portfolio", compact('user', 'galerias'));
    }
}
