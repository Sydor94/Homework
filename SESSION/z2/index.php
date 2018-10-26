<?php
    session_start();
session_id();
    if (!isset($_SESSION['info']))
        $_SESSION['info'] = "Текст"; 

    echo "<br>";

    
    echo "<br><a href='text.php'>Перейти на страницу</a>";
?>
<meta charset="UTF-8">