<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$role = $_POST["role"];

if ($role == "doctor") {
    $name = $_POST["dname"];
    $specialist = $_POST["specialist"];
    $phone_number = $_POST["phone_number"];

    // Insert data into doctor_t table
    $sql = "INSERT INTO `doctor_t` (`d_id`, `dname`, `specialist`, `phone_number`) VALUES (NULL, '$name', '$specialist', '$phone_number')";
} elseif ($role == "patient") {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $disease = $_POST["disease"];
    $age = $_POST["age"];

    // Insert data into patient_t table
    $sql = "INSERT INTO `patient_t` (`p_id`, `name`, `gender`, `disease`, `age`) VALUES (NULL, '$name', '$gender', '$disease', '$age')";
}

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
