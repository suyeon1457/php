<?php
 session_start();
 header("Content-Type: text/html; charset=UTF-8");
 $name = $_POST['name'];
 $password = $_POST['pw'];

include('db.php');

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php

//디비 연결
$link = mysql_connect($db['host'], $db['user'] , $db['pw']);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//사용할 디비 선택
mysql_select_db($db['db']);
//SQL문 작성
$sql = "select * from members where id='".$name."' and pwd=password('".$password."')";
echo $sql;

$result = mysql_query($sql);
$users = mysql_fetch_assoc($result);
echo "<pre>";
print_r($users);
echo "</pre>";

exit;
//디비 실행

//디비 연결 해제
mysql_close($link);

if(( $name== "smb1457" && $password=="1234" )||
    ($name== "1234" && $password=="myung")){
$_SESSION['isLogin']=1;
$_SESSION['name']=$name;
?>
<h1>로그인 완료!</h1>
당신의 이름은 <?=$name?>군요!<br>
암호는 <?=$password?> 에요.<br>
로그인 페이지로 <a href="./postForm.php" >돌아가기</a>
<?php
}else{
$_SESSION['isLogin']=0;
$_SESSION['name']='';
?>
<h1>당신은 누구입니까?</h1>
아이디, 암호가 일치하는 사용자가 없습니다!<br>
다시 로그인 해보세요. <br>
로그인 페이지로 <a href="./postForm.php" >돌아가기</a>
<?php
}
?>
