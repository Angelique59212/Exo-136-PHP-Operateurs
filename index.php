<?php

// Premiere ligne
$nb1 =10;
$nb2 = 5;
echo $nb1 *= $nb2;
echo "<br>";

//Deuxieme ligne
$nb3 = 10;
$nb4 = 2;
echo $nb3 /= $nb4;

//Troisieme ligne
$a = 5;
$b = 5;
if($a === $b) {
    echo "<br><br>a est identique à b";
}

//Quatrieme ligne
if($a != $b) {
    echo"<br><br>a n'est pas identique à b";
}


//Cinquieme ligne
$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];
if($arr1 == $arr2) {
    echo "<br><br>les tableaux ont le même contenu";
}

