<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Produto::create([
            'nome_produto' => $request->nome,
            'imagem' => $request->imagem,
            'categoria' => $request->categoria,
            'desenvolvedora' => $request->desenvolvedora,
            'preço' => $request->preço,
            'comentario' => $request->sinopse,
        ]);
        return "Produto criado com sucesso!";
        // dd($request->all());
    }

    public function show($id){
        $produto = Produto::findOrFail($id);
        return view('show', ['produto'=>$produto]);

    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('edit', ['produto'=>$produto]);
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome_produto' => $request->nome,
            'imagem' => $request->imagem,
            'categoria' => $request->categoria,
            'desenvolvedora' => $request->desenvolvedora,
            'preço' => $request->preço,
            'comentario' => $request->sinopse,
        ]);
        return "Produto alterado com sucesso!";
    }

    public function delete($id){
        $produto = Produto::findOrFail($id);
        return view('delete', ['produto'=>$produto]);
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto Exlcuído cm Sucesso";
    }

}
