<?php
session_start();
if (isset($_SESSION['usuario'])){
    header('Location:index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $users = filter_var(strtolower($_POST['users']), FILTER_SANITIZE_STRING)  ;
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];
   /* echo "$users . $password1 . $password2";*/

    $errores = '';

    if(empty($users) or empty($password1) or empty($password2)){
        $errores .= '<li> Por favor rellena los datos correctamente </li>';
    }else{
        try {
            $conexion = new PDO('mysql:host=localhost; dbname=practica_login', 'root', '');

        }catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario =  :users LIMIT 1');
        $statement->execute(array( ':users' => $users));
        $resultado = $statement->fetch();

        if ($resultado != false){
            $errores .= '<li>El nombre de usuario ya existe</li>';
        }

        $password1 = hash('sha512', $password1);
        $password2 = hash('sha512', $password2);

        if ($password1 != $password2){
            $errores ='<li> Las contraseñas no cohinciden </li>';
        }
    }
    if ($errores ==''){
        $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, password) VALUES (null, :users, :password1)');
        $statement->execute(array(':users' => $users, ':password1' => $password1));
        header('Location: login.php');
    }
}

require 'views/registro.view.php';

?>