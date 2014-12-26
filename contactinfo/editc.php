<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "tumpa24",
    "contact");
$query = "select * from contact_info WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="updatec.php" method="post">
    <label> ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" />
    <label> Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />

    <button type="submit">Update</button>
<br />
    <a href="listc.php">Go to Home</a>
</form>