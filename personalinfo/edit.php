<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "crud01");
$query = "select * from students WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="text" name="id" value="<?php echo $row['id'];?>" />
    <label> Name:</label>
    <input type="text" name="name1" value="<?php echo $row['name'];?>" />

    <button type="submit">Submit</button>
</form>