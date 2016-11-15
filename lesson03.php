<?php
error_reporting(E_ALL);
$animals = array('Africa' => array('Giraffa camelopardalis', 'Microcebus berthae'),
    'Eurasia' => array('Ursus arctos', 'Panthera tigris altaica'),
    'Antarctic' => array('Pygoscelis Wagler', 'Hydrurga leptonyx'),
    'North America' => array('Ursus arctos horribilis', 'Puma concolor'),
    'South America' => array('Chironectes minimus', 'Bradypus tridactylus'),
    'Australia' => array('Macropus', 'Phascolarctos cinereus'),
);
// var_dump($animals);
// echo "<br/><br/><br/><br/>";
foreach ($animals as $k => $v) {
    foreach ($v as $key => $value) {
        $a = $value;
        $newmassiv[] = $a;
    }
}
for ($i = 0; $i < count($newmassiv); $i++) {
    $probeli = substr_count($newmassiv[$i], ' ');
    if ($probeli === 1) {
        $done[] = $newmassiv[$i];
    }
}
// var_dump($done);
// echo "<br/><br/><br/><br/>";
$imploded = implode(" ", $done);
$array_to_shuffle = explode(" ", $imploded);
shuffle($array_to_shuffle);
// var_dump($array_to_shuffle);
// echo "<br/><br/><br/><br/>";
for ($i = 0; $i < count($array_to_shuffle); $i++) {
    $wonder_animals[$i] = $array_to_shuffle[$i] . " " . $array_to_shuffle[$i + 1];
    $i++;
}
foreach ($wonder_animals as $wonder_animal) {
    echo "$wonder_animal";
    echo "<br/>";
}
?>
