<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Settings - whereUat</title>
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
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 20px auto;
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

        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            border: 1px solid #ddd;
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

        .two-factor {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 15px;
        }

        .toggle {
            width: 50px;
            height: 24px;
            background-color: #ccc;
            border-radius: 12px;
            position: relative;
            cursor: pointer;
        }

        .toggle-circle {
            width: 22px;
            height: 22px;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            top: 1px;
            left: 1px;
            transition: left 0.3s;
        }

        .toggle.active {
            background-color: #007bff;
        }

        .toggle.active .toggle-circle {
            left: 27px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Security Settings</h1>
        </header>
        
        <main>
            <!-- Password Change Section -->
            <section>
                <h2>Update Security Preferences</h2>
                <p>Change your password or enable Two-Factor Authentication (2FA).</p>

                <form id="security-form">
                    <div class="form-group">
                        <label for="current-password">Current Password</label>
                        <input type="password" id="current-password" name="current-password" required>
                    </div>

                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password" name="new-password" required>
                    </div>

                    <button type="submit" class="btn">Update Password</button>
                </form>
            </section>

            <!-- Two-Factor Authentication Section -->
            <section>
                <h2>Two-Factor Authentication (2FA)</h2>
                <p>Enhance your account security by enabling 2FA.</p>

                <div class="two-factor">
                    <span>Enable 2FA</span>
                    <div class="toggle" onclick="toggle2FA(this)">
                        <div class="toggle-circle"></div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        // Toggle the 2FA switch
        function toggle2FA(element) {
            element.classList.toggle("active");
            const is2FAEnabled = element.classList.contains("active");
            
            // Placeholder: Send 2FA status update to server
            console.log("Two-Factor Authentication enabled:", is2FAEnabled);
        }
    </script>
</body>
</html>
