<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar produto</title>
</head>
<body>
</br>
<center>
    <div class="card" style="width: 18rem;">

        <div class="card-body">
    <form action="{{ route('alterar_produto', ['id' => $produto->id])}}" method="POST">
        @csrf
        <label for=""><b>Nome produto:</b> </label><br />
        <input type="text" name="nome" value="{{$produto->nome_produto}}"><br />
        <label for=""><b>Categoria:</b> </label><br />
        <input type="text" name="categoria" value="{{$produto->categoria}}"><br />
        <label for=""><b>Desenvolvedora:</b> </label><br />
        <input type="text" name="desenvolvedora" value="{{$produto->desenvolvedora}}"><br />
        <label for=""><b>Preço:</b> </label><br />
        <input type="number" name="preço" value="{{$produto->preço}}"><br />
        <label for=""><b>Sinopse:</b> </label><br />
        <input type="text" name="sinopse" value="{{$produto->comentario}}"><br />
    </br><button class="btn btn-primary">Salvar alterações</button>
    </form>
</div>
</div>
</center>
</body>
</html>
