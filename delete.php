<?php
$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);
if (!isset($_GET['no'])) {
  echo "실패";
}else {
  $no = $_GET['no'];
}
$sql = "delete from board where no=".$_GET['no'];
$result = mysqli_query($conn, $sql);
if ($result === false) {
  echo "<script>alert('삭제실패');
  history.back();</script>";
  error_log(mysqli_error($conn));
  exit;
}
else {
  echo "<script>alert('삭제성공')</script>";
  echo "<meta http-equiv='refresh'content='0;board.php'>";
  exit;
}


 ?>
