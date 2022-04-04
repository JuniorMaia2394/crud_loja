<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar pedido</title>
</head>

<body>

</br><div style="margin-left:1rem; margin-top:1rem">
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
</div>
<center>
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <form action="{{ route('alterar_pedido', ['id' => $pedido->id]) }}" method="POST">
                @csrf
                <label for=""><b>Id do cliente:</b></label><br />
                <input type="number" name="id_cliente" value="{{ $pedido->id_cliente }}"><br />
                <label for=""><b>Id do produto:</b> </label><br />
                <input type="number" name="id_produto" value="{{ $pedido->id_produto }}"><br />
                <label for=""><b>Quantidade:</b></label><br />
                <input type="number" name="quantidade" value="{{ $pedido->quantidade }}"><br />
                <label for=""><b>Valor total:</b></label><br />
                <input type="number" name="valor_total" value="{{ $pedido->valor_total }}"><br />
            </br><button class="btn btn-primary">Salvar alterações</button>
            </form>
        </div>
    </div>
</center>


</body>

</html>
