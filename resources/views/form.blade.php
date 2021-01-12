<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário :: Teste de Rotsas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
<div class="container my-5">
    <form action="" autocomplete="off">
        <div class="form-group">
            <label for="first_name">Primeiro nome</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="Hugo">
        </div>
        <div class="form-group">
            <label for="last_name">Segundo nome</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="web">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="hugo@gmail.com">
        </div>
        <button class="btn btn-primary">Enviar!</button>
    </form>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
