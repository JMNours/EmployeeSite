<?php
  session_start();
  $_SESSION['userAuthorized']=FALSE;
  header('Location:../');
?>