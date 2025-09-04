<?php
// api/db.php

// --- Database Configuration ---
// Replace these with your actual database credentials.
$servername = "localhost"; // Or your database host (e.g., 127.0.0.1)
$username = "root";        // Your database username
$password = "nayak413";            // Your database password
$dbname = "pranay_photography"; // The name of your database

// --- Create Database Connection ---
try {
    // Create a new PDO instance for a secure connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception to catch and handle errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // If the connection fails, stop the script and show an error.
    // In a production environment, you would log this error instead of showing it to the user.
    header('Content-Type: application/json');
    http_response_code(500); // Internal Server Error
    echo json_encode([
        'success' => false,
        'message' => 'Database connection failed: ' . $e->getMessage()
    ]);
    exit(); // Stop script execution
}
?>