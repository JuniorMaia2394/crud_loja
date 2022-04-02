<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $fillable =['nome_do_produto', 'quantidade', 'preço', 'comentario'];
}
