<!DOCTYPE html>
<html>

<body>

    <?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

    <br>

    <?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>
    <br>
    <?php
$x = 5;
$y = 4;
echo $x + $y;
?>
    <br>
    <?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  // echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
    <br>
    <?php
function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

    <br>

    <?php
$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
}

myTest3();
echo $y; // outputs 15
?>
    <br>
    <?php
$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest4();
echo $y; // outputs 15
?>
    <br>
    <?php
function myTest5() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest5();
myTest5();
myTest5();
?>

</body>



</html>