<?php
session_start(); // открываем сессиию
session_id();
$country = $_SESSION['country'];

        echo $country;
?>

<meta charset="UTF-8">