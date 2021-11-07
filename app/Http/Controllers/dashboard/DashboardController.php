<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        $user = Auth::user()->getOriginal();

        $qntno = DB::table("blogs")->count();
        $qntga = DB::table("portfolios")->count();
        return view("dashboard.home", compact('user','qntno', 'qntga'));
    }

    public function blog(){
        $user = Auth::user()->getOriginal();
        $noticias = DB::table('noticias')
            ->orderBy('id', 'desc')
            ->get();

        return view("dashboard.blog", compact('user', 'noticias'));
    }

    public function portfolio(){
        $user = Auth::user()->getOriginal();
        $galerias = DB::table('galerias')
            ->orderBy('id', 'desc')
            ->get();
        return view("dashboard.portfolio", compact('user', 'galerias'));
    }

    public function formLogin()
    {
        if (Auth::check() === true) {
            return redirect()->route("dashboard");
        }else{
            return view("dashboard.login");
        }
    }

    public function logar(Request $request, User $user){
        $credencias = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if (empty($credencias['email']) AND empty($credencias['password'])) {
            return redirect()->back()->withInput()->withErrors(['Campos vazios prencha corretamente!']);
        }

        if (empty($credencias['email']) OR empty($credencias['password'])) {
            return redirect()->back()->withInput()->withErrors(['Email ou Senha vazia!']);
        }

        if (Auth::attempt($credencias)) {
            return redirect()->route("dashboard");
        }
        return redirect()->back()->withInput()->withErrors(['Os dados informados nao conferem!']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }
}
