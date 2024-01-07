<?php
 $servername = "localhost";
 $username = "root";
 $password = "user";
 $dbname = "db_practice9";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 }
?>