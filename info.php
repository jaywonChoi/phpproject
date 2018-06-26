<?php
session_start();
if (!isset($_SESSION['id']) or !isset($_SESSION['name']) or
!isset($_SESSION['regdate'])) {
  echo "실패";
}else {
  $id = $_SESSION['id'];
  $regdate = $_SESSION['regdate'];
  $name = $_SESSION['name'];
}

$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);

$sql= "select * from member where id =".$_SESSION['id'];

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
    <center>
      <table>
      <tr>
        <td>Name</td>
        <td><?=$name?></td>
      </tr>
      <tr>
        <td>ID</td>
        <td><?=$id?></td>
      </tr>
      <tr>
        <td>regdate</td>
        <td><?=$regdate?></td>
      </tr>

    </table>
    <br>
    <input type="button" value="Back" onclick="top.location.href='board.php'">
  </center>
  </body>
  </html>
