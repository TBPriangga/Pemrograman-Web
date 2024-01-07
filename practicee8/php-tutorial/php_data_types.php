<!DOCTYPE html>
<html>

<body>

    <?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>
    <br>
    <?php
$x = 5985;
var_dump($x);
?>
    <br>
    <?php
$x = 10.365;
var_dump($x);
?>
    <br>
    <?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
    <br>
    <?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
    <br>
    <?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
    <br>
</body>

</html>