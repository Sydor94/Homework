<?php 
session_start();
if(!isset($_SESSION['time'])){
$_SESSION['time'] = time();
} else {
echo time() - $_SESSION['time'];
}
echo "<br><a href='logout.php'>Закрыть сессию</a>";
?>
<meta charset="UTF-8">