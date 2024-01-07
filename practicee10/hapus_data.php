<?php
include "koneksi.php";
$sql = "DELETE from mahasiswa where mahasiswa_id=" . $_GET['mahasiswa_id'];
if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("location:index.php");
    exit();
} else {
    $conn->close();
    header("location:index.php");
    exit();
}
?>