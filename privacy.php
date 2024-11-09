<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Settings - whereUat</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 1.8em;
            color: #333;
        }

        main section {
            margin-bottom: 20px;
        }

        main h2 {
            font-size: 1.4em;
            color: #555;
            margin-bottom: 10px;
        }

        main p {
            color: #666;
            font-size: 1em;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 0.9em;
            color: #555;
            margin-bottom: 5px;
        }

        select, input[type="checkbox"] {
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 100%;
        }

        .btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            font-size: 1em;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Privacy Settings</h1>
        </header>
        
        <main>
            <!-- Privacy Control Section -->
            <section>
                <h2>Manage Your Privacy</h2>
                <p>Control who can see your information and activity.</p>

                <form id="privacy-form">
                    <!-- Profile Visibility Option -->
                    <div class="form-group">
                        <label for="profile-visibility">Profile Visibility</label>
                        <select id="profile-visibility" name="profile-visibility">
                            <option value="everyone">Everyone</option>
                            <option value="friends-only">Friends Only</option>
                            <option value="private">Only Me</option>
                        </select>
                    </div>

                    <!-- Location Sharing Option -->
                    <div class="form-group">
                        <label for="location-sharing">Location Sharing</label>
                        <select id="location-sharing" name="location-sharing">
                            <option value="always">Always Share</option>
                            <option value="friends-only">Share with Friends Only</option>
                            <option value="never">Do Not Share</option>
                        </select>
                    </div>

                    <!-- Activity Status Toggle -->
                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="show-activity-status" name="show-activity-status">
                            Show my activity status
                        </label>
                    </div>

                    <!-- Save Changes Button -->
                    <button type="submit" class="btn">Save Changes</button>
                </form>
            </section>
        </main>
    </div>

    <script>
        document.getElementById("privacy-form").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Privacy settings updated successfully!");
        });
    </script>
</body>
</html>
