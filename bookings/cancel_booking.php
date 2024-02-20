<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Cancel Booking</h2>
    <?php
    // Check if the booking ID is provided via GET parameter
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        // Get the booking ID from the GET parameter
        $booking_id = $_GET['id'];
        
        // Include database configuration
        include('../includes/config.php');

        // Fetch booking details from the database
        $stmt = $pdo->prepare("SELECT * FROM bookings WHERE booking_id = ?");
        $stmt->execute([$booking_id]);
        $booking = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the booking exists
        if ($booking) {
            // Display booking details
            echo "<p>Are you sure you want to cancel the booking for the car '{$booking['car_id']}'?</p>";
            echo "<form action='process_cancel_booking.php' method='post'>";
            echo "<input type='hidden' name='booking_id' value='{$booking_id}'>";
            echo "<button type='submit'>Yes, Cancel Booking</button>";
            echo "</form>";
        } else {
            echo "<p>Booking not found.</p>";
        }
    } else {
        echo "<p>Booking ID not provided.</p>";
    }
    ?>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
