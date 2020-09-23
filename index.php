
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

  public function __toString(){
     return "L'area è: ". $this -> area(). "<br>"
     . "Il perimetro è: ". $this -> perimetro(). "<br><br>";
  }
}

  class Cube extends Square{
    
    public function vol(){
      return parent::area() * $this -> lato;
    }
    public function superf(){
      return 6 * parent::area();
    }
    public function __toString(){
      return "Volume : ". $this -> vol(). "<br>"
      . "Superficie : ". $this -> superf(). "<br><br>";
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
