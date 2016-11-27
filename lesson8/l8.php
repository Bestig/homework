<?php
Class Cats {
  private $color;
  private $gender;
  private $name;
  private bool $homeless;
  private $age;
  function __construct($color,$gender,$homeless,$age)
  {
    $this->color = $color;
    $this->gender = $gender;
    $this->homeless = $homeless;
    $this->age = $age;
  }
  public function setCatName($name)
  {
    $this->name=$name;
  }
  public function findHomeForCat
  {
    $this->homeless = false;
  }
}

class Monitors
{
  private $firm
  private $model
  private $resolution
  private $price
  private $color
  function __construct($firm,$model,$resolution,$price,$color)
  {
    $this->firm=$firm;
    $this->model=$model;
    $this->resolution=$resolution;
    $this->price=$price;
    $this->color=$color;
  }
  public function isHDorMore($resol);
  {
  if ($this->resolution="720p" or "1080p") {
    echo "yes";
  }
  else {
    echo "no";
  }
}
}

$monitor1 = new Monitors('Samsung','FN2040', '720p', '45usd', 'black');
$monitor2 = new Monitors('Acer', 'GN2250', '1080p', '60usd', 'white');
//   function __construct($color,$gender,$homeless,$age)
$cat1 = new Cats('black','male',false,10);
$cat1->setCatName("Vasyan");
$cat2 = new Cats('white','female',false, 4);
$cat2->setCatName("Fiona");
$cat3 = new Cats('mixed', 'male', true, 1);
?>
