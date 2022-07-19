
<?php


$fruits = ["りんご"=> 300 , "みかん"=> 150 , "もも" => 3000];

function getPrice($unitprice,$quantity) {
  $price = $unitprice * $quantity;
  return $price;
}

foreach($fruits as $key => $value){

  echo $key."は".getPrice($value,$num)."円です。"."<br>";
}



?>
