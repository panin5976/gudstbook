<?php
require("connect_db.php");

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$marry_status=$_POST["marry_status"];

//echo "fname:$fname lname:$lname age:$age sex:$sex marry_status:$marry_status";
$sql="INSERT INTO serway(fname,lname,age,sex,marry_status)";
$sql.=" VALUES('$fname','$lname','$age','$sex','$marry_status')";
$conn->query($sql);
header( "location: list_people.php" );
?>