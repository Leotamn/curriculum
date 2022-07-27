
<?php


$fruits = ["りんご"=> 300 , "みかん"=> 150 , "もも" => 3000];

function getPrice($unitprice,$quantity) {
  $price = $unitprice * $quantity;
  return $price;
}

foreach($fruits as $key => $value){

  echo $key;
  echo "は";
  echo getPrice($value,1);
  echo "円です。";
  echo "<br>";
}



?>
