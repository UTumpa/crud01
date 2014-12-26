<?php

$link = mysqli_connect("localhost","root","tumpa24","contact");

if(isset($_POST['UPDATE'])){
    $update_id=$_GET['id'];
    if(isset($update_id)){
        $sql = "UPDATE `contact`.`contact_info` SET `email` = '".$email."',
 WHERE `contact_info`.`id` = $id;";
    }
}

$query = "select * from contact_info;";

$result = mysqli_query($link,$query);

?>
<ol>

    <li><a href="createc.html">Create New</a> </li>
</ol>

<table border="1" width="70%">

    <tr>
        <td>Id:</td>>
        <td>Mobile:</td>>
        <td>Home Phone:</td>>
        <td>Emergency Contact:</td>>
        <td>Email:</td>>
        <td>Alternate Email:</td>>
        <td>Alternate Email:</td>>
        <td>Present Address:</td>>
        <td>Permanent Address:</td>>

    </tr>>

    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id' ] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><?php echo $row['home_phone'] ?></td>
            <td><?php echo $row['emergency_contact' ] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['alternate_email'] ?></td>
            <td><?php echo $row['present_address' ] ?></td>
            <td><?php echo $row['permanent_address'] ?></td>
            <td> <a href="editc.php?id=<?php echo $row['id']?>">Edit</a> | <a href="deletec.php?id=<?php echo $row['id']?>">Delete</a> | <a href="viewc.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>
    <?php



    }
    ?>
</table>


