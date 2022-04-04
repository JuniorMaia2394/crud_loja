<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar cliente</title>
</head>

<body>
</br><div style="margin-left:1rem; margin-top:1rem">
    <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
</div>
    <center>
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <form action="{{ route('alterar_cliente', ['id' => $cliente->id]) }}" method="POST">
                    @csrf
                    <b><label for=""><b>Nome cliente:</b></label><br /></b>
                    <input type="text" name="nome" value="{{ $cliente->nome }}"><br />
                    <b><label for=""><b>Email:</b> </label><br /></b>
                    <input type="email" name="email" value="{{ $cliente->email }}"><br />
                    <b><label for=""><b>Telefone:</b></label><br /></b>
                    <input type="tel" name="telefone" value="{{ $cliente->telefone }}"><br />
                   <b><label for=""><b>Endereço:</b></label><br /></b>
                    <input type="text" name="endereco" value="{{ $cliente->endereco }}"><br />
                    <b><label for=""><b>Senha</b></label><br /></b>
                    <input type="password" name="senha" value="{{ $cliente->password }}"><br />
                </br><button class="btn btn-primary">Salvar alterações</button>
                </form>
            </div>
        </div>
    </center>


</body>

</html>
