<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $role = $_POST["role"];
    $name = $_POST["name"];

    if ($role == "doctor") {
        $specialist = $_POST["specialist"];
        $phone_number = $_POST["phone_number"];

        $sql = "INSERT INTO `doctor_t` (`name`, `specialist`, `phone_number`) VALUES ('$name', '$specialist', '$phone_number')";
    }
    elseif ($role == "patient") {
        $gender = $_POST["gender"];
        $disease = $_POST["disease"];
        $age = $_POST["age"];
        $sql = "INSERT INTO `patient_t` (`name`, `gender`, `disease`, `age`) VALUES ('$name', '$gender', '$disease', '$age')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
