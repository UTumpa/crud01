<?php

$full_name = $_POST['name1'];
$father_name  = $_POST['namef'];
$mother_name  = $_POST['namem'];
$gender = $_POST['gender'];
$religion  = $_POST['religion'];
$date_birth = $_POST['date'];
$nationality = $_POST['nationality'];
$national_id = $_POST['national_id'];

$link = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "crud01");

$query = "INSERT INTO `crud01`.`students` (`id`,`name`,`father_name`,`mother_name`,`gender`,`religion`,`date_birth`,`nationality`,`national_id`

)
VALUES ('',
    '$full_name','$father_name', '$mother_name','$gender','$religion','$date_birth','$nationality','$national_id'
)";

mysqli_query($link, $query);

mysqli_query($link, $query);

header('location:list.php');