<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Car Details</h2>
    <?php
    // Check if the car ID is provided via GET parameter
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        // Get the car ID from the GET parameter
        $car_id = $_GET['id'];
        
        // Include database configuration
        include('../includes/config.php');

        // Fetch car details from the database
        $stmt = $pdo->prepare("SELECT * FROM cars WHERE car_id = ?");
        $stmt->execute([$car_id]);
        $car = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the car exists
        if ($car) {
            // Display car details
            echo "<p><strong>Car Name:</strong> {$car['car_name']}</p>";
            echo "<p><strong>Car Type:</strong> {$car['car_type']}</p>";
            echo "<p><strong>Availability:</strong> {$car['availability']}</p>";
            // Add more details as needed
        } else {
            echo "<p>Car not found.</p>";
        }
    } else {
        echo "<p>Car ID not provided.</p>";
    }
    ?>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
