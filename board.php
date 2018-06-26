<?php

session_start();
//세션 시작
if (!isset($_SESSION['name']) or !isset($_SESSION['regdate'])) {
  echo "<meta http-equiv='refresh'content='0;index.php'>";
  exit;
}else {
  $name = $_SESSION['name'];
  $regdate = $_SESSION['regdate'];
}


$conn = mysqli_connect(
  "localhost",
  "root",
  "111111",
  "opentutorials"
);


 ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPBOARD</title>
    <style>

      table{
        width: 100%;
        text-align: center;
      }

      thead th{
        height:40px;
        border-top:2px solid #09C;
        border-bottom:1px solid #CCC;
        font:bold 17px 'malgun gothic';
      }
      tbody td{
        text-align:center;
        padding:10px 0;
        border-bottom:1px solid #CCC;
        height:20px; font: 14px 'malgun gothic';
      }
      .box{
        width: 50%;
        margin: auto;
      }
      .read{
        text-align: right;
        text-decoration:
      }
      a{
        text-decoration: none;
      }
      .a{
        text-decoration: overline;
      }
      .info{
        text-align: right;
      }

    </style>
  </head>
  <body>
    <div class="info"><?="Welcome $name 님"?> <a href="info.php" class="a">회원정보</a> <a href="logout.php" class="a">logout</a></div>


  <center><h1>PHPBOARD</h1></center>
    <div class="box">
      <div class="read">
        <h3><a href="writeboard.php"><input type="button" value="writeboard"></a></h3>
      </div>
    <table>
      <thead>
      <tr>
        <th>NO</th>
        <th>title</th>
        <th>writer</th>
        <th>regdate</th>
        <th>hits</th>
      </tr>
      <thead>
        <tbody>
          <?php
            $sql = "
            select * from board order by no";
            $result = mysqli_query($conn,$sql);
            if($result === false){
              echo "접속이 불가능 합니다.";
            }
             elseif ($result === 0) {
               echo "글이 없습니다.";
             }
             while ($row = mysqli_fetch_array($result)) {
              $no = $row['no'];
              $id = $row['id'];
              $title = $row['title'];
              $content = $row['content'];
              $regdate = $row['regdate'];
              $hits = $row['hits'];
           ?>
           <tr>
             <td><?php echo $row['no']?></td>
             <td><a href="boardread.php?no=<?=$no?>"><?php echo $row['title']?></a></td>
             <td><?php echo $row['id']?></td>
             <td><?php echo $row['regdate']?></td>
             <td><?php echo $row['hits']?></td>
           </tr>
           <?php
              }
            ?>

        </tbody>
    </table>
  </div>
  <center>


  </center>
  </body>
</html>
