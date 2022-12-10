<form action = "answer.php" method = "POST">

<?php
 
 $my_name = $_POST['my_name'];
 

?>

<input type = "hidden" name="my_name" value="<?php echo $my_name;?>">



<p>お疲れ様です<?php echo $my_name ?>さん</p>

<h2>①ネットワークのポート番号は何番？</h2>
<?php
$number = [80 , 22 , 20 , 21];
$answer1 = $number[0];
$answer1 = $number[1];
$answer1 = $number[2];
$answer1 = $number[3];


foreach($number as $value) {  ?>
    <input type = "radio" name = "number" value = "<?php echo $value; ?>">
    <?php echo $value;
    }
    ?>


<h2>②Webページを作成するための言語は？</h2>
<?php
$language = ["PHP" , "Python" , "JAVA" , "HTML"];
$answer2 = $language[0];
$answer2 = $language[1];
$answer2 = $language[2];
$answer2 = $language[3];

foreach($language as $value) { ?>
    <input type = "radio" name = "language" value = "<?php echo $value; ?>">
    <?php echo $value;
    }
    ?>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php
$command = ["join" , "select" , "insert" , "update"];
$answer3 = $command[0];
$answer3 = $command[1];
$answer3 = $command[2];
$answer3 = $command[3];



foreach($command as $value) { ?>
    <input type = "radio" name = "command" value = "<?php echo $value; ?>">
    <?php echo $value;
    }
    ?>
<br>

<input type = "hidden" name = "answer1" value = "<?php echo $answer1;?>">
<input type = "hidden" name = "answer2" value = "<?php echo $answer2;?>">
<input type = "hidden" name = "answer3" value = "<?php echo $answer3;?>">
<input type="submit" value="同意する"/>

</form>

