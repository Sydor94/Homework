<?php
    session_start(); // открыли сессию
    if (!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 0;
    }

if ($_SESSION['counter']<1){
    echo "Вы ещё не обновляли страницу";
    $_SESSION['counter']++;
}
else{
  echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";  
}

    echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить</a><br />"; // указывает на тот файл который сейчас выполняется

session_id();

    echo "<br><a href='logout.php'>Закрыть сессию</a>";
?>

<meta charset="UTF-8">