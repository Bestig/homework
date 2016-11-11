<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="test.php" method="get">
    <input name="loadtest" type="text" placeholder="Введите имя файла Теста">
    <input type="submit" value="Отправить">
    </form>
    <?php
    include 'functions6.php';
  //  var_dump($_GET);
  //  echo $_GET["loadtest"];
$testdir = 'D:/OpenServer/domains/localhost/tests/'.$_GET["loadtest"];
$jsondata = file_get_contents($testdir);
//var_dump($testdir);
$decodedtest = json_decode($jsondata,true);
echo "<pre>";
// var_dump($decodedtest);
    ?>
    <form method="post">
       <b>Пройдите тест</b>
<? foreach ($decodedtest as $rubish => $values): ?>
<input name= "<?php  echo $values['id']?>" type="text" placeholder="<?php echo $values['question']  ?>">
<? endforeach; ?>
<input type="submit" value="Проверить тест">
<?php
 //error_reporting(E_ALL);
// var_dump($_POST);
 for ($i=1; $i < count($decodedtest)+1; $i++) {
  if ($decodedtest[$i-1]['answer'] == $_POST[$i]) {
  echo "Ответ на вопрос $i был дан верно";
  }
  else {
    echo "Ответ на вопрос $i был дан неверно";
  }
  echo "<br />";
}
 ?>
  </body>
</html>
