<?php 
//index array declaration
$Cars=array("BMW","Toyota","Bentz","Dodge");
var_dump($Cars);
echo "<br>";
//to access toyota
echo $Cars[3];
//To modify BMW
echo "<br>";
$Cars[0]="Nissan";
var_dump($Cars);
//to add an element
echo "<br>";
$Cars[]="Tesla";
var_dump($Cars);
echo "<br>";
//Add multiple element
array_push($Cars,"Lex","audi","Range Rover");
var_dump($Cars);
echo "<br>";
//loop through the array and display it element
for($a=0;$a<4;$a++){
    echo "$Cars[$a].<br>";
}
echo "<br>";
//Execute an index array function
function myMessage(){
    echo "My message";
}
$med=array("Vandy",24,myMessage());
echo $med[2];
echo "<br>";
echo "<br>";
//sort the index array in ass order
$bin=array("aiah","kama","ran","jan","wert","reat","talt");
sort($bin);
$van=count($bin);
for($x=0;$x<$van;$x++){
    echo "$bin[$x].<br>";
}
echo "<br>";
echo "<br>";
//sort the index array in des order
rsort($bin);
$van=count($bin);
for($x=0;$x<$van;$x++){
    echo "$bin[$x].<br>";
}

echo "<br>";
echo "<br>";


$fat=array("aiah","kama","ran","jan","wert","reat","talt");
array_splice($fat,3,2);
var_dump($fat);

echo "<br>";
echo "<br>";
$zat=array("aiah","kama","ran","jan","wert","reat","talt");
unset($zat[1]);
var_dump($zat);
?>