<form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス:<input type="text" name="address" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  性別：
  <input type="radio"name="sex" value="男性">男性
  <input type="radio"name="sex" value="女性">女性
  <br>
  <input type="hidden" name="hidden_param" value="隠しパラメータから" />
  <select name="number">
    <?php for ($i=1;$i<=10;$i++){ ?>
      <option value="<?php echo $i; ?>">
         <?php echo $i; ?>
      </option>
      <?php } ?>
    </select>
  
  </select>

  <input type="submit" value="送信するよ"/>
</form>