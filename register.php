<?php
include 'db.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and fetch form data
    $first_name = $conn->real_escape_string($_POST['firstname']);
    $last_name = $conn->real_escape_string($_POST['lastname']);
    $phone_number = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $place = $conn->real_escape_string($_POST['place']);
    // Insert user data into database
    $sql = "INSERT INTO users (first_name, last_name, phone_number, email, place) 
            VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$place')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
