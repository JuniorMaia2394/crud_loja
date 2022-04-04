<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cadastrar Pedido</title>
</head>

<body>
</br>
    <center>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        <form action="{{ route('registrar_pedido') }}" method="post">
            @csrf
            <label for="">Id do cliente</label><br />
            <input type="number" name="id_cliente"><br />
            <label for="">Id do produto</label><br />
            <input type="number" name="id_produto"><br />
            <label for="">Quantidade</label><br />
            <input type="number" name="quantidade"><br />
            <label for="">Valor total</label><br />
            <input type="number" name="valor_total"><br />

        </br><button class="btn btn-primary">Criar</button>

        </form>
    </div>
</div>
    </center>

</body>

</html>
