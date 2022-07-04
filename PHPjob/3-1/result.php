<?php
$my_name = $_POST['my_name'];
$mailaddress = $_POST['address'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$hidden_param = $_POST['hidden_param'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>メールアドレスは、<?php echo $address; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>
<p>性別は<?php echo $sex; ?>です。</p>
<p>性別は<?php echo $hidden_param; ?>です。</p>
