<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Todos clientes</title>
</head>

<body>
    <center>
        @foreach ($clientes as $cliente)
            </br>

            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">{{ $cliente->nome }}</h5>
                    <b><label for="">Email:</label><br /></b>
                    <p class="card-text">{{ $cliente->email }}</p>
                    <b><label for="">Telefone:</label><br /></b>
                    <p class="card-text">{{ $cliente->telefone }}</p>
                    <b><label for="">Endereço:</label><br /></b>
                    <p class="card-text">{{ $cliente->endereco }}</p>
                    <b><label for="">Pedido:</label><br /></b>
                    <p class="card-text">{{ $cliente->pedido }}</p>
                    <a href="{{ route('alterar_cliente', ['id' => $cliente->id]) }}" class="btn btn-primary">Editar</a>
                    <a href="{{ route('excluir_cliente', ['id' => $cliente->id]) }}"
                        class="btn btn-primary">Excluir</a>
                    <a href="{{ route('ver_cliente', ['id' => $cliente->id]) }}" class="btn btn-primary">Ver</a>


                </div>

            </div>
            </br>
            <a href="{{ route('registrar_cliente') }}" class="btn btn-primary">Adicionar Novo Cliente</a>
            </br>
        @endforeach
    </center>
</body>

</html>
