<?php

$my_name = $_POST['my_name'];
$number = $_POST['number'];
$language = $_POST['language'];
$command = $_POST['command'];

?>

<?php

if ($number == 80 ) {
    $result1 = "正解！"; 
} else {
    $result1 = "残念・・・";
}


if ($number ==  'PHP' ) {
    $result2 = "正解！"; 
} else {
    $result2 = "残念・・・";
}


if ($number == 'join' ) {
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