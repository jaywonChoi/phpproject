<?php
//가입하기
$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);

$sql = "
INSERT INTO member(
  name,id,pw,regdate)
  values(
    '{$_POST['name']}',
    '{$_POST['id']}',
    '{$_POST['pw']}',
    NOW()
)";
$result =mysqli_query($conn,$sql);
if($result === false){
  echo "저장실패";
  error_log(mysqli_error($conn));
}else {
  echo "<script>alert('등록성공')</script>";
  echo "<meta http-equiv='refresh'content='0;index.php'>";
  exit;
}
echo $sql;
 ?>
