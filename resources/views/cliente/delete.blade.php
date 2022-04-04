<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Excluir cliente</title>
</head>
<body>
</br><div style="margin-left:1rem; margin-top:1rem">
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
</div>
</br>
    <center>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ route('excluir_cliente', ['id' => $cliente->id])}}" method="POST">
                    @csrf
                    <label for=""><b>Tem certeza que deseja excluir este cliente?</b></label></br>
                </br><label  name="nome"><b>Nome:</b>  {{ $cliente->nome }}</label>
            </br><label  name="email"><b>Email:</b>  {{ $cliente->email }}</label></br>
            </br><button class="btn btn-primary">Sim</button>
                </form>
            </div>
          </div>
    </center>


</body>
</html>
