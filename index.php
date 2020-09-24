
<?php
class Square {
  public $lato;

  public function __construct($lato){
    $this-> lato = $lato;
  }
  public function area(){
    return $this-> lato * $this -> lato;
  }
  public function perimetro(){
    return 4 * $this-> lato;
  }
  public function str()  {
    return "L'area è: ". $this -> area(). "<br>"
    . "Il perimetro è: ". $this -> perimetro(). "<br><br>";
  }
  public function __toString(){
    return "Square: <br>". $this -> str();
  }
}


class Cube extends Square{

  public function vol(){
    return $this-> area() * $this -> lato;
  }
  public function superf(){
    return 6 * $this-> area();
  }
  public function str()  {
  return "Volume : ". $this -> vol(). "<br>"
  . "Superficie : ". $this -> superf(). "<br><br>";

  }
  public function __toString(){
    return "Cube: <br>". $this -> str();
  }
}

$square1 = New Square(15);
$square2 = New Square(5);
$cube1 = New Cube (15);
$cube2 = New Cube (5);

echo $square1;
echo $square2;
echo $cube1;
echo $cube2;

 ?>
