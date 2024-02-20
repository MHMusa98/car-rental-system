<?php
// Include the header file
include('../includes/header.php');
?>

<div class="container">
    <h2>Manage Users</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <!-- Fetch and display users from the database -->
        <?php
        // Include database configuration
        include('../includes/config.php');

        // Fetch users from the database
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display each user as a table row
        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>{$user['user_id']}</td>";
            echo "<td>{$user['name']}</td>";
            echo "<td>{$user['email']}</td>";
            echo "<td><a href='edit_user.php?id={$user['user_id']}'>Edit</a> | <a href='delete_user.php?id={$user['user_id']}'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php
// Include the footer file
include('../includes/footer.php');
?>
