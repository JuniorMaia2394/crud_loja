<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ver cliente</title>
</head>

<body>
    </br>
    <center>

        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <b><label for="">Nome cliente:</label><br /></b>
                <label name="nome">{{ $cliente->nome }}</label><br />
                <b><label for="">Email</label></b><br />
                <label name="email">{{ $cliente->email }}</label><br />
                <b><label for="">Telefone:</label></b><br />
                <label name="telefone">{{ $cliente->telefone }}</label><br />
                <b><label for="">Endereço:</label></b><br />
                <label name="endereco">{{ $cliente->endereco }}</label><br />
                <b><label for="">Senha:</label></b><br />
                <label name="senha">{{ $cliente->password }}</label><br />
                <b><label for="">Pedido:</label></b><br />
                <label name="senha">{{ $cliente->pedido }}</label><br />
                <a href="{{ route('alterar_cliente', ['id' => $cliente->id]) }}" class="btn btn-primary">Editar</a>
                <a href="{{ route('excluir_cliente', ['id' => $cliente->id]) }}" class="btn btn-primary">Excluir</a>
            </div>
        </div>
    </center>

</body>

</html>
