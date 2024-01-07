<?php
namespace myArea;

function myValue(){
  return __NAMESPACE__;
}
?>

<?php
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
?>

<!DOCTYPE html>
<html>

<body>

    <?php
class Fruits2 {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits2();
echo $kiwi->myValue();
?>
    <br>
    <?php
echo __DIR__;
?>
    <br>
    <?php
echo __FILE__;
?>
    <br>
    <?php
function myValue2(){
  return __FUNCTION__;
}
echo myValue2();
?>
    <br>
    <?php
echo __LINE__;
?>
    <br>
    <?php
class Fruits3 {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits3();
echo $kiwi->myValue();
?>
    <br>
    <?php
echo myValue();
?>
    <br>

    <?php
trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
    <br>
    <?php
$kiwi = new Fruits();
echo $kiwi->myValue();
?>

</body>

</html>