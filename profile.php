<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - whereUat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Top bar */
        .top-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        .top-bar .notifications {
            font-size: 24px;
        }

        /* Profile section */
        .profile-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
        }

        .profile-container .profile-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .profile-container .profile-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
            margin-bottom: 10px;
        }

        .profile-container .profile-info p {
            margin: 5px 0;
        }

        .profile-container .settings {
            text-align: right;
        }

        /* Location sharing and settings */
        .settings {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .settings select {
            padding: 5px;
            font-size: 16px;
        }

        .settings .settings-icon {
            font-size: 24px;
            cursor: pointer;
        }

        /* Bottom navigation */
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
        }

        .bottom-nav .nav-icon {
            font-size: 24px;
            display: block;
        }
    </style>
</head>
<body>
    <!-- Top bar with notification and app name -->
    <div class="top-bar">
        <span class="notifications">🔔 Notifications</span>
        <h2>whereUat</h2>
    </div>

    <!-- Profile section -->
    <div class="profile-container">
        <div class="profile-info">
            <img src="#" alt="Profile Picture">
            <p><strong>Username</strong></p>
            <p>email@example.com</p>
        </div>
        <div class="settings">
            <label for="location-sharing">Location sharing:</label>
            <select id="location-sharing">
                <option value="off">OFF</option>
                <option value="on">ON</option>
            </select>
            <span class="settings-icon">⚙️</span>
        </div>
    </div>

    <!-- Bottom navigation -->
    <div class="bottom-nav">
        <a href="profile.php">
            <span class="nav-icon">👤</span>
            <br>Home
        </a>
        <a href="find-friends.php">
            <span class="nav-icon">🔍</span>
            <br>Find friends
        </a>
        <a href="messages.php">
            <span class="nav-icon">💬</span>
            <br>Messages
        </a>
    </div>
</body>
</html>
