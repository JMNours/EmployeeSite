<?php
  require_once 'connectdb.php';
  $sql=$connect->prepare("SELECT * FROM `employeeslist`");
  $sql->execute();
  $list=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
  foreach($list as $note){
    ?>
      <div class="note">
        <p>Фамилия : <?=$note['LastName'] ?></p>
        <p>Имя : <?=$note['NAME']?></p>
        <p>Отчество : <?=$note['FatherName']?></p>
        <p>Должность : <?=$note['POSITION']?></p>
        <p>Дата устройтсва на работу : <?=$note['HireDate']?></p>
        <p>Месяцев на работе : 
          <?php
            // $d1 = new dateTime();
            // $d2 = new dateTime(strtotime($note['HireDate']));
            // $interval = $d2->diff($d1);
            // $interval->format('%m months');
          ?>
        <form action="../process/edit.php?id=<?=$note['id'] ?>" method="POST">
          <input type="submit" value="Редактировать" class="btn">
        </form>
        <form action="../process/delete.php?id=<?=$note['id']?>" method="POST">
          <input type="submit" value="Удалить" class="btn">
        </form>
      </div>
    <?php
  }
?>