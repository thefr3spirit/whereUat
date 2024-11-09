<?php
session_start();
include 'dbconnect.php';

$username = $_SESSION['username'];
$stmt = $conn->prepare("SELECT u.username, u.latitude, u.longitude 
                        FROM users u 
                        JOIN friends f ON u.username = f.friend 
                        WHERE f.user = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$friendsLocations = [];
while ($row = $result->fetch_assoc()) {
    $friendsLocations[] = $row;
}

header('Content-Type: application/json');
echo json_encode($friendsLocations);
?>
