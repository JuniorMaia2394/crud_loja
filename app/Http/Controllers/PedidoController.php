<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
     public function create(){
        return view('pedido.create');
    }

    public function store(Request $request){
        Pedido::create([
            'nome_cliente' => $request->nome_cliente,
            'nome_pedido' => $request->nome_pedido,
            'data_pedido' => $request->data_pedido,
            'telefone' => $request->telefone,
        ]);
        return "Pedido criado com sucesso!";

    }

    public function show($id){
        $pedido = Pedido::findOrFail($id);
        return view('pedido.show', ['pedido'=>$pedido]);

    }

    public function edit($id){
        $pedido = Pedido::findOrFail($id);
        return view('pedido.edit', ['pedido'=>$pedido]);
    }

    public function update(Request $request, $id){
        $pedido = Pedido::findOrFail($id);

        $pedido->update([
            'nome_cliente' => $request->nome_cliente,
            'nome_pedido' => $request->nome_pedido,
            'data_pedido' => $request->data_pedido,
            'telefone' => $request->telefone,

        ]);
        return "Pedido alterado com sucesso!";
    }

    public function delete($id){
        $pedido = Pedido::findOrFail($id);
        return view('pedido.delete', ['pedido'=>$pedido]);
    }

    public function destroy($id){
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return "Pedido Exlcuído com Sucesso";
    }
}
