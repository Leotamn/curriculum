<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="style.css">
</head>


<body>
<form action = "answer.php" method = "POST">

<?php $my_name = $_POST['my_name']; ?>

<input type = "hidden" name="my_name" value="<?php echo $my_name;?>">

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
$answer2 = $language[3];


foreach($language as $value) { ?>
    <input type = "radio" name = "language" value = "<?php echo $value; ?>">
    <?php echo $value;
    }
    ?>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php
$command = ["join" , "select" , "insert" , "update"];
$answer3 = $command[1];



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

<body background-color="#a9a9a9" text="#ffffff">
</body>

</html>