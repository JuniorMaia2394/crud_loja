<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        Cliente::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'password' => $request->senha,
            'pedido' => $request->pedido,

        ]);
        return "Cliente criado com sucesso!";

    }

    public function show($id){

        $cliente = Cliente::with('pedido')->findOrFail($id);

        return view('cliente.show', ['cliente'=>$cliente]);

    }

    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', ['cliente'=>$cliente]);
    }

    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);

        $cliente->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'password' => $request->senha,
            'pedido' => $request->pedido,
        ]);
        return "Cliente alterado com sucesso!";
    }

    public function delete($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.delete', ['cliente'=>$cliente]);
    }

    public function destroy($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return "Cliente Exlcuído com Sucesso";
    }

    public function clientes()
    {
        $cliente['clientes'] = Cliente::all();
        return view('cliente.all', $cliente);
    }


}
