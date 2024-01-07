<!DOCTYPE html>
<html>

<body>

    <?php
echo(pi()); // returns 3.1415926535898
?>
    <br>
    <?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?>
    <br>
    <?php
echo(abs(-6.7));  // returns 6.7
?>
    <br>
    <?php
echo(sqrt(64));  // returns 8
?>
    <br>
    <?php
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>
    <br>
    <?php
echo(rand());
?>
    <br>
    <?php
echo(rand(10, 100));
?>

</body>

</html>