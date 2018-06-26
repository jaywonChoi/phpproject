<?php
if (!isset($_GET['no'])) {
  echo "실패";
}else {
  $no = $_GET['no'];
}

$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);

$sql = "select id,title,content,regdate,hits from board where no=".$_GET['no'];

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result); // 한개만 가져올꺼니까 한번만
$ar = array(
  'id' => $row['id'],
  'title'=> $row['title'],
  'content' =>$row['content'],
  'regdate' =>$row['regdate'],
  'hits' =>$row['hits']
);
//print_r($ar);

$sql2 = "update board set hits = hits+1 where no = ".$_GET['no'];
$result2 = mysqli_query($conn,$sql2);

 ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPBOARD</title>
    <style>
      table{
        width: 50%;
        margin-top: 50px;
      }
      table tr td{
        border-left:1px solid #09C;
        text-align: center;
        padding:20px 0;
        height:20px;
        font: 15px 'malgun gothic';
      }

    </style>
  </head>
  <body>
    <center><h2>ReadBoard-<?=$no?>번</h2></center>
    <center>
      <table>
      <tr>
        <td>제목</td>
        <td><?=$ar['title']?></td>
      </tr>
      <tr>
        <td>ID</td>
        <td><?=$ar['id'] ?></td>
      </tr>
      <tr>
        <td>Content</td>
        <td><?=$ar['content']?></td>
      </tr>
      <tr>
        <td>regdate</td>
        <td><?=$ar['regdate']?></td>
      </tr>
      <tr>
        <td>hits</td>
        <td><?=$ar['hits']?></td>
      </tr>
    </table>
    <br>
    <input type="button" value="Update" onclick="top.location.href='update.php?no=<?=$_GET['no']?>'">
    <input type="button" value="Back" onclick="top.location.href='board.php'">
    <input type="button" value="Delete" onclick="top.location.href='delete.php?no=<?=$_GET['no']?>'">
  </center>
  </body>
  </html>
