<?php
   $name = 'taro';
   $password = 'pass';

   if (1 === $name and $password) {
       echo 'ログイン成功です';
   } elseif (1 === $name) {
       echo 'パスワードが間違っています。';
   } elseif (1 === $password) {
       echo '名前が間違っています。';
   } else {
       echo '入力情報が間違っています。';
   }


?>