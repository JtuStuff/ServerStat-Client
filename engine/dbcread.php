<?php
require ('config.php');

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error) {
    die("Connection failed");
}

$sql = "SELECT * FROM $Tbname ORDER BY Id DESC LIMIT 1";
$result = $conn->query($sql); 
$data = $result->fetch_assoc();

?>
