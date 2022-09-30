<?php

$number = $POST['number'];


?>

<p><?php echo date("Y-m-d"); ?>の運勢は</p>
<p>選ばれた数字は<?php echo $num; ?></p>
<p>運勢は<?php echo $res;?></p>

<?php
$array = str_split($number);
$keys = array_rand($array, 1);
$num = $array[$keys];

$lots = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
if (isset($_POST['number'])) {
    $lot = array_rand($lots);
    switch ($lot) {
        case 0;
           $res = '凶';
           $num = 0;
           break;  
        case 1;
           $res = '小吉';
           $num = 1;
           break;   
        case 2;
           $res = '小吉';
           $num = 2;
           break;   
        case 3;
           $res = '小吉';
           $num = 3;
           break;   
        case 4;
           $res = '中吉';
           $num = 4;
           break;   
        case 5;
           $res = '中吉';
           $num = 5;
           break;
        case 6;
           $res = '中吉';
           $num = 6;
           break;
        case 7;
           $res = '吉';
           $num = 7;
           break;  
        case 8;
           $res = '吉';
           $num = 8;
           break; 
        case 9;
           $res = '吉';
           $num = 9;
           break; 
    }


?>



