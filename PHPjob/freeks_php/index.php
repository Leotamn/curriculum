<?php

   
   function getTraiangleArea($base , $height) {
      $area = $base * $height / 2;
      print "三角形の面積は" .$area."だよ";
      echo "<br>";
   }

   getTraiangleArea(10,5);
   getTraiangleArea(15,8);
   getTraiangleArea(8,6);
   

?>