<?php
  require_once 'connectdb.php';
  $sql=$connect->prepare("SELECT * FROM `employeeslist`");
  $sql->execute();
  $list=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
  foreach($list as $note){
    ?>
      <div class="note">
        <p><b>Фамилия</b> :  <u><?=$note['LastName'] ?></u></p>
        <p><b>Имя : </b>  <u><?=$note['NAME']?></u></p>
        <p><b>Отчество : </b>  <u><?=$note['FatherName']?></u></p>
        <p><b>Инициалы : </b>
        <u><?=$note['LastName'] .' '. mb_substr($note['NAME'],0,1) .'.'. mb_substr($note['FatherName'],0,1).'.' ?>
        </u></p>
        <p><b>Должность : </b>  <u><?=$note['POSITION']?></u></p>
        <p><b>Дата устройтсва на работу : </b>  <u><?=$note['HireDate']?></u></p>
        <p><b>Месяцев на работе : </b> <u>
          <?php
            $now = new DateTime();
            $date = DateTime::createFromFormat('Y-m-d',$note['HireDate']);
            $interval = $now->diff($date);
            echo $interval->format('%m').' месяцев';
          ?></u>
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