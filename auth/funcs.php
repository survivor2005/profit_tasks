<?php
function getUserList():array
{
    return $arr = 
    [
        'admin'=> '$2y$10$.RPhu6ACeNGCpIxcTM38gueiWIk7u7/Vg59aifBwczuHOQz19UVVG', //пароль 123456Qw
        'user'=> '$2y$10$psZo0u3ShEdBg.9HYeL8GOn6Q/b6/65bEZCjl1qoBYt2jB3OQ9Jm.', //пароль qwerty
    ];
    
}


function existsUser($login):bool
{
    if(isset(getUserList()[$login])) {
        return true;
    }
    else{
        return false;
    }
}


function сheckPassword($login, $password):bool
{
   if(isset(getUserList()[$login]) && password_verify($password, getUserList()[$login])){
       return true;
   }
   else{
       return false;
   } 
}


function getCurrentUser()
{
   if(isset($_SESSION['auth'])){
       return $_SESSION['auth'];
   }
   return null;
}


function logging($log){
    file_put_contents(__DIR__ . '/log.txt', date('Y-m-d H:i:s') . ': ' . $log . "\r\n", FILE_APPEND);
}


