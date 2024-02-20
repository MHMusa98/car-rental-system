<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Manage Bookings</h2>
    <table>
        <tr>
            <th>Booking ID</th>
            <th>User ID</th>
            <th>Car ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <!-- Fetch and display bookings from the database -->
        <?php
        // Include database configuration
        include('../includes/config.php');

        // Fetch bookings from the database
        $stmt = $pdo->prepare("SELECT * FROM bookings");
        $stmt->execute();
        $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display each booking as a table row
        foreach ($bookings as $booking) {
            echo "<tr>";
            echo "<td
