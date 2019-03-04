<?php
include("db_connect.php");

$superheroID = $_POST["superhero"];
$villian = $_POST["villian"];

$sql = "INSERT INTO battles (superheroID,villianFought) VALUES ('$superheroID','$villian')";

if (mysqli_query($db, $sql)) {
} else{
       echo "Error:" . $sql."<br>".mysqli_error($db);
}
header("location:index.php");

?>

