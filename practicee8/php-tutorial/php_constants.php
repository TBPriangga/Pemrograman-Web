<!DOCTYPE html>
<html>

<body>

    <?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
    <br>
    <?php
const MYCAR = "Volvo";
echo MYCAR;
?>
    <br>
    <?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
    <br>
    <?php
define("GREETING2", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING2;
}
 
myTest();
?>

</body>

</html>