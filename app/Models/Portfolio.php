<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	private $galerias;
    use HasFactory;

    protected $fillable = [
        'titulo',
        'local',
        'categorias',
        'autor',
        'foto',
        'descricao'
    ];
}
