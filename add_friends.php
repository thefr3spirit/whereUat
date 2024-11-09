<?php
session_start();
include 'dbconnect.php';

$data = json_decode(file_get_contents("php://input"), true);
$username = $_SESSION['username'];
$friend_username = $data['username'];

// Check if the friend already exists
$checkStmt = $conn->prepare("SELECT * FROM friends WHERE user = ? AND friend = ?");
$checkStmt->bind_param("ss", $username, $friend_username);
$checkStmt->execute();
if ($checkStmt->get_result()->num_rows == 0) {
    // Add friend relationship
    $stmt = $conn->prepare("INSERT INTO friends (user, friend) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $friend_username);
    $stmt->execute();
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Already friends"]);
}
?>
