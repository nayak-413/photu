<?php
// api/bookings.php

// Set the content type of the response to JSON
header('Content-Type: application/json');

// Include the database connection file
require_once 'db.php';

// --- Handle the incoming request ---
// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['success' => false, 'message' => 'Only POST method is allowed.']);
    exit();
}

// Get the raw POST data from the request body
$json_data = file_get_contents('php://input');

// Decode the JSON data into a PHP associative array
$data = json_decode($json_data, true);

// --- Basic Validation ---
// Check if essential data is present
if (empty($data['fullName']) || empty($data['email']) || empty($data['sessionDate'])) {
    http_response_code(400); // Bad Request
    echo json_encode(['success' => false, 'message' => 'Missing required fields.']);
    exit();
}

// --- Prepare Data for Insertion ---
// Sanitize and assign variables
$full_name = htmlspecialchars(strip_tags($data['fullName']));
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(strip_tags($data['phone']));
$session_date = $data['sessionDate'];
$session_time = htmlspecialchars(strip_tags($data['sessionTime']));
$location = htmlspecialchars(strip_tags($data['location']));
$session_type = htmlspecialchars(strip_tags($data['sessionType']));
$special_requests = htmlspecialchars(strip_tags($data['specialRequests']));
$referral_source = htmlspecialchars(strip_tags($data['referralSource']));
$total_price = $data['totalPrice'];
$booking_reference = $data['bookingReference'];

// The 'addons' field is an array of objects. We'll store it as a JSON string.
$addons_json = json_encode($data['addons']);


// --- Insert Data into Database ---
try {
    // SQL statement to insert the booking into the database
    // Using prepared statements to prevent SQL injection
    $sql = "INSERT INTO bookings (full_name, email, phone, session_date, session_time, location, session_type, special_requests, referral_source, addons, total_price, booking_reference)
            VALUES (:full_name, :email, :phone, :session_date, :session_time, :location, :session_type, :special_requests, :referral_source, :addons, :total_price, :booking_reference)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters to the statement
    $stmt->bindParam(':full_name', $full_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':session_date', $session_date);
    $stmt->bindParam(':session_time', $session_time);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':session_type', $session_type);
    $stmt->bindParam(':special_requests', $special_requests);
    $stmt->bindParam(':referral_source', $referral_source);
    $stmt->bindParam(':addons', $addons_json);
    $stmt->bindParam(':total_price', $total_price);
    $stmt->bindParam(':booking_reference', $booking_reference);

    // Execute the statement
    $stmt->execute();

    // --- Send Success Response ---
    http_response_code(201); // Created
    echo json_encode([
        'success' => true,
        'message' => 'Booking created successfully!',
        'bookingId' => $booking_reference
    ]);

} catch (PDOException $e) {
    // --- Send Error Response ---
    http_response_code(500); // Internal Server Error
    echo json_encode([
        'success' => false,
        'message' => 'Failed to create booking: ' . $e->getMessage()
    ]);
}

// Close the database connection
$conn = null;
?>