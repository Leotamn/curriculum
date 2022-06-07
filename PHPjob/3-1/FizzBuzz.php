<?php
  $num = 0;

  while($num < 200){
      echo $num;
      $num ++; 
    
      if($num == 101) {
          break;
      }
      echo $num;
      echo '<br>';
      $num++;

  }

?>