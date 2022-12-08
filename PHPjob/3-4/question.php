<form action = "answer.php" method = "POST">

<?php
 
 $my_name = $_POST['my_name'];
 

?>

<input type = "hidden" name="my_name" value="<?php echo $my_name;?>">
<input type = "hidden" name="number" value="<?php echo $number;?>">
<input type = "hidden" name="language" value="<?php echo $language;?>">
<input type = "hidden" name="command" value="<?php echo $command;?>">



<p>お疲れ様です<?php echo $my_name ?>さん</p>

<h2>①ネットワークのポート番号は何番？</h2>
<?php
$number = [80 , 22 , 20 , 21];
$answer1 = $number[0];

foreach($number as $value) {  ?>
    <input type = "radio" name = "number" value = "<?php echo $value; ?>">
    <?php echo $value;
    }
    ?>


<h2>②Webページを作成するための言語は？</h2>
<?php
$language = ["PHP" , "Python" , "JAVA" , "HTML"];
$answer2 = $language[0];

foreach($language as $value) { ?>
    <input type = "radio" name = "language" value = "<?php echo $value; ?>">
    <?php echo $value;
    }
    ?>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php
$command = ["join" , "select" , "insert" , "update"];
$answer3 = $command[0];

foreach($command as $value) { ?>
    <input type = "radio" name = "command" value = "<?php echo $value; ?>">
    <?php echo $value;
    }
    ?>
<br>

<input type = "hidden" name = "answer1" value = "<?php echo $answer1;?>">
<input type="submit" value="同意する"/>

</form>

