<?php
include '../func.php';
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM ruang WHERE id=$id");
header("Location:ruang.php");
?>