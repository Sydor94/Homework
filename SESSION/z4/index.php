<?php
session_start(); // открыли сессию
session_id();
?>

<form action="index.php" method="POST">
    <input type="text" name="country">
    <input type="submit">
</form>
<?php
$_SESSION['country']= $_POST['country'];
    
echo "<br><a href='text.php'>Перейти на страницу</a>";
?>
<meta charset="UTF-8">