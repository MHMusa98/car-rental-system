<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Book a Car</h2>
    <form action="process_booking.php" method="post">
        <label for="car_id">Select Car:</label>
        <select id="car_id" name="car_id" required>
            <!-- Fetch and display available cars from the database -->
            <?php
            // Include database configuration
            include('../includes/config.php');

            // Fetch available cars from the database
            $stmt = $pdo->prepare("SELECT * FROM cars WHERE availability = 'available'");
            $stmt->execute();
            $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Display each car as an option in the select dropdown
            foreach ($cars as $car) {
                echo "<option value='{$car['car_id']}'>{$car['car_name']} - {$car['car_type']}</option>";
            }
            ?>
        </select>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
        <button type="submit">Book Car</button>
    </form>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
