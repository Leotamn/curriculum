<pre>
<?php
/*$fruits = ["apple" => "りんご","orange" => "みかん","peach" => "もも"];

/*echo $fruits[0];
echo '<br>';

echo $fruits[1];
echo '<br>';

echo $fruits[2];
echo '<br>';*/

function name_price($name, $price)
{
  return("$name の値段は $price 円です。");
}

$ary1 = array("りんご", "みかん", "もも");
$ary2 = array(300, 150, 3000);

print_r(array_map("name_price", $ary1, $ary2));


?>
</pre>