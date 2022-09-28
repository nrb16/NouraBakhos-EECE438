<body>
<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Directory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Contacts (contact_name,contact_date_of_birth,contact_profession,contact_mobile_number,contact_telephone_number)
VALUES ('$_POST[contact_name]','$_POST[contact_date_of_birth]','$_POST[contact_profession]','$_POST[contact_mobile_number]','$_POST[contact_telephone_number]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
