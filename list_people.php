<?php
$servername = "localhost";
$username = "Cpe5976";
$password = "9";
$db_name = "Cpe5976";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, fname, lname,age,sex FROM serway";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["sex"] == "M"){  
      if($row["age"] >=16){
        echo  "นาย. ", $row["fname"]. " " . $row["lname"]."<br>";
      }
      elseif($row["age"] <16){
        echo  "ด.ช. ", $row["fname"]. " " . $row["lname"]."<br>";
      }
    }
    if($row["sex"] == "F"){
      if($row["age"] >=16){
        echo  "นางสาว. ", $row["fname"]. " " . $row["lname"]."<br>";   
      } 
      elseif($row["age"] >=16){
        echo  "ด.ญ. ", $row["fname"]. " " . $row["lname"]."<br>";
      }
      if($row["age"] <16){
        echo  "ด. ญ. ", $row["fname"]. " " . $row["lname"]."<br>";
      }
      
    }
  }
}
 else {
  echo "0 results";
}
$conn->close();
?>