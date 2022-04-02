<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver cliente</title>
</head>
<body>
    <label for="">Nome cliente</label><br />
    <input type="text" name="nome" value="{{$cliente->nome}}"><br />
    <label for="">Email</label><br />
    <input type="email" name="email" value="{{$cliente->email}}"><br />
    <label for="">Telefone</label><br />
    <input type="tel" name="telefone" value="{{$cliente->telefone}}"><br />
    <label for="">Endereço</label><br />
    <input type="text" name="endereco" value="{{$cliente->endereco}}"><br />
    <label for="">Senha</label><br />
    <input type="password" name="senha" value="{{$cliente->password}}"><br />

</body>
</html>


