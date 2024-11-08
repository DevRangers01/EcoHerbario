<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;

    protected $table = 'plantas';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome_comum',
        'nome_cientifico',
        'familia',
        'genero',
        'especie',
        'habitat',
        'distribuicao_geografica',
        'descricao',
        'metodo_de_cultivo',
        'categoria'
    ];

}
