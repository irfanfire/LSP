<?php
include '../func.php';
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM waktu WHERE id=$id");
header("Location:waktu.php");
?>