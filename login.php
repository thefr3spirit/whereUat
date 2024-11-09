<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection parameters
    $servername = "localhost";
    $db_username = "root";
    $db_password = "Joycelyn#21";
    $dbname = "whereuat";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate user credentials
    $query = "SELECT email, password FROM users WHERE username = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($email, $hashed_password);
        $stmt->fetch();

        if ($email && password_verify($password, $hashed_password)) {
            // Set session variables
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            // Redirect to profile page
            header("Location: profile.php");
            exit();
        } else {
            // Handle invalid credentials
            echo "<p style='color: red; text-align: center;'>Invalid username or password.</p>";
        }

        $stmt->close();
    } else {
        echo "<p style='color: red; text-align: center;'>Query preparation failed: " . $conn->error . "</p>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - whereUat</title>
    <style>
        body {
            background-color: rgb(35, 92, 189);
            color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: azure;
            text-align: center;
            margin-bottom: 20px;
        }
        /* Styling for the form section */
        #formSection {
            text-align: center;
            line-height: 2;
            margin-top: 50px;
        }
        /* Styling for the links section */
        #linkSection {
            text-align: right;
            color: black;
            padding: 10px;
            margin-top: 20px;
            margin-right: 250px;
        }
        /* Additional styles for inputs and buttons */
        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            width: 80%;
            max-width: 300px;
        }
        button {
            padding: 10px 20px;
            background-color: navy;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: darkblue;
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
        <h1>Login</h1>
    </header>
    <main>
        <!-- Form Section -->
        <section id="formSection">
            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <button type="submit">Login</button>
             </form>
        </section>

        <!-- Links Section -->
        <section id="linkSection">
            <p>Click <a href="forgot-password.php">here</a> if you forgot your password</p>
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </section>
    </main>
</body>
</html>
