<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize input data
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    // SQL query to insert data into users table
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to home.html if signup is successful
        header("Location: home.html");
        exit();
    } else {
        // Show an error message if the signup fails
        echo "Error: Invalid username or password. Please try again.";
    }

    // Close the connection
    $conn->close();
}
?>
