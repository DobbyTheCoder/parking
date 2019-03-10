<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS parking";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$dbname = "parking";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE IF NOT EXISTS spot (
p1 BIT NOT NULL,
p2 BIT NOT NULL,
p3 BIT NOT NULL,
p4 BIT NOT NULL,
p5 BIT NOT NULL,
p6 BIT NOT NULL,
p7 BIT NOT NULL,
p8 BIT NOT NULL,
p9 BIT NOT NULL,
p10 BIT NOT NULL,
p11 BIT NOT NULL,
p12 BIT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO spot (p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12)
VALUES (1,0,1,1,0,0,0,0,1,1,0,0);";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: 2wheeler.php");
$conn->close();
?>
