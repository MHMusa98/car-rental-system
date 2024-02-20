<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Search Cars</h2>
    <form action="search_results.php" method="get">
        <label for="car_type">Car Type:</label>
        <input type="text" id="car_type" name="car_type">
        <label for="availability">Availability:</label>
        <select id="availability" name="availability">
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>
        <!-- Add more search criteria as needed -->
        <button type="submit">Search</button>
    </form>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
