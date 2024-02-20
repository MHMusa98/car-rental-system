<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>My Bookings</h2>
    <table>
        <tr>
            <th>Booking ID</th>
            <th>Car Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
        </tr>
        <!-- Fetch and display user's bookings from the database -->
        <?php
        // Include database configuration
        include('../includes/config.php');

        // Fetch user's bookings from the database
        // Example: Assuming the user ID is stored in session, replace '1' with the actual user ID
        $user_id = 1; // Placeholder for user ID
        $stmt = $pdo->prepare("SELECT b.booking_id, c.car_name, b.start_date, b.end_date, b.status FROM bookings b JOIN cars c ON b.car_id = c.car_id WHERE b.user_id = ?");
        $stmt->execute([$user_id]);
        $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display each booking as a table row
        foreach ($bookings as $booking) {
            echo "<tr>";
            echo "<td>{$booking['booking_id']}</td>";
            echo "<td>{$booking['car_name']}</td>";
            echo "<td>{$booking['start_date']}</td>";
            echo "<td>{$booking['end_date']}</td>";
            echo "<td>{$booking['status']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
