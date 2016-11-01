<?php
error_reporting(E_ALL);
$animals = array('Africa' => array('Giraffa camelopardalis', 'Microcebus berthae'),
'Eurasia' => array('Ursus arctos', 'Panthera tigris altaica'),
'Antarctic'  => array('Pygoscelis Wagler', 'Hydrurga leptonyx'),
'North America' => array('Ursus arctos horribilis', 'Puma concolor'),
'South America' => array('Chironectes minimus', 'Bradypus tridactylus'),
'Australia' => array('Macropus', 'Phascolarctos cinereus'),
);
var_dump($animals);
echo "<br/><br/><br/><br/>";
foreach ($animals as $k => $v) {
  foreach ($v as $key => $value) {
$a = $value;
for ($i=0; $i < 1; $i++) {
$newmassiv[]=$a;
}
}
}
for ($i = 0; $i < count($newmassiv); $i++) {
$probeli = substr_count($newmassiv[$i],' ');
if ($probeli === 1) {
$done[]=$newmassiv[$i];
}
}
var_dump($done);
echo "<br/><br/><br/><br/>";
for ($i = 0; $i < count($done); $i++) {
$random_animal = $done[$i];
$shuffled = str_replace(" ","",$random_animal);
$shuffled2 = strtolower($shuffled);
$shuffled3 = str_shuffle($shuffled2);
echo ucfirst($shuffled3);
echo "<br/>";
}
 ?>
