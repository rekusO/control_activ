
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/material.min.js" ></script>
    <script src="js/sweetalert2.min.js" ></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
    <script src="js/main.js" ></script>
</head>
<body class="cover">
{{ Form::open(['route'=>'login','method'=>'POST'])}}
<div class="container-login">
    <p class="text-center" style="font-size: 80px;">
        <i class="zmdi zmdi-account-circle"></i>
    </p>
    <p class="text-center text-condensedLight">Inicia sesión con tu cuenta</p>
    <form>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

            {{ Form::email('email',null,['class'=>'mdl-textfield__input'])}}
            <label class="mdl-textfield__label" for="name">Nombre del Usuario</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

            {{ Form::password('password',['class'=>'mdl-textfield__input'])}}

            <label class="mdl-textfield__label" for="password">Contraseña</label>
        </div>
        {{ Form::button('Ingresar',['type'=>'submit','class'=>'mdl-button mdl-js-button mdl-js-ripple-effect', 'style'=>'color: #3F51B5; float:right;'])}}

    </form>
</div>
{{ Form::close()}}
</body>
</html>