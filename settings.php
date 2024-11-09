<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - whereUat</title>
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
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        header h1 {
            font-size: 1.8em;
            color: #333;
        }

        nav {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        nav a {
            color: #007bff;
            text-decoration: none;
            font-size: 1em;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.4em;
            color: #555;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 1em;
        }

        .btn {
            display: inline-block;
            padding: 12px;
            font-size: 1em;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Settings</h1>
            <nav>
                <a href="profile.php">Profile</a>
                <a href="security.php">Security</a>
                <a href="privacy.php">Privacy</a>
            </nav>
        </header>

        <main>
            <!-- Account Settings Section -->
            <section>
                <h2>Account Settings</h2>
                <p>Manage your account preferences, privacy, and security settings to keep your account safe and personalized to your needs.</p>
                <a href="account-preferences.php" class="btn">Update Preferences</a>
            </section>
        </main>
    </div>
</body>
</html>
