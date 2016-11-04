<?php
error_reporting (E_ALL);
$i = 1;
$filename = 'img/' . "{$i}" .'.jpg';
while (file_exists($filename)) {
$Photo[$filename] = array(filesize($filename) , filemtime($filename));
  $i = $i + 1;
  $filename = 'img/' . "{$i}" .'.jpg';
}
$f = fopen("1.csv", 'w');
foreach ($Photo as $k => $v) {
  fputcsv($f, array_merge([$k], $v));
}
$handle = fopen("1.csv", 'r');
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
$ar[] = $data;
}
foreach ($ar as $key => $value) {
  echo "<h1><a href=\"$value[0]\">$value[0]</a></h1>";
  echo "Размер файла в байтах: ".$value[1]. " Дата последнего изменения файла: " . date("Y-m-d H:i:s", $value[2]);
}
 ?>
