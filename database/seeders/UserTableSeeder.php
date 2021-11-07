<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    
    public function run()
    {
        User::create([
        	"name" => "DennyLson Aly",
        	"apelido" => "Sebastian",
        	"email" => "denny33221@gmail.com",
        	"telefone" => "845255563",
        	"biografia" => "Blabla bla bla",
        	"password" => bcrypt(123)
        ]);
    }
}
