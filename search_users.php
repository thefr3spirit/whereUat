<?php
include 'dbconnect.php'; // Database connection

$query = $_GET['query'];
$stmt = $conn->prepare("SELECT username FROM users WHERE username LIKE CONCAT('%', ?, '%') LIMIT 10");
$stmt->bind_param("s", $query);
$stmt->execute();
$result = $stmt->get_result();

$suggestions = [];
while ($row = $result->fetch_assoc()) {
    $suggestions[] = $row;
}

header('Content-Type: application/json');
echo json_encode($suggestions);
?>
