<?php
$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);
$id = $_POST['id'];
$pw= $_POST['pw'];
$sql = "select * from member where
id='$id' and pw = '$pw'";

$result = mysqli_query($conn,$sql);
if($result === false){
  echo "<script>alert('아이디 또는 비밀번호 존재하지않음');
  history.back();</script>";
  error_log(mysqli_error($conn));
  exit;

}
while ($row = mysqli_fetch_array($result)) {
  $name = $row['name'];
  $regdate = $row['regdate'];

}
session_start(); //세션시작 
$_SESSION['name']=$name;
$_SESSION['regdate']=$regdate;
$_SESSION['id']=$id;
 ?>
<meta http-equiv="refresh" content="0;board.php">
