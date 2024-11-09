<?php
require_once 'dbconnect.php'; // Replace with your database connection file

$result = $conn->query("SELECT username, longitude, latitude FROM users");
$locations = [];

while ($row = $result->fetch_assoc()) {
    $locations[] = $row;
}

header('Content-Type: application/json');
echo json_encode($locations);
?>
