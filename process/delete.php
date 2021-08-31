<?php
  session_start();
  require_once 'connectdb.php';
  var_dump($_GET['id']);
  $sql = ' DELETE FROM employeeslist WHERE id=' . $_GET['id'];
  mysqli_query($connect,$sql);
  header("Location: ../../EmployeesList/");
?>