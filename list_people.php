<?php
require("connect_db.php");

if(isset($_GET["keyword"])){
    $keyword=$_GET["keyword"];
}else{
    $keyword="";
}

if($keyword!=""){
    $sql = "SELECT id, fname, lname, age, sex, marry_status FROM serway WHERE fname LIKE '%$keyword%' OR lname LIKE '%$keyword%'";
}else{
    $sql = "SELECT id, fname, lname, age, sex, marry_status FROM serway";
}
?>
<form action="list_people.php" method="get">
    Search:<input type="text" name="keyword" value="<?php print($keyword);?>">
    <input type="submit" value="Search">
</form><br>
<?php
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["sex"]=="M"){
        if($row["age"]>=15){
            echo "นาย".$row["fname"]." ".$row["lname"];
        }
        else{
            echo "ด.ช.".$row["fname"]." ".$row["lname"];
        }
    }else{
        if($row["age"]>=15){
            if($row["marry_status"]=="F"){
                echo "นาง".$row["fname"]." ".$row["lname"];
            }else{
                echo "น.ส.".$row["fname"]." ".$row["lname"];
            }
            
        }
        else{
            echo "ด.ญ.".$row["fname"]." ".$row["lname"];
        }
    }
    echo " <a href='edit_people.php?id=".$row["id"]."'>Edit</a> <a href='delete_people.php?id=".$row["id"]."' onclick=\"return confirm('Are you sure to delete ".$row["fname"]."')\".>Delete</a><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<a href="add_people.php">Add People</a>