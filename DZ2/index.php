<?php
$str="aosdgkso-foasdcoga-sscosdc";
if(strlen($str)>10){
$str=substr($str, 0,10);
$isk = array('a', '-','g');
$zam= array(' ');
$str  = str_replace($isk, $zam, $str);
echo $str;
echo "<br>";
}
?>
<?php
$text ="<div class='refnamediv'>
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class='refpurpose'><span class='refname'>htmlspecialchars</span> —
<span class='dc-title'>Любой текст</span></p>
</div>";
  echo strlen(strip_tags($text));  
  echo "<br>";
?>

<?php
$str ="http://example.com/user/username";

$str  = str_replace("/user/", "/author/", $str);
echo $str;
echo "<br>";
?>   <!--заменил именно жесткое вхождение "user"-->


<?php
$arr=array(1,22,45,3,23,45,6,76,55,4);
asort($arr);
    foreach($arr as $value)
{
echo $value, " ,";
}
echo "<br>";
    ?>
<?php    
   $str = "Find me and say Hello Mike!";

$arr = str_split($str);
print_r($arr);
echo "<br>";
?>


<?php
$str = "Find me and say Hello Mike!";
echo substr_count($str, 'a');
echo "<br>";
?>

<?php
$url = 'http://example.com/name=Mike&lastname=Jackson&age=25';

$url = substr($url, strpos($url,n));    // name=Mike&lastname=Jackson&age=25
$url  = str_replace("&", "<br>", $url);// выводит каждый парматер с новой строки name=Mike lastname=Jackson age=25
echo $url;
?>












