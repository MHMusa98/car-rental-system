<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Manage Cars</h2>
    <!-- Add car form -->
    <h3>Add New Car</h3>
    <form action="add_car.php" method="post">
        <label for="car_name">Car Name:</label>
        <input type="text" id="car_name" name="car_name" required>
        <label for="car_type">Car Type:</label>
        <input type="text" id="car_type" name="car_type" required>
        <!-- Add more fields as needed -->
        <button type="submit">Add Car</button>
    </form>

    <!-- List of existing cars -->
    <h3>Existing Cars</h3>
    <ul>
        <!-- Fetch and display cars from the database -->
        <?php
        // Include database configuration
        include('../includes/config.php');

        // Fetch cars from the database
        $stmt = $pdo->prepare("SELECT * FROM cars");
        $stmt->execute();
        $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display each car as a list item
        foreach ($cars as $car) {
            echo "<li>{$car['car_name']} - {$car['car_type']}</li>";
        }
        ?>
    </ul>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
