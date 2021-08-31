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
        <h1>Сотрудники</h1>
        <?php
          require_once '../process/getlist.php';
        ?>
    </div>
  </main>
</html>