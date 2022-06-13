<?php
   $fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
   $fruits = ["peach" => "もも" ];

   // りんごを出力
   echo $fruits["apple"];
   // みかんを出力
   echo $fruits["orange"];
   // ぶどうを出力
   echo $fruits["grape"];
   // ももを出力
   echo $fruits["peach"];



   array(4) {
      ["apple"] => string(9) "りんご"
      ["orange"] => string(9) "みかん"
      ["grape"] => string(9) "ぶどう"
      ["peach"] => string(9) "もも"
  }
   
   var_dump($fruits);
  
?>