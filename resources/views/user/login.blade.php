<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login ! Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <section id="conteudo" class="container">
        <h1>Gerenciador de Investimento</h1>
        <h3>gerencie de forma confiável seu investimento, e o deu seu grupo de investidores</h3>
        {!! Form::open(['route'=> 'user.login', 'method' => 'post']) !!}
        <div class="form-group">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
        </div>
        <div class="form-group">
            {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Senha']) !!}
        </div>

        {!! Form::submit('Entrar', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </section>
</body>
</html>