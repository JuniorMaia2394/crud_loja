<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Todos os pedidos</title>
</head>
<body>
    <center>
        @foreach ($pedidos as $pedido)
    </br>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$pedido->id_cliente}}</h5>
              <b><label for="">Id Produto:</label><br /></b>
              <p class="card-text">{{$pedido->id_produto}}</p>
              <b><label for="">Quantidade:</label><br /></b>
              <p class="card-text">{{$pedido->quantidade}}</p>
              <b><label for="">Valor total:</label><br /></b>
              <p class="card-text">{{$pedido->valor_total}}</p>
              <a href="{{ route('alterar_pedido', ['id' => $pedido->id]) }}" class="btn btn-primary">Editar</a>
              <a href="{{ route('excluir_pedido', ['id' => $pedido->id]) }}" class="btn btn-primary">Excluir</a>
              <a href="{{ route('ver_pedido', ['id' => $pedido->id]) }}" class="btn btn-primary">Ver</a>


            </div>

          </div>
        </br>
          <a href="{{ route('registrar_pedido') }}" class="btn btn-primary">Adicionar Novo pedido</a>
        </br>
          @endforeach
    </center>
</body>
</html>

