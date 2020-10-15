<?php
session_start();


if(isset($_POST['login'])){
    $login = strip_tags(trim($_POST['login']));
}

if(isset($_POST['password'])){
    $password = strip_tags(trim($_POST['password']));
}

require __DIR__ . '/funcs.php';

if(isset($login) && isset($password)){
    if(!сheckPassword($login, $password)){
        echo 'Не верный логин или пароль!';
    }
    else{
        $_SESSION['auth'] = $login;
        header('location: /lesson5/index.php');
    }
}


?>

<form action="" method="POST">
    <input type="text"name="login">
    <input type="password"name="password">
    <button>Войти</button>
</form>
