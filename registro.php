<?php
session_start();
if (isset($_SESSION['usuario'])){
    header('Location:index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING)  ;
    $password1 = $_POST['password'];
    $password2 = $_POST['password2'];
    echo "$user . $password1 . $password2";
}
require 'views/registro.view.php';

?>