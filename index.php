<?php
  session_start();
  if($_SESSION['userAuthorized']){
    header('Location:EmployeesList');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="mainStyle.css">
    <script type="text/javascript" src="jQuery 3.6.1.js"></script>
    <script type="text/javascript" src="mainScript.js"></script>
  </head>
  <body>
    <main>
      <div class="form">
        <form action="process/signin.php" method="POST"> 
          <h1>Авторизация</h1>
          <lable>Логин</lable>
          <input type="text" class="textInput" name="login">
          <lable>Пароль</lable>
          <input type="password" class="textInput" name="password">
          <input class="btn" type="submit" value="Войти">
          <p class="msg">
          <?php echo $_SESSION['message']  ?>
          </p>
        </form>
      </div>
    </main>
    <footer>
      
    </footer> 
  </body>
</html>
