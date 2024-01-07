<!DOCTYPE html>
<html>

<body>

    <?php
echo strlen("Hello world!"); // outputs 12
?>
    <br>
    <?php
echo str_word_count("Hello world!"); // outputs 2
?>
    <br>
    <?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>
    <br>
    <?php
echo strpos("Hello world!", "world"); // outputs 6
?>
    <br>
    <?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>
    <br>
</body>

</html>