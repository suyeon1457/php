<?php
  header("Content-Type: text/html; charset=UTF-8");
  $goodsid= $_GET['goodsid'];
  if($goodsid == ""){
    $goodsid="비어있음";
  }
  $getresult=print_r($_GET);
?>
<a href=" ./get.php?goodsid=12345" target="_self">
./get.php?goodsid=12345
</a>
<hr>
 goodsid는 <?=$goodsid?>입니다.
<hr>
현재 넘겨진 값<br>
<pre>
<?=$goodsid?>
</pre>
