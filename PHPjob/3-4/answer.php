<?php

$my_name = $_POST['my_name'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];

?>

<?php

function judgment ($selected, $collect) {
    if ($selected == $collect ){
        echo "正解";
        return;
    } else {
        echo  "残念・・・";
        return;
    }
}

?>

<p><?php echo $my_name;?>さんの結果は・・・？</p>

<p>①の答え</p>
<?php echo $answer1; ?>

<p>②の答え</p>
<?php echo $answer2; ?>


<p>③の答え</p>
<?php echo $answer3; ?>