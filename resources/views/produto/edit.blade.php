<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar produto</title>
</head>
<body>
    <form action="{{ route('alterar_produto', ['id' => $produto->id])}}" method="POST">
        @csrf
        <label for="">Nome produto</label><br />
        <input type="text" name="nome" value="{{$produto->nome_produto}}"><br />
        <label for="">Imagem produto</label><br />
        <input type="image" name="imagem" value="{{$produto->imagem}}"><br />
        <label for="">Categoria</label><br />
        <input type="text" name="categoria" value="{{$produto->categoria}}"><br />
        <label for="">Desenvolvedora</label><br />
        <input type="text" name="desenvolvedora" value="{{$produto->desenvolvedora}}"><br />
        <label for="">Preço</label><br />
        <input type="number" name="preço" value="{{$produto->preço}}"><br />
        <label for="">Sinopse</label><br />
        <input type="text" name="sinopse" value="{{$produto->comentario}}"><br />
        <button>Salvar alterações</button>
    </form>
</body>
</html>
