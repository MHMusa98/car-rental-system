<?php
// Include database configuration
include('../includes/config.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate payment details (You may need to add more validation logic)
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Perform payment validation (Example: Dummy validation for demonstration)
    $payment_valid = true;

    if ($payment_valid) {
        // Payment is valid, process the booking
        $booking_id = $_POST['booking_id'];
        $status = 'paid'; // Update booking status to 'paid'

        // Update booking status in the database
        $stmt = $pdo->prepare("UPDATE bookings SET status = ? WHERE booking_id = ?");
        $stmt->execute([$status, $booking_id]);

        // Redirect user to a confirmation page
        header("Location: payment_confirmation.php");
        exit();
    } else {
        // Payment is not valid, display an error message
        echo "Payment validation failed. Please check your payment details and try again.";
    }
} else {
    // Redirect user to the booking page if form is not submitted
    header("Location: ../bookings/book_car.php");
    exit();
}
?>
