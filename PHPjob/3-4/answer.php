<?php 
 $my_name = $_POST['my_name'];

 $number = $POST['number'];
 $answer1 = $POST['answer1'];

 $language = $POST['language'];
 $answer2 = $POST['answer2'];

 $command = $POST['command'];
 $answer3 = $POST['answer3'];



?>
<p><?php echo $my_name;?>さんの結果は・・・？</p>
<p>①の答え</p>
if ($number == $answer1) {
    $result1 = "正解！"; 
} else {
    $result1 = "残念・・・";
}

<p>②の答え</p>
if ($number == $answer1) {
    $result2 = "正解！"; 
} else {
    $result2 = "残念・・・";
}

<p>③の答え</p>
if ($number == $answer1) {
    $result3 = "正解！"; 
} else {
    $result3 = "残念・・・";
}
