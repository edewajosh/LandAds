<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
$sql = "INSERT INTO students (student_name, student_email, student_city)
VALUES ('Jesse', 'jesse@example.com','Nairobi')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully<br>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();
?>