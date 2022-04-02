<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar produto</title>
</head>
<body>
    <form action="{{ route('registrar_produto')}}" method="post">
        @csrf
        <label for="">Nome produto</label><br />
        <input type="text" name="nome"><br />
        <label for="">Imagem produto</label><br />
        <input type="file" name="imagem"><br />
        <label for="">Categoria</label><br />
        <input type="text" name="categoria"><br />
        <label for="">Desenvolvedora</label><br />
        <input type="text" name="desenvolvedora"><br />
        <label for="">Preço</label><br />
        <input type="number" name="preço"><br />
        <label for="">Sinopse</label><br />
        <input type="text" name="sinopse"><br />
        <button>Criar</button>
    </form>
</body>
</html>