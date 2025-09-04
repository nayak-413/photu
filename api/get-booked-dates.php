<?php
// api/get-booked-dates.php

header('Content-Type: application/json');
require_once 'db.php';

try {
    // Select all confirmed or pending booking dates from the table
    $sql = "SELECT session_date FROM bookings WHERE status IN ('pending', 'confirmed')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Fetch all dates into an array
    $booked_dates = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

    // Send the dates as a JSON response
    echo json_encode($booked_dates);

} catch (PDOException $e) {
    // Handle potential errors
    http_response_code(500);
    echo json_encode(['error' => 'Failed to fetch booked dates: ' . $e->getMessage()]);
}

// Close the connection
$conn = null;
?>