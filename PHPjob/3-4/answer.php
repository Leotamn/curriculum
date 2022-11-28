<?php

if ($number == $answer1) {
    $result1 = "正解！"; 
} else {
    $result1 = "残念・・・";
}


if ($number == $answer1) {
    $result2 = "正解！"; 
} else {
    $result2 = "残念・・・";
}


if ($number == $answer1) {
    $result3 = "正解！"; 
} else {
    $result3 = "残念・・・";
}

?>

<p><?php echo $my_name;?>さんの結果は・・・？</p>

<p>①の答え</p>
<?php echo $result1; ?>

<p>②の答え</p>
<?php echo $result2; ?>


<p>③の答え</p>
<?php echo $result3; ?>