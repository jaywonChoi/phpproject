<?php

if (!isset($_POST['no']) or !isset($_POST['id'])) {
  echo "실패";
}else {
    $no = $_POST['no'];
    $id = $_POST['id'];
}
$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);

$sql = "update board set
title = '{$_POST['title']}',
content = '{$_POST['content']}'
where no= '{$_POST['no']}' and id='{$_POST['id']}'";
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
