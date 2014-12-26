<?php

$link = mysqli_connect("localhost","root","tumpa24","crud01");

$query = "select * from students;";

$result = mysqli_query($link,$query);

?>
<ol>

    <li><a href="createp.html">Create New</a> </li>
</ol>

<table border="1" width="70%">

    <tr>
        <td>ID:</td>>
        <td>Name:</td>>
        <td>Father:</td>>
        <td>Mother:</td>>
        <td>Gender:</td>>
        <td>Religion:</td>>
        <td>Date Of Birth:</td>>
        <td>Nationality:</td>>
        <td>National I: </td>

    </tr>>

    <?php
    foreach($result as $row){
    ?>

    <tr>
        <td><?php echo $row['id' ] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['father_name'] ?></td>
        <td><?php echo $row['mother_name' ] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['religion'] ?></td>
        <td><?php echo $row['date_birth' ] ?></td>
        <td><?php echo $row['nationality'] ?></td>
        <td><?php echo $row['national_id'] ?></td>
        <?php
        }
        ?>
</table>


