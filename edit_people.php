<?php
require("connect_db.php");

$id=$_GET["id"];
$sql = "SELECT * FROM serway
 WHERE id=$id";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
?>
<form action="save_edit_people.php" method="post">
    <input type="hidden" name="id"value="<?php print($row["id"]);?>">
    First Name:<input type="text" name="fname" value="<?php print($row["fname"]); ?>"><br>
    Last Name:<input type="text" name="lname" value="<?php print($row["lname"]); ?>"><br>
    Age:<input type="text" name="age" value="<?php print($row["age"]); ?>"><br>
    Sex:<select name="sex">
            <option value="M" <?php if($row["sex"]=="M") print("selected");?>>Male</option>
            <option value="F" <?php if($row["sex"]=="F") print("selected");?>>Female</option>
        </select><br>
    Marry Status:<select name="marry_status">
            <option value="S" <?php if($row["marry_status"]=="S") print("selected");?>>Single</option>
            <option value="M" <?php if($row["marry_status"]=="M") print("selected");?>>Married</option>
        </select><br>
    <input type="submit" value="edit">
</form>
<?php
}
?>