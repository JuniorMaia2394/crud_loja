<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Pedido</title>
</head>
<body>
    <form action="{{ route('registrar_pedido')}}" method="post">
        @csrf
        <label for="">Nome do cliente</label><br />
        <input type="text" name="nome"><br />
        <label for="">Nome do pedido</label><br />
        <input type="text" name="nome_pedido"><br />
        <label for="">Data do pedido</label><br />
        <input type="date" name="data_pedido"><br />
        <label for="">Telefone</label><br />
        <input type="text" name="telefone"><br />

        <button>Criar</button>
    </form>
</body>
</html>
