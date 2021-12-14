<?php 
require ('config.php');

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection failed");
}

$Status = $conn->real_escape_string($_POST['Status']);

## ---------------|
## 0449 = No Input|
## 8690 = Invalid |
## ---------------|	

if (empty($_POST['Status'])){
	echo "0449";
	exit();
}
else if (preg_match('/[^a-zA-Z ]/i', $Status)) {
	echo "8690";
	exit();
}

else {

$sql="INSERT INTO Result (Status, TimeStamp) VALUES ('$Status', CURRENT_TIMESTAMP())";

if (!$conn->query($sql)) {
    die('Error: ' . mysqli_error($db));
}

$conn-> close();
}
?>
