<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=****************************************************" async defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends - whereUat</title>
    <style>
        /* Reset and basic styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            flex-direction: column;
            padding: 20px;
            gap: 20px;
        }
        @media(min-width: 768px) {
            .content {
                flex-direction: row;
                justify-content: space-around;
            }
        }
        .friends-list, .map-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .friends-list h2, .map-container h2 {
            margin-bottom: 10px;
        }
        .friends-list ul {
            list-style-type: none;
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
            height: 300px;
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
                <!-- Additional friends can be added here -->
            </ul>
            <a href="add-friend.php" class="add-friend">Add New Friend</a>
        </div>

        <!-- Map Section -->
        <div class="map-container">
            <h2>Friends' Locations</h2>
            <div id="map" class="map"></div> <!-- Map container for Google Maps -->
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
            Friends
        </a>
        <a href="messages.php" class="nav-item">
            <span>&#128172;</span><br>
            Messages
        </a>
    </div>

    <script>
        let map;
        let markers = [];

        function initMap() {
            // Default center if geolocation fails
            const defaultCenter = { lat: 0, lng: 0 };

            // Try to get user's current location
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const userLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        map = new google.maps.Map(document.getElementById("map"), {
                            center: userLocation,
                            zoom: 15
                        });

                        // Add marker for user's location
                        new google.maps.Marker({
                            position: userLocation,
                            map: map,
                            title: "Your Location"
                        });

                        // Load friends' locations
                        updateMap();
                    },
                    () => {
                        // Geolocation failed, center map to default
                        initializeMap(defaultCenter);
                    }
                );
            } else {
                // Browser doesn't support Geolocation
                initializeMap(defaultCenter);
            }
        }

        function initializeMap(center) {
            map = new google.maps.Map(document.getElementById("map"), {
                center: center,
                zoom: 10
            });
            updateMap();
        }

        async function updateMap() {
            try {
                const response = await fetch("get_locations.php");
                const locations = await response.json();

                // Clear existing markers
                markers.forEach(marker => marker.setMap(null));
                markers = [];

                // Add markers for each friend
                locations.forEach(friend => {
                    const marker = new google.maps.Marker({
                        position: {
                            lat: parseFloat(friend.latitude),
                            lng: parseFloat(friend.longitude)
                        },
                        map: map,
                        title: friend.username
                    });
                    markers.push(marker);
                });
            } catch (error) {
                console.error("Error fetching friend locations:", error);
            }
        }

        // Refresh map every 10 seconds
        setInterval(updateMap, 10000);
    </script>
</body>
</html>
