<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-dark table-borderless">
  <th>id</th>
  <th>name</th>
  <th>email</th>
  <th>type</th>
  <th>rating</th>
  <th>message</th>
  <th>ip</th>

<?php
while ($row= mysqli_fetch_array($result)) {
    ?>
  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['type'] ?></td>
    <td><?php echo $row['rating'] ?></td>
    <td><?php echo $row['message'] ?></td>
    <td><?php echo $row['ip'] ?></td>
   


  </tr>

  <?php

}  ?>
</body>
</html>