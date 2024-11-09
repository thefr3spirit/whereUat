<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhereUat - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
            height: 50px;
        }

        .top-bar nav {
            display: flex;
            gap: 10px;
        }

        .top-bar button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            background-color: #555;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .top-bar button:hover {
            background-color: #777;
        }

        .full-background {
            background-image: url('images/home.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 20px;
        }

        .settings { 
            position: relative; 
            display: inline-block; 
        } 
        .settings .settings-icon { 
            font-size: 24px; 
            cursor: pointer; 
            color: #555; 
            margin-left: 10px; 
        } 
        .dropdown-content {
             display: none; 
             position: absolute; 
             right: 0; 
             background-color: white; min-width: 160px; 
             box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); z-index: 1; 
        } 
        .dropdown-content a { 
            color: black; 
            padding: 12px 16px; 
            text-decoration: none; 
            display: block; 
        } 
        .dropdown-content a:hover { 
            background-color: #f1f1f1; 
        } 
        .settings:hover .dropdown-content { 
            display: block; 
        }

        h1 {
            font-size: 4em;
            margin: 0;
        }

        section {
            padding: 20px;
        }

        .about, .news, .contact {
            text-align: left;
            margin: 20px 0;
        }

        .team {
            text-align: center;
            margin: 20px 0;
        }

        .team img {
            width: 150px;
            height: 150px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .social-media {
            margin-top: 10px;
        }

        .social-media a {
            margin: 0 10px;
        }

        .social-media img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <img src="images/logo.jpeg" alt="WhereUat Logo" class="logo">
        whereUat
        <nav>
            <a href="login.php"><button>Login</button></a>
            <a href="signup.php"><button>Sign up</button></a>
        </nav>
    </div>

    <!-- Container for all sections with a single background image -->
    <div class="full-background">
        <header>
            <h1>Don't Get Left Out<br>Locate Your Friends <br>And Let the Fun Begin</h1>
        </header>

        <section class="about">
            <h2>About us</h2>
            <p>Welcome to WhereUat, the innovative real-time location-sharing platform designed exclusively 
                for students of Mbarara University of Science and Technology (MUST). 
                Our mission is to make socializing easier by helping students connect and find each other effortlessly. 
                Whether you're trying to meet up after class or plan a quick hangout,
                WhereUat provides a fast, secure, and reliable way to share your location with trusted friends. 
                We aim to reduce the hassle of making endless calls or messages, and instead, bring students together 
                with just a few taps.
                With privacy and security at our core, users can enjoy complete control over who can see their location, 
                all while being assured of a seamless experience. 
                Stay connected, stay social—WhereUat makes it all possible.
            </p>
        </section>

        <section class="news">
            <h2>Latest news</h2>
            <p>Exciting developments are underway at WhereUat! We’ve just completed our beta testing phase, 
               and we're thrilled to announce that the app will be officially launching to all Mbarara University 
               students next month. With over 100 students already using the platform during the trial, 
               we’ve received invaluable feedback to make the app even more user-friendly and efficient.
            </p>
        </section>
    </div>

    <section class="team">
        <h2>Meet our team of committed developers and leaders</h2>
        <img src="images/teamM2.jpeg" alt="CEO">
        <img src="images/teamM3.jpeg" alt="Front-end Developer">
        <img src="images/teamM4.jpeg" alt="Back-end developer">
    </section>

    <section class="contact">
        <h2>Contact us</h2>
        <p>Get engaged on our social platforms.</p>

        <div class="social-media">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                <img src="images/fblogo.jpeg" alt="Facebook" class="social-icon">
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                <img src="images/Xlogo.jpeg" alt="Twitter" class="social-icon">
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="images/iglogo.jpeg" alt="Instagram" class="social-icon">
            </a>
        </div>
    </section>

</body>
</html>
