<?php
$fruits = ["apple" => "りんご","orange" => "みかん","peach" => "もも"];

/*echo $fruits[0];
echo '<br>';

echo $fruits[1];
echo '<br>';

echo $fruits[2];
echo '<br>';*/

$fruits = array(
    'りんご' => '300',
    'みかん' => '150',
    'もも' => '3000',
);


foreach( $fruits as $key => $value) {
    echo $key;
    echo "は";
    echo $value;
    echo "円です。<br>";

}
?>