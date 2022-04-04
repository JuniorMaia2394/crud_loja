<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Todos produtos</title>
</head>
<body>
    <center>
        @foreach ($produtos as $produto)
    </br>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $produto->imagem }}" >
            <div class="card-body">
              <h5 class="card-title">{{$produto->nome_produto}}</h5>
              <p class="card-text">{{$produto->comentario}}</p>
              <b><p class="card-text">R${{$produto->preço}}</p></b></br>
              <a href="{{ route('alterar_produto', ['id' => $produto->id]) }}" class="btn btn-primary">Editar</a>
              <a href="{{ route('excluir_produto', ['id' => $produto->id]) }}" class="btn btn-primary">Excluir</a>
              <a href="{{ route('ver_produto', ['id' => $produto->id]) }}" class="btn btn-primary">Ver</a>


            </div>
          </div>
        </br>
        <a href="{{ route('registrar_produto') }}" class="btn btn-primary">Adicionar Produto</a>
    </br>
        @endforeach
    </center>
</body>
</html>

