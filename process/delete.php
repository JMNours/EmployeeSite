<?php
  session_start();
  require_once 'connectdb.php';
  $id=htmlspecialchars($_GET['id']);

  $sql = $connect->prepare(' DELETE FROM employeeslist WHERE id=?');
  $sql->bind_param('i',$id);
  $sql->execute();
  header("Location: ../../EmployeesList/");
?>