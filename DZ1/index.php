<meta charset="UTF-8">
    <?php

    for($i=1;$i<50;){
        echo $i." ";
        $i+=2;
    }
echo "<br>";
?>
 
<?php
$n=0;
while ($n++<4) echo "Категория $n, ";
echo "<br>";
?>
   
 
<?php
    $posts = [
        0 => [
            'title' => 'List-based media object 1',
            'slug' => 'list-based-media',
            'date' => '10/11/2011',
            'author' => 'Author 1',
            'description' => 'Opisanie1',
            'categ' => 'Категория 1'
        ],
        1 => [
            'title' => 'List-based media object 2',
            'date' => '1/12/2010',

            'author' => 'Author 1',
            'description' => 'Opisanie2',
            'categ' => 'Категория 2'
        ],
        2 => [
            'title' => 'List-based media object 3',
            'date' => '11/09/2009',
            'author' => 'Author 1',
            'description' => 'Opisanie3',
            'categ' => 'Категория 3'
        ]
    ];


foreach ($posts as $value){
    echo $value['categ'].", ";
}
echo "<br>";
?>  

 <form action="index.php">
   <br>
    <legend>Форма</legend><br> 
  <?php
     $Mas = array( "<label>Имя<input type='text' required></label>", "<label>E-mail<input type='email' required></label>", "<label for='country'>Страна</label>
      <select name='country'>
        <option>Выберите страну проживания</option>
        <option value='Россия'>Россия</option> 
        <option value='Украина'>Украина</option> 
        <option value='Беларусь'>Беларусь</option> 
      </select>", "<button type='submit'>Отправить</button>" );
foreach ( $Mas as $value ) {
  echo $value."<br>";
}
?>
     
 </form>
 
<form action="index.php">
 <label>Имя<input type="text" required></label><br>
 <label>E-mail<input type="email" required></label><br>
<?php require_once 'button.php';?>
</form>


 <?php
$lang="ru";
$arr=[];
$Eng = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
$Rus = array("Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");

if ($lang == "ru") {
    $arr=$Rus;
} elseif ($lang == "en") {
    $arr=$Eng;
} else {
    echo "Нет такого языка";
}
foreach($arr as $value)
{
echo $value, " ";
}
echo "<br>";
?>

<?php

$lang="en";
$arr=[];
$Eng = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
$Rus = array("Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");

switch ($lang) {
    case "ru":
        $arr=$Rus;;
        break;
    case "en":
        $arr=$Eng;
        break;
}
foreach($arr as $value)
{
echo $value, " ";
}

echo "Задания про While понял не очень. Ещё как перебрать массив форичем, но вывести на экран в форме не все поля? Я вывел все)";
?>




