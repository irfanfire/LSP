<?php
include '../func.php';
include 'connect.php';
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM dosen WHERE id=$id");
header("Location:dosen.php");
?>