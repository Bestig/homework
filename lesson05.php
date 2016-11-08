<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> leeson 05 </title>
  </head>
  <body>
<?php
error_reporting(E_ALL);
$json_data = file_get_contents("phone_book.json");
$profiles = json_decode($json_data, true);
?>
 <table border="1">
   <caption>Телефонный справочник</caption>
   <tr>
    <th>Имя</th>
    <th>Возраст</th>
   </tr>
<? foreach ($profiles as $profile): ?>
   <tr>
     <td> <?php echo $profile['name']; ?> <td>
     <td> <?php echo $profile['age']; ?> <td>
     </tr>
<? endforeach; ?>
</table>
  </body>
</html>
