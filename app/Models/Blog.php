<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    private $noticias;
    use HasFactory;

    protected $fillable = [
        'titulo',
        'local',
        'autor',
        'foto',
        'descricao'
    ];
}
