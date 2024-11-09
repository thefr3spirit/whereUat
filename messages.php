<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - whereUat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
        }
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .search-bar {
            margin-bottom: 20px;
        }
        .search-bar input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contacts {
            display: flex;
            justify-content: space-between;
            width: 80%;
        }
        .contacts ul {
            list-style-type: none;
            padding: 0;
            width: 30%;
        }
        .contacts ul li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .chat-window {
            width: 65%;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .chat-window p {
            margin: 10px 0;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        footer a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-size: 16px;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>whereUat</h1>
        <nav>
            <a href="home.html">Home</a>
            <a href="friends.html">Friends</a>
            <a href="profile.html">Profile</a>
        </nav>
    </header>
    <main>
        <div class="search-bar">
            <input type="text" placeholder="https://whereUat" readonly>
        </div>
        <div class="contacts">
            <ul>
                <li>Fikri Ruslandi</li>
                <li>Moch Ramdhani</li>
                <li>Abu Abdullah Nugraha</li>
                <li>Muhammad Fauzi</li>
                <li>Nurman Tri Gumelar</li>
                <li>Bagas Rhafi</li>
                <li>Saepul Rohman</li>
            </ul>
            <div class="chat-window">
                <p>Nanti kita technical meeting lomba jogja</p>
                <p>Semua satu team ITOne yang berangkat ke jogja</p>
                <p>Iya, semua kita berangkat pake pesawat biar cepet dari jakarta berangkat, terus dari sini kita naik kereta ke jakarta</p>
                <p>Ok, berarti kita beberapa hari disana?</p>
                <p>Yaiyalah tenang kita tidur di hotel ko</p>
                <p>Sip lumayan sekalian jalan jalan, semoga tim kita bisa menang</p>
                <p>Yaiyalah tenang kita tidur di hotel ko</p>
            </div>
        </div>
    </main>
    <footer>
        <a href="profile.php"><span class="nav-icon">&#128100; You</span></a>
        <a href="friends.php"><span class="nav-icon">&#128101; Find friends</span></a>
        <a href="messages.php"><span class="nav-icon">&#128172; Messages</span></a>
    </footer>
</body>
</html>
