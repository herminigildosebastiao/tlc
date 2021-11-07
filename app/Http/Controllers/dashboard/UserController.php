<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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

    public function password(Request $request, User $user){
        $passForm = $request->all();
        if ($passForm['novasenha'] != $passForm['confsenha']) {
            return redirect()->back()->withErrors(['Prencha os campos de senha corretamente!']);
        }else{
            $dataForm = $request->all();
            $hashedPassword = Auth::user()->password;
            if (Hash::check($dataForm['senha'], $hashedPassword)) {
                $update = Auth::user()->update([
                    'password' => Hash::make($dataForm['novasenha'])
                ]);

                if ($update) {
                    return redirect()->back()->withErrors(['Senha alterada! com sucesso!!!']);
                }else{
                    return redirect()->back()->withErrors(['falha aou atualizar!!!']);
                }

            }else{
                return redirect()->back()->withErrors(['Falha ao alterar senha invalida!!!']);
            }
        }
    }
    
    public function destroy(User $user)
    {
        //
    }
}
