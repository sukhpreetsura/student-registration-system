<!-- register.php -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

// Insert query
$sql = "INSERT INTO students(name, email, course)
VALUES('$name', '$email', '$course')";

if(mysqli_query($conn, $sql)){
    echo "Student Registered Successfully";
}
else{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
