
<?php
error_reporting(E_ALL);
$animals = array('Africa' => array('Giraffa camelopardalis', 'Microcebus berthae'),
'Eurasia' => array('Ursus arctos', 'Panthera tigris altaica'),
'Antarctic'  => array('Pygoscelis Wagler', 'Hydrurga leptonyx'),
'North America' => array('Ursus arctos horribilis', 'Puma concolor'),
'South America' => array('Chironectes minimus', 'Bradypus tridactylus'),
'Australia' => array('Macropus', 'Phascolarctos cinereus'),
);
foreach ($animals as $k => $v) {
  foreach ($v as $key => $value) {
$a = $value;
for ($i=0; $i < 1; $i++) {
$newmassiv[]=$a;
}
    }
  }
  var_dump($newmassiv);
 ?>
