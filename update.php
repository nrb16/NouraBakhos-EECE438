<?php

$contact_id = $_POST["contact_id"];
$contact_name = $_POST["contact_name"];
$contact_date_of_birth = $_POST["contact_date_of_birth"];
$contact_profession = $_POST["contact_profession"];
$contact_mobile_number = $_POST["contact_mobile_number"];
$contact_telephone_number = $_POST["contact_telephone_number"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "Directory";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "update Contacts set contact_name ='$contact_name', contact_date_of_birth = '$contact_date_of_birth ', contact_profession ='$contact_profession', contact_mobile_number = '$contact_mobile_number', contact_telephone_number='$contact_telephone_number'
 where contact_id='$contact_id'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$contact_id."-".$contact_name."-".$contact_date_of_birth."-".$contact_profession."-".$contact_mobile_number."-".$contact_telephone_number;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>