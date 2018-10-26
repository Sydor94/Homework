<?php
session_start(); // открываем сессиию
session_id();

$user = $_SESSION['info'];

        echo $user;
?>
<meta charset="UTF-8">