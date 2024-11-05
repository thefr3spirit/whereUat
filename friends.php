<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends - whereUat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: white;
        }

        .logo {
            font-size: 1.5em;
        }

        .content {
            display: flex;
            flex-direction: row;
            padding: 20px;
            justify-content: space-around;
        }

        .friends-list, .map-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            width: 45%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .friends-list h2, .map-container h2 {
            margin-top: 0;
        }

        .friends-list ul {
            list-style-type: none;
            padding: 0;
        }

        .friends-list li {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }

        .add-friend {
            display: block;
            margin-top: 10px;
            padding: 10px;
            font-size: 1em;
            background-color: #333;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .add-friend:hover {
            background-color: #555;
        }

        .map {
            width: 100%;
            height: 250px;
            background-image: url('map-placeholder.png'); /* Placeholder for map */
            background-size: cover;
            background-position: center;
            border-radius: 10px;
        }

        .nav-bar {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            background-color: #f4f4f4;
            border-top: 1px solid #ddd;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .nav-item {
            text-align: center;
            color: #333;
            font-size: 0.9em;
            text-decoration: none;
        }

        .nav-item.active {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <span class="logo">whereUat</span>
        <span>Friends</span>
    </div>

    <div class="content">
        <!-- Friends List Section -->
        <div class="friends-list">
            <h2>Available Friends</h2>
            <ul>
                <li>John D.</li>
                <li>Irene A.</li>
                <li>Ahmed K.</li>
                <!-- Additional friends can be added here -->
            </ul>
            <a href="add-friend.php" class="add-friend">Add New Friend</a>
        </div>

        <!-- Map Section -->
        <div class="map-container">
            <h2>Friends' Locations</h2>
            <div class="map"></div> <!-- Map image or integration -->
        </div>
    </div>

    <!-- Bottom Navigation Bar -->
    <div class="nav-bar">
        <a href="profile.php" class="nav-item">
            <span>&#128100;</span><br>
            You
        </a>
        <a href="friends.php" class="nav-item active">
            <span>&#128101;</span><br>
            Find friends
        </a>
        <a href="messages.php" class="nav-item">
            <span>&#128172;</span><br>
            Messages
        </a>
    </div>

</body>
</html>
