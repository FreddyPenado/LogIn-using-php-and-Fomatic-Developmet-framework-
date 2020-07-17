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
    <title>Sing Up</title>
</head>
<body class="registro">
<div class="contenedor">
    <div class="ui  teal inverted raised very padded  text container segment">
        <label for="" class="ui blue tag big label">Sign Up!</label>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="ui form" name="login">
            <div class="ui form">
                <br>
                <label for="">Nombre de usuario</label>
                <div class="ui inverted left icon input">
                    <input type="text" name="users" placeholder="Username...">
                    <i class="users icon"></i>
                </div>
                <br>
                <label for="">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <div class="ui inverted left icon input">
                    <input type="password" name="password" placeholder="Password...">
                    <i class="key icon"></i>
                </div>
                <br>
                <label for="">Confirm password</label>
                    <div class="ui inverted left icon input">
                        <input type="password" name="password2" placeholder="Confirm Password...">
                        <i class="key icon"></i>
                    </div>
                <input type="submit" class="ui primary button" value="Registar">
            </div>

            <?php if(!empty($errores)):?>
                <div class=""ui error message">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p class="ui center label">¿Ya tienes una cuenta?
            <a href="login.php">Ingresa Aqui!</A></a>
        </p>
    </div>

</body>
</html>