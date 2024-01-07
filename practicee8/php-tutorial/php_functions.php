<!DOCTYPE html>
<html>

<body>

    <?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>
    <br>
    <?php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
    <br>
    <?php
function familyName2($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
?>
    <br>

    <?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>
</body>

</html>