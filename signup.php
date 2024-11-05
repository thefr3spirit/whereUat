<?php
include 'dbconnect.php';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize input data
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate if passwords match
    if ($password !== $confirm_password) {
        echo "<p style='color: red; text-align: center;'>Passwords do not match. Please try again.</p>";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // SQL query to insert data into users table
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Redirect to home.php if signup is successful
            header("Location: home.php");
            exit();
        } else {
            // Show an error message if the signup fails
            echo "<p style='color: red; text-align: center;'>Error: Invalid username or email. Please try again.</p>";
        }
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - whereUat</title>
    <style>
        /* Style from your original code */
        body {
            background-color: rgb(97, 106, 122);
            color: rgb(24, 24, 24);
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: azure;
            margin-bottom: 20px;
        }

        .form-container {
            display: inline-block;
            text-align: left;
            line-height: 2;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            width: 100%;
            max-width: 300px;
            display: block;
        }

        button {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            background-color: navy;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: darkblue;
        }

        label {
            font-size: 1rem;
            color: azure;
        }

        a {
            color: navy;
        }

        a:hover {
            color: darkblue;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sign Up</h1>
    </header>
    <main>
        <div class="form-container">
            <form action="signup.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </main>
</body>
</html>
