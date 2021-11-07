<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
        
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(User $user)
    {
        //
    }

    
    public function edit(User $user)
    {
        /*$user = DB::table('users')
            ->orderBy('id', 'desc')
            ->get();*/

        /*$user = ["id" => 25, "name" => "DennyLson", "apelido" => "Sebastian", "email" => "admin@admin.com", "biografia" => "Esta e a minha Biografia", "nascimento" => "1998-11-23", "telefone" => "845255563"];*/
        return view("user.perfil", compact("user"));
    }

    
    public function update(Request $request, User $user)
    {
        $formUpdate = $request->all();
        $update = $user->update($formUpdate);
        if ($update) {
            return redirect()->back()->withErrors([
                'Perfil atualizado com Sucesso!'
            ]);
        }else{
            return redirect()->back()->withErrors([
                "Falha na atualizacao do perfil"
            ]);
        }
    }

    
    public function destroy(User $user)
    {
        //
    }
}
