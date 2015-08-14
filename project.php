<?php
$servername = "projectdbinstance.cbayaj8gsonm.eu-west-1.rds.amazonaws.com";
$username = "ProjectRDS";
$password = "Final-123";
$dbname = "ProjectDatabase";

$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$Phone = $_POST["Phone"];
$Comments = $_POST["Comments"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO BloggerDetails VALUES ('$FirstName','$LastName','$Email','$Phone','$Comments')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for submitting your contact details";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

