<?php
// Start a PHP session
session_start();

// Include the header file
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Car Rental System</h1>
        <p>Explore our range of cars and book your next ride with us!</p>
        <a href="cars/list_cars.php" class="btn">View Available Cars</a>
        <a href="bookings/book_car.php" class="btn">Book a Car</a>
    </div>
</body>
</html>

<?php
// Include the footer file
include('includes/footer.php');
?>
