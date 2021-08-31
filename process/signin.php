<?php
  session_start();
  $_SESSION['userAuthorized'] = FALSE;
  require_once 'admin.php';

  $login=$_POST['login'];
  $password=$_POST['password'];

  if($admin['login']==$login && $admin['password']==$password){
    if($_SESSION['message'])
    {
      unset($_SESSION['message']);
    }
    $_SESSION['userAuthorized'] = TRUE;
    header('Location:../EmployeesList/');
  }
  else{
    $_SESSION['message']='Неверный логин или пароль';
    header('Location:../');
  }
  ?>