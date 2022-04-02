<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar pedido</title>
</head>
<body>
    <form action="{{ route('alterar_pedido', ['id' => $pedido->id])}}" method="POST">
        @csrf
        <label for="">Nome cliente</label><br />
        <input type="text" name="nome_cliente" value="{{$pedido->nome_cliente}}"><br />
        <label for="">Nome do pedido</label><br />
        <input type="text" name="nome_pedido" value="{{$pedido->nome_pedido}}"><br />
        <label for="">Data do pedido</label><br />
        <input type="date" name="data_pedido" value="{{$pedido->data_pedido}}"><br />
        <label for="">Telefone</label><br />
        <input type="text" name="telefone" value="{{$pedido->telefone}}"><br />
        <button>Salvar alterações</button>
    </form>
</body>
</html>
