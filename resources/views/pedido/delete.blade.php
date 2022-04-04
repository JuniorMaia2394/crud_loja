<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Excluir produto</title>
</head>

<body>
    </br>
    <center>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ route('excluir_pedido', ['id' => $pedido->id]) }}" method="POST">
                    @csrf
                    <label for=""><b>Tem certeza que deseja excluir este pedido?</b></label>
                    </br><label name="nome"><b>Id cliente:</b> {{ $pedido->id_cliente }}</label>
                    </br><label name="nome"><b>Id produto:</b> {{ $pedido->id_produto }}</label>
                    </br><label name="email"><b>Valor:</b> R$ {{ $pedido->valor_total }}</label></br>
                    <button class="btn btn-primary">Sim</button>
                </form>
            </div>
        </div>


    </center>


</body>

</html>
