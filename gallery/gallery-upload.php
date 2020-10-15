<?php
session_start();

require __DIR__ . '/../auth/funcs.php';

$result = false;

if(!isset($_SESSION['auth'])){
    die('Загрузка файлов разрешена только для авторизованных пользователей!');
}

if(!isset($_FILES['image'])){
    die;
}

$fileData = $_FILES['image'];

if($fileData['type'] != 'image/jpeg' && $fileData['type'] != 'image/png'){
    die('Загрузите файл jpg или png');
}

if(0 === $fileData['error']){ 
    $result = move_uploaded_file(
        $fileData['tmp_name'], __DIR__ . '/images/' . $fileData['name']
    );
    logging($_SESSION['auth'] . ' ' .  __DIR__ . '/images/' . $fileData['name']);
}
    
if($result){
    echo 'Файл загружен';
}
else {
    echo 'Загрузка файла завершилась неудачей!';
}




