<?php

session_start();

if ($_SESSION['auth_users'] != true){
    die('not auth');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<article class="glavstr">
<br>
<h1>Hello world!</h1>
<br>
    <div class="glav">
        Главная страница
    </div>
</br>
<br>
Имя:
</br>
</article>
</body>
</html>

