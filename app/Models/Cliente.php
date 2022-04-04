<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable =['nome', 'email', 'telefone', 'endereco', 'password', ];

    public function pedido()
    {
        return $this->hasOne(Pedido::class, 'id_cliente');
    }
}
