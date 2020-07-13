<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.js"></script>
    <title>Log In</title>
</head>
<body class="registro">
<div class="contenedor">
    <div class="ui  teal inverted raised very padded  text container segment">
        <label for="" class="ui blue tag big label">Log In!</label>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="ui form" name="login">
            <div class="ui form">
                <br>
                <label for="">Nombre de usuario</label>
                <div class="ui inverted left icon input">
                    <input type="text" name="user" placeholder="Username...">
                    <i class="users icon"></i>
                </div>
                <br>
                <label for="">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <div class="ui inverted left icon input">
                    <input type="password" name="password" placeholder="Password...">
                    <i class="key icon"></i>
                </div>
                <input type="submit" class="ui primary button" value="Ingresar">
            </div>
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p class="ui center label">¿No tienes una cuenta?
            <a href="registro.php">Registrate Aqui!</A></a>
        </p>
    </div>

</body>
</html>