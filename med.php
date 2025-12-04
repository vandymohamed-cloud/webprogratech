<?php 
//declaration of variable
$a=56;
$b=321.56;
$c="Med Vandy";
$isRaining=TRUE;
$d=array(12,9,7,5);
$e=NULL;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>"; 
var_dump($isRaining);

//variable scope(local scope)
function myNum(){
    $van=234; //local scope
    echo "<p>within scope $van</p>";
}
myNum();

//variable scope(global scope)
$van1=234; //global scope
function myNum1(){
    
    
}
myNum1();
echo "<p>Outside scope $van1</p>";

