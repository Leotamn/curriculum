<form action = "answer.php" method = "POST">

<?php
 
 $my_name = $_POST['my_name'];
 
 
?>

<p>お疲れ様です<?php echo $my_name ?>さん</p>

<h2>①ネットワークのポート番号は何番？</h2>
<?php
$number = [80 , 22 , 20 , 21];

foreach($number as $value) {  ?>
    <input type = "radio">
    <?php echo $value;
}
?>


<h2>②Webページを作成するための言語は？</h2>
<?php
$language = ["PHP" , "Python" , "JAVA" , "HTML"];

foreach($language as $value) { ?>
    <input type = "radio">
    <?php echo $value;
}
?>


<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php
$command = ["join" , "select" , "insert" , "update"];

foreach($command as $value) { ?>
    <input type = "radio">
    <?php echo $value;
}
?>
<br>


<input type="submit" value="同意する"/>

</form>

