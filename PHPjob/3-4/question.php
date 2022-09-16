<?php
 
 $my_name = array();
 $number = array();
 $language = array();
 $command = array();
 

?>

<p>お疲れ様です<?php echo $my_name;?>さん</p>

<h2>①ネットワークのポート番号は何番？
$number = [80 , 22 , 20 , 21];
forreach($number as $value) {
    echo $value;
}
</h2>

<h2>②Webページを作成するための言語は？
$language = ["PHP" , "Python" , "JAVA" , "HTML"];
forreach($language as  value) {
    echo $value;
}
</h2>

<h2>③MySQLで情報を取得するためのコマンドは？
$command = ["join" , "select" , "insert" , "update"];
forreach($command as $value) {
    echo $value;
}
</h2>

<input type="submit" value="同意する"/>


