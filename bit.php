<?php
  header("Content-Type: text/html; charset=UTF-8");
  
  $urls['fb'] = "http://www.facebook.com/";
  $urls['jaurim'] = "http://www.jaurim.com/jaurim/";
  $urls['naver'] = "http://www.naver.com/";
  $urls['dongwon'] = "http://www.gangdongwon.com/";
  $urls['mirim'] = "http://www.e-mirim.hs.kr/";

  $url = $_GET['url'];
  if(array_key_exists($url,$urls)){
    header("Location: ".$urls[$url]);
    exit();
  }else{
    echo $url. "는 등록되지 않은 주소입니다.";
  }
?>
~       
