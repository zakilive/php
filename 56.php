<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// sql to create table
$sql = "INSERT INTO MyGuests(firstname,lastname,email)VALUES('John','Doe','john@example.com')";

if ($connection->query($sql) === TRUE) {
$last_id=$connection->insert_id;
    echo "New record created successfully Last inserted ID is: ".$last_id;
} else {
    echo "Error creating table: " . $connection->error;
}

$connection->close();
?> 