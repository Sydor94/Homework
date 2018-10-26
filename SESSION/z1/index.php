<?php
    session_start();
    $_SESSION['text'] = "Текст для вывода";
    if (!isset($_SESSION['counter'])){
        $_SESSION['counter'] = 0;
    }

if ($_SESSION['counter']<1){
    echo "Обнови чтобы увидеть текст";
    $_SESSION['counter']++;
}
else{
  echo $_SESSION['text'];  
}

    echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить</a><br />"; // указывает на тот файл который сейчас выполняется

    echo "<br><a href='logout.php'>Закрыть сессию</a>";
?>

<meta charset="UTF-8">