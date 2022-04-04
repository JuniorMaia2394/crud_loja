<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ver produto</title>
</head>
<body>
</br><div style="margin-left:1rem; margin-top:1rem">
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
</div>
    <center>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $produto->imagem }}" >
            <div class="card-body">
              <h5 class="card-title">{{$produto->nome_produto}}</h5>
              <p class="card-text">{{$produto->comentario}}</p>
              <b><p class="card-text">R${{$produto->preço}}</p></b></br>
              <a href="{{ route('alterar_produto', ['id' => $produto->id]) }}" class="btn btn-primary">Editar</a>
              <a href="{{ route('excluir_produto', ['id' => $produto->id]) }}" class="btn btn-primary">Excluir</a>
            </div>
          </div>
        </br>
          <a href="{{ route('ver_produtos')  }}" class="btn btn-primary">Ver todos</a>
    </center>

    {{-- <b><label for="">Nome produto:</label><br /></b>
    <label name="nome">{{$produto->nome_produto}}<br /></label>
    <b><label for="">Imagem produto:</label><br /></b>
    <label name="imagem">{{$produto->imagem}}<br /></label>
    <b><label for="">Categoria:</label><br /></b>
    <label name="categoria">{{$produto->categoria}}<br /></label>
    <b><label for="">Desenvolvedora:</label><br /></b>
    <label name="desenvolvedora">{{$produto->desenvolvedora}}<br /></label>
    <b><label for="">Preço:</label><br /></b>
    <label name="preço">R$ {{$produto->preço}}<br /></label>
    <b><label for="">Sinopse:</label><br /></b>
    <label name="sinopse">{{$produto->comentario}}<br /></label> --}}
</body>
</html>


