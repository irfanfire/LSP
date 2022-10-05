<?php
include '../func.php';
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM matkul WHERE id=$id");
header("Location:matkul.php");
?>