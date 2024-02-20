<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Change Password</h2>
    <form action="process_change_password.php" method="post">
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <button type="submit">Change Password</button>
    </form>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
