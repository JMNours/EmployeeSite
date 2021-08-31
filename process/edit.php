<?php
  session_start();
  require_once 'connectdb.php';


  $id = htmlspecialchars($_GET['id']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $name = htmlspecialchars($_POST['name']);
  $fathername = htmlspecialchars($_POST['fathername']);
  $position = htmlspecialchars($_POST['position']);
  $date = htmlspecialchars($_POST['date']);


  if(!empty($id))
  {

    if(!empty($lastname) && !empty($name) && !empty($fathername) && !empty($position) && !empty($date))
    {
    $sql=$connect->prepare('UPDATE employeeslist SET NAME = ?, LastName = ?, FatherName = ?, POSITION = ?, HireDate = ? WHERE id = ?');
    $sql->bind_param('sssssi',$name,$lastname,$fathername,$position,$date,$id);
    $sql->execute();


    header("Location:../EmployeesList");
    }

    else
    {
      $sql= $connect->prepare('SELECT * FROM employeeslist WHERE id=?');
    $sql->bind_param('i',$id);
    $sql->execute();
    $note=$sql->get_result();
    $note=$note->fetch_assoc();


    $path = '?name='.$note['NAME'].
    '&lastname='.$note['LastName'].
    '&fathername='.$note['FatherName'].
    '&position='.$note['POSITION'].
    '&date='.$note['HireDate'].
    '&id='.$note['id'];


    header("Location:../Registry".$path);
    }
  }
  elseif($lastname && $name && $fathername && $position && $date)
  {
    $sql=$connect->prepare('INSERT INTO employeeslist (NAME, LastName, FatherName, POSITION, HireDate) VALUES(?, ?, ?, ?, ?)');
    $sql->bind_param('sssss',$name,$lastname,$fathername,$position,$date);
    $sql->execute();

    header("Location:../EmployeesList");
  }
  else
  {
    $path = '?name='.$name.
    '&lastname='.$lastname.
    '&fathername='.$fathername.
    '&position='.$position.
    '&date='.$date;

    header("Location:../Registry".$path);
  }
?>