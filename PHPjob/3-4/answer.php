<?php

$my_name = $_POST['my_name'];
$number = $_POST['number'];
$language = $_POST['language'];
$command = $_POST['command'];

$question = $_POST['question'];
$answer = $_POST['answer'];

?>

<?php

function judgment ($selected, $collect) {
    if ($result1 == 80 , $result2 == 'PHP' , $result3 == 'join' ){
        $result = "正解！";
    } eise {
        $result = "残念・・・";
    }
}

?>

<p><?php echo $my_name;?>さんの結果は・・・？</p>

<p>①の答え</p>
<?php echo $result1; ?>

<p>②の答え</p>
<?php echo $result2; ?>


<p>③の答え</p>
<?php echo $result3; ?>