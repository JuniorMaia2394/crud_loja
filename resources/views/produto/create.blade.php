<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastrar produto</title>
</head>
<body>
</br><div style="margin-left:1rem; margin-top:1rem">
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
</div>
    <center>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
        <form action="{{ route('registrar_produto')}}" method="post">
            @csrf
            <label for="">Nome produto</label><br />
            <input type="text" name="nome"><br />
            <label for="">Categoria</label><br />
            <input type="text" name="categoria"><br />
            <label for="">Desenvolvedora</label><br />
            <input type="text" name="desenvolvedora"><br />
            <label for="">Preço</label><br />
            <input type="number" name="preço"><br />
            <label for="">Sinopse</label><br />
            <input type="text" name="sinopse"><br />
        </br><button class="btn btn-primary">Criar</button>

        </form>
    </div>
</div>
    </center>
</body>
</html>
