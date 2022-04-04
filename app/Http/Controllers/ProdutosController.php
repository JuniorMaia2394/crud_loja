<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create(){
        return view('produto.create');
    }

    public function store(Request $request){
        Produto::create([
            'nome_produto' => $request->nome,
            'categoria' => $request->categoria,
            'desenvolvedora' => $request->desenvolvedora,
            'preço' => $request->preço,
            'comentario' => $request->sinopse,
        ]);
        return "Produto criado com sucesso!";

    }

    public function show($id){

        $produto = Produto::findOrFail($id);
        return view('produto.show', ['produto'=>$produto]);

    }

    public function produtos()
    {
        $produto['produtos'] = Produto::all();
        return view('produto.all', $produto);
    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('produto.edit', ['produto'=>$produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome_produto' => $request->nome,
            'categoria' => $request->categoria,
            'desenvolvedora' => $request->desenvolvedora,
            'preço' => $request->preço,
            'comentario' => $request->sinopse,
        ]);
        return "Produto alterado com sucesso!";
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('produto.delete', ['produto'=>$produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto Exlcuído com Sucesso";
    }

}
