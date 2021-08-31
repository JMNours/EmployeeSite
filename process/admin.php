<?php 
  session_start();

  $login='admin';
  $password='password';

  $_SESSION['admin']=array('login'=>md5($login),'password'=>md5($password));