<?php
  session_start();
  $_SESSION['userAuthorized'] = FALSE;
  require_once 'admin.php';

  $login=htmlspecialchars($_POST['login']);
  $password=htmlspecialchars($_POST['password']);

  if($_SESSION['admin']['login']==md5($login) && $_SESSION['admin']['password']==md5($password))
  {
    if($_SESSION['message'])
    {
      unset($_SESSION['message']);
    }
    $_SESSION['userAuthorized'] = TRUE;
    header('Location:../EmployeesList/');
  }
  else
  {
    $_SESSION['message']='Неверный логин или пароль';
    header('Location:../');
  }
  ?>