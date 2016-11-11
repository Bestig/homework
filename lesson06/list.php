<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Список загруженных тестов</title>
  </head>
  <body>
    <?php
    $directory = 'D:\OpenServer\domains\localhost\tests';
    $scanned_directory = array_diff(scandir($directory), array('..', '.'));
    echo "Были загружены следюущие файлы тестов:";
    echo "<br/>";
    foreach ($scanned_directory as $key => $value) {
      echo $value;
      echo "<br />";
    }
    ?>
  </body>
</html>
