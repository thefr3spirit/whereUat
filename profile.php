<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email']) || !isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - whereUat</title>
    <style>
        /* Reset and body styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* Top bar styling */
        .top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background-color: #333;
            color: white;
        }
        .top-bar h2 {
            font-size: 1.5em;
            color: #fff;
        }

        /* Profile section styling */
        .profile-container {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            margin: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-info {
            text-align: center;
        }
        .profile-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff;
            margin-bottom: 10px;
        }
        .profile-info p {
            margin: 5px 0;
            color: #555;
        }

        /* Settings dropdown styling */
        .settings {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .settings select {
            padding: 8px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .settings-icon {
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }

        /* Bottom navigation styling */
        .bottom-nav {
            display: flex;
            justify-content: space-around;
            padding: 15px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
        .bottom-nav a {
            text-decoration: none;
            color: white;
            text-align: center;
            font-size: 14px;
            transition: color 0.3s;
        }
        .bottom-nav a:hover {
            color: #007bff;
        }
        .bottom-nav .nav-icon {
            font-size: 24px;
            display: block;
        }

        /* Notification dropdown */
        .notifications-dropdown {
            display: none;
            position: absolute;
            top: 60px;
            right: 20px;
            background-color: #fff;
            width: 200px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            z-index: 1000;
        }
        .notifications-dropdown p {
            padding: 10px;
            margin: 0;
            border-bottom: 1px solid #ddd;
            font-size: 0.9em;
            color: #333;
        }
        .notifications-dropdown p:last-child {
            border-bottom: none;
        }
    </style>

    <script>
        // Toggle notifications dropdown
        function toggleNotifications() {
            const dropdown = document.getElementById('notifications-dropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }

        // Toggle location sharing message
        function toggleLocationMessage() {
            const select = document.getElementById('location-sharing');
            const message = document.getElementById('location-message');
            message.innerText = select.value === 'on' 
                ? "Location sharing is enabled. Your friends can see your location." 
                : "Location sharing is disabled. Your location is private.";
        }
    </script>
</head>
<body>
    <!-- Top bar with notifications and app name -->
    <div class="top-bar">
        <span onclick="toggleNotifications()" style="cursor: pointer;">🔔 Notifications</span>
        <h2>whereUat</h2>
    </div>

    <!-- Notifications dropdown -->
    <div id="notifications-dropdown" class="notifications-dropdown">
        <p>No new notifications</p>
        <p>Check back later!</p>
    </div>

    <!-- Profile section -->
    <div class="profile-container">
        <div class="profile-info">
            <img src="#" alt="Profile Picture" id="profile-pic">
            <p><strong><?php echo htmlspecialchars($username); ?></strong></p>
            <p><?php echo htmlspecialchars($email); ?></p>
        </div>
        <div class="settings">
            <label for="location-sharing">Location sharing:</label>
            <select id="location-sharing" onchange="toggleLocationMessage()">
                <option value="off">OFF</option>
                <option value="on">ON</option>
            </select>
            <a href="settings.php" class="settings-icon" title="Settings">⚙️</a>
        </div>
    </div>

    <!-- Location sharing message -->
    <div id="location-message" style="text-align: center; padding: 10px; color: #007bff; font-weight: bold;">
        Location sharing is disabled. Your location is private.
    </div>

    <!-- Bottom navigation -->
    <div class="bottom-nav">
        <a href="profile.php">
            <span class="nav-icon">&#128100;</span>
            <br>You
        </a>
        <a href="friends.php">
            <span class="nav-icon">&#128101;</span>
            <br>Friends
        </a>
        <a href="messages.php">
            <span class="nav-icon">&#128172;</span>
            <br>Messages
        </a>
    </div>
</body>
</html>
