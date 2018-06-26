<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
  </head>
  <body>
  <h2>회원가입</h2>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>개인정보를 적어주세요.</legend>
      <div>이름:<input type="text" name="name"></div>
      <div>ID:<input type="text" name="id"></div>
      <div>PW: <input type="password" name="pw"></div><br>
      <input type="submit" value="가입">
    </fieldset>
  </form>
  </body>
</html>
