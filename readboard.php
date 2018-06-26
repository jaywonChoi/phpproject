<?php
session_start();
if(!isset($_SESSION['id'])){
  echo "meta http-equiv='refresh'content='0;writeboard.php'>";
  exit;
}else {
  $id = $_SESSION['id'];
}

$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);
$sql = "
INSERT INTO board(
  id,title,content,regdate)
  values(
    '$id',
    '{$_POST['title']}',
    '{$_POST['text']}',
    NOW()
)";
$result = mysqli_query($conn,$sql);
if($result === false){
  echo "저장실패";
  error_log(mysqli_error($conn));
}else {
  echo "<script>alert('등록성공')</script>";
  echo "<meta http-equiv='refresh'content='0;board.php'>";
  exit;
}
 ?>
