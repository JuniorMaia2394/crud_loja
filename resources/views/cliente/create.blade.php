<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Criar Cliente</title>
</head>
<body>
</br><div style="margin-left:1rem; margin-top:1rem">
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
</div>
</br>
    <center>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="{{ route('registrar_cliente') }}" method="post">
                    @csrf
                    <label for="">Nome cliente</label><br />
                    <input type="text" name="nome"><br />
                    <label for="">Email</label><br />
                    <input type="email" name="email"><br />
                    <label for="">Telefone</label><br />
                    <input type="tel" name="telefone"><br />
                    <label for="">Endereço</label><br />
                    <input type="text" name="endereco"><br />
                    <label for="">Senha</label><br />
                    <input type="password" name="senha"><br />
                </br><button class="btn btn-primary">Criar</button>
                </form>
            </div>
          </div>
    </center>
</body>
</html>
