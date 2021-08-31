<?php
  require_once 'connectdb.php';
  $sql="SELECT * FROM `employeeslist`";
  $list=(mysqli_query($connect, $sql));
  $list=mysqli_fetch_all($list,MYSQLI_ASSOC);
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
        <form action="../Registry/index.php?id=<?=$note['id'] ?><">
          <input type="submit" value="Редактировать" class="btn">
        </form>
        <form action="../process/delete.php?id=<?=$note['id']?>" method="POST">
          <input type="submit" value="Удалить" class="btn">
        </form>
      </div>
    <?php
  }
?>