<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    // Permite o preenchimento em massa para esses campos
protected $fillable = [ 
    'titulo', 
    'autor', 
    'ano_publicacao',
    'resumo', 
    ];
}
