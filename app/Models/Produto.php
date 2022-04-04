<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Produto extends Model
{

    protected $fillable = ['nome_produto', 'categoria', 'desenvolvedora', 'comentario', 'preço', ];

    public function pedido()
    {
        return $this->hasOne(Pedido::class, 'id_produto');
    }

}
