<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "contact");

$query = "select * from contact_info  WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="listc.php">Go to Home</a>