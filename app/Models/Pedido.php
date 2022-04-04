<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable =['id_cliente', 'id_produto', 'quantidade', 'valor_total'];

    public function produto()
    {
        return $this->hasMany(Produto::class);
    }

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
}
