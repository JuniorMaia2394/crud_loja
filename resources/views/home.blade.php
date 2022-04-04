<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    </br>
    <center>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Bem-vindo!</h5>
                <p class="card-text">Gerencie sua loja aqui!</p>
            </div>
        </div>


        </br>
        <div class="container px-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <b>CLIENTES</b>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gerencie seus clientes</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="{{ route('registrar_cliente') }}"
                                        class="card-link">Criar Cliente</a></li>
                                <li class="list-group-item"><a href="{{ route('ver_clientes') }}"
                                        class="card-link">Ver
                                        Clientes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <b>PRODUTOS</b>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gerencie seus Produtos</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="{{ route('registrar_produto') }}"
                                        class="card-link">Criar Produto</a></li>
                                <li class="list-group-item"><a href="{{ route('ver_produtos') }}"
                                        class="card-link">Ver
                                        Produtos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <b>PEDIDOS</b>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gerencie seus Pedidos</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="{{ route('registrar_pedido') }}"
                                        class="card-link">Criar Pedido</a></li>
                                <li class="list-group-item"><a href="{{ route('ver_pedidos') }}"
                                        class="card-link">Ver
                                        Pedidos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </center>
</body>

</html>
