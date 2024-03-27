<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// Escape user inputs for security 
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);

// Attempt insert query execution
$sql = "INSERT INTO event_data (title, description, date, time, location, contact) VALUES ('$title', '$description', '$date', '$time', '$location', '$contact')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

// Redirect back to the form
header("Location: index.php");
exit();
?>