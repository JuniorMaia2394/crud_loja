<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir produto</title>
</head>
<body>
    <form action="{{ route('excluir_pedido', ['id' => $pedido->id])}}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir este pedido?</label>
        <input type="text" name="nome" value="{{ $pedido->nome_pedido }}">
        <button>Sim</button>
    </form>

</body>
</html>
