<?php
  session_start();
  if(!$_SESSION['userAuthorized']){
    header('Location:../');
  }
  require_once '../process/connectdb.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="..\mainStyle.css">
    <script type ="text/javascript" src="..\jQuery 3.6.1.js"></script>
    <script type ="text/javascript" src="..\mainScript.js"></script>
  </head>
  <body>
    <header>
      <form method="POST" action="../process/logout.php">
        <nav>
          <label>Вы авторизированиы.</label>
          <input type="submit"value="Выйти" class="btn">
        </nav>
      </form>
    </header>
    <main>
      <div class="form">
        <form method="GET" action="../process/edit.php">
          <h1>Редактирование</h1>
          <lable>Фамилия</lable>
          <input type="text" class="textInput" name="lastname">
          <lable>Имя</lable>
          <input type="text" class="textInput" name="name">
          <lable>Отчество</lable>
          <input type="text" class="textInput" name="fathername">
          <lable>Должность</lable>
          <input type="text" class="textInput" name="position">
          <lable>Дата устройтсва на работу</lable>
          <input type="text" class="textInput" name="date">
          <input class="btn" type="submit" value="Редактировать">
        </form>
    </div>
    </main>
    <footer>
      
    </footer> 
  </body>
</html>
