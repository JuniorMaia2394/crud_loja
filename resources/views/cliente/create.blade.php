<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Cliente</title>
</head>
<body>
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
        <button>Criar</button>
    </form>
</body>
</html>
