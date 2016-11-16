<?php
if (!empty($_FILES['jsontest1']['name'])) {
    header("Location: list.php");
}
?>
<?php
include 'functions6.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма загрузки JSON файла с тестом</title>
</head>
<body>
<h2> Отправьте ваши JSON файлы </h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" id="jsontest1" name="jsontest1"/>
    <button type="submit">Отправить</button>
</form>
<?php
uploadFile('jsontest1', $_FILES['jsontest1']['name']);
?>
</body>
</html>
