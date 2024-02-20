<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Available Cars</h2>
    <ul>
        <!-- Fetch and display available cars from the database -->
        <?php
        // Include database configuration
        include('../includes/config.php');

        // Fetch available cars from the database
        $stmt = $pdo->prepare("SELECT * FROM cars WHERE availability = 'available'");
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
