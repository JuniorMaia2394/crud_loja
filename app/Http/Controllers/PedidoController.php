<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
     public function create(){
        return view('pedido.create');
    }

    public function store(Request $request){
        Pedido::create([
            'id_cliente' => $request->id_cliente,
            'id_produto' => $request->id_produto,
            'quantidade' => $request->quantidade,
            'valor_total' => $request->valor_total,
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
            'id_cliente' => $request->id_cliente,
            'id_produto' => $request->id_produto,
            'quantidade' => $request->quantidade,
            'valor_total' => $request->valor_total,
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

    public function pedidos()
    {
        $pedido['pedidos'] = Pedido::all();
        return view('pedido.all', $pedido);
    }

}
