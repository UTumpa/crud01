<?php

$id=$_GET['id'];
$con = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "");

$query="DELETE FROM `contact`.`contact_info` WHERE `contact_info`.`id` = $id";
mysqli_query($con,$query);
header('location: listc.php');
mysqli_close($con);
?>