<?php
$fruits = ["apple" => "りんご","orange" => "みかん","peach" => "もも"];

/*echo $fruits[0];
echo '<br>';

echo $fruits[1];
echo '<br>';

echo $fruits[2];
echo '<br>';*/

function getprintPrice($fruits,$count) {
    $price = $fruits * $count;
    print ".$fruits.は".$price."円です。";
}

getprintPrice(300,1);
getprintPrice(150,1);
getprintPrice(3000,1);


?>