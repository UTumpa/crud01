<?php


$mobile = $_POST['mobile'];
$home_phone  = $_POST['home_p'];
$emergency_contact  = $_POST['e_contact'];
$email= $_POST['email'];
$alternate_email  = $_POST['a_email'];
$current_location = $_POST['current_l'];
$present_address= $_POST['pre_address'];
$permanent_address = $_POST['perm_address'];

$link = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "contact");

$query = "INSERT INTO `contact`.`contact_info` ( `id` ,
`mobile` ,`home_phone` ,`emergency_contact` ,`email` ,`alternate_email` ,`present_address` ,`permanent_address` )


VALUES ('',
    '$mobile','$home_phone', '$emergency_contact','$email','$alternate_email','$present_address','$permanent_address')";


mysqli_query($link, $query);



header('location:listc.php');