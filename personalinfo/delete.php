<?php

$id=$_GET['id'];
$con = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "");

$query="DELETE FROM `crud01`.`students` WHERE `students`.`id` = $id";
mysqli_query($con,$query);
header('location: list.php');
mysqli_close($con);
?>