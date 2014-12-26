<?php

$id = $_POST['id'];
$mobile = $_POST['mobile'];
$home_phone  = $_POST['home_p'];
$emergency_contact  = $_POST['e_contact'];
$email= $_POST['email'];
$alternate_email  = $_POST['a_email'];
$present_address= $_POST['pre_address'];
$permanent_address = $_POST['perm_address'];

$link = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "contact");
echo $query = "UPDATE `contact`.`contact_info` SET `email` = '".$email."'
 WHERE `contact_info`.`id` = $id;";



mysqli_query($link, $query);
header('location:listc.php');