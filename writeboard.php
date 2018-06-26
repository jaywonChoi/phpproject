<?php
session_start();
//세션 시작
if (!isset($_SESSION['name']) or !isset($_SESSION['regdate'])or !isset($_SESSION['id'])) {
  echo "<meta http-equiv='refresh'content='0;index.php'>";
  exit;
}else {
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  $regdate = $_SESSION['regdate'];
}
 ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Write Board</title>
    <style>

          table{
            text-align: center;
          }
          table{
            margin: auto;
          }
          .box{
            width: 50%;
            margin: auto;
          }

          tr td{
            text-align:center;
            padding:30px 90px;
            border-bottom:1px solid #09C;
            height:20px;
            font: 20px 'malgun gothic';
          }
          .submit{
            font-size: 20px;
            margin-top: 20px;
          }
          .text{
            border: none;
            border-bottom: 1px solid #CCC;
            width: 100%;

          }
          .content{
            border: none;
            border-bottom: 1px solid #CCC;
            width: 100%;
          }


    </style>
  </head>
  <body>
    <div class="box">
    <h2>Writeboard</h2>
    <form action="readboard.php" method="post">
      <table>
        <tr>
          <td>ID</td>
          <td><?=$id?></td>
        </tr>
        <tr>
          <td>Title</td>
          <td><input type="text" name="title" class="text" placeholder="제목을 적어주세요."></td>
        </tr>
        <tr>
          <td>Content</td>
          <td><textarea name="text" cols="70" rows="10"class="content" placeholder="내용을 적어주세요."></textarea></td>
        </tr>
      </table>
        <center><input type="submit" value="등록" class="submit"></center>
    </form>
  </div>

  </body>
</html>
