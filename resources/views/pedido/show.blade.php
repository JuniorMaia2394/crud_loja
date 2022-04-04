<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ver pedido</title>
</head>

<body>
    </br>
    <center>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <b><label for="">Id do cliente:</label><br /></b>
                <label name="nome">{{ $pedido->id_cliente }}</label><br />
                <b><label for="">Id do produto:</label></b><br />
                <label name="email">{{ $pedido->id_produto }}</label><br />
                <b><label for="">Quantidade:</label></b><br />
                <label name="telefone">{{ $pedido->quantidade }}</label><br />
                <b><label for="">Valor total:</label></b><br />
                <label name="endereco">R$ {{ $pedido->valor_total }}</label><br />
                <a href="{{ route('alterar_pedido', ['id' => $pedido->id]) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('excluir_pedido', ['id' => $pedido->id]) }}" class="btn btn-primary">Excluir</a>
            </div>
        </div>
    </center>




</body>

</html>
