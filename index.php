<?php session_start();

require __DIR__ . '/auth/funcs.php';

if(getCurrentUser() !== null && existsUser(getCurrentUser())){
    echo 'Вы вошли как: ' . getCurrentUser();
}
else{
    header('location: /lesson5/auth/login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson5</title>
</head>
<body>
<h1>Это стартовая страница</h1>
<div style = 'margin-top: 40px;'>
    <?php require __DIR__ . '/gallery/gallery-view.php'; ?>
</div>
</body>
</html>