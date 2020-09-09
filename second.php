<?php

session_start();

require_once 'db.php';

$user=$_POST['name'];
$pass= $_POST['password'];

$stmt= $pdo->query('SELECT * FROM `reg` WHERE  `name` ="'.$user.'"');

$result=$stmt->fetch();

if (md5($pass)==$result['password']){
    $_SESSION['auth_users'] = true;
}
else {
    echo ("Не нашел");
    include "auth.html";
}
exit();
?>
