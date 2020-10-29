<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    
    //indicar qual a chave primária da tabela Livros
    protected $primaryKey = "idl";
    
    //esta propriedade não é necessária
    //mas vai ajudar-nos em situações futuras
    protected $table = "livros";
}
