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

$sql = "select * from board where no =".$_GET['no'];

$result = mysqli_query($conn,$sql);
//print_r($ar);
$row = mysqli_fetch_array($result); // 한개만 가져올꺼니까 한번만
$ar = array(
  'no' => $row['no'],
  'id' => $row['id'],
  'title'=> $row['title'],
  'content' =>$row['content'],
  'regdate' =>$row['regdate'],
  'hits' =>$row['hits']
);
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
      <form action="update-update.php" method="post">
      <table>
      <tr>
        <td>제목</td>
        <td><input type="text" name="title" placeholder="<?=$ar['title']?>"</td>
      </tr>
      <tr>
        <td>ID</td>
        <td><?=$ar['id'] ?></td>
      </tr>
      <tr>
        <td>Content</td>
        <td><textarea name="content" cols="50" rows="10" placeholder="<?=$ar['content']?>"></textarea></td>
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
    <input type="hidden" name="no" value="<?=$ar['no']?>"> <!--히든 값으로 보내기-->
    <input type="hidden" name="id" value="<?=$ar['id']?>">
    <input type="submit" value="Update">
  </form>

  </center>
  </body>
  </html>
