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
include 'functions7.php';
//  var_dump($_GET);
//  echo $_GET["loadtest"];
showTest($_GET["loadtest"]);
$testdir = 'D:/OpenServer/domains/localhost/tests/' . $_GET["loadtest"];
$jsondata = file_get_contents($testdir);
//var_dump($testdir);
$decodedtest = json_decode($jsondata, true);
echo "<pre>";
// var_dump($decodedtest);
?>
<form method="post">
    <b>Пройдите тест</b>
    <? foreach ($decodedtest as $rubish => $values): ?>
        <input name="<?php echo $values['id'] ?>" type="text" placeholder="<?php echo $values['question'] ?>">
    <? endforeach; ?>
    <input name="username" type="text" placeholder="Ваше имя">
    <input type="submit" value="Проверить тест">
    <?php
  //  error_reporting(E_ALL);
    // var_dump($_POST);
    echo "<pre>";
    $b = 0;
    for ($i = 1; $i < count($decodedtest) + 1; $i++) {
        if ($decodedtest[$i - 1]['answer'] == $_POST[$i]) {
            echo "Ответ на вопрос $i был дан верно";
        } else {
            echo "Ответ на вопрос $i был дан неверно";
            $b++;
        }
        echo "<br />";
    }
    echo "<br/>";
    ?>
    </form>
</pre>
<?php
$text = $_POST['username'];
if (!empty($text)) {
if ($b!=0) { ?>
    <img src="lose.php?text=<?= $text ?>">
<? } else { ?>
    <img src="win.php?text=<?= $text ?>">
<? } }?>

</body>
</html>
