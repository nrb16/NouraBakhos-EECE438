<html>
<body>
Test2

<?php

$localhost='localhost';

$dbusername='root';

$dbpass='';

$dbname='Directory';


$con= new mysqli($localhost, $dbusername, $dbpass);

// Check connection

if ($con->connect_error) {

die("Connection failed: " . $con->connect_error);

}

// Create database

$sql = "CREATE DATABASE $dbname";

if ($con->query($sql) === TRUE) {

echo "Database created successfully";

} else {

echo "Error creating database: " . $con->error;

}


$con = mysqli_connect("$localhost","$dbusername","$dbpass","$dbname");


// sql to create table

$sql = "CREATE TABLE Contacts(

contact_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

contact_name VARCHAR(250) NOT NULL,

contact_date_of_birth DATE NOT NULL,

contact_profession VARCHAR(250) NOT NULL,

contact_mobile_number INT(20) NOT NULL,

contact_telephone_number INT(20) NOT NULL


)";

if ($con->query($sql) === TRUE) {

echo "Table users created successfully";

} else {

echo "Error creating table: " . $con->error;

}

$con->close();

?>
</body>
</html>

