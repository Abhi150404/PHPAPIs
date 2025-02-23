<?php
// Database connection
$conn =new Mysqli('localhost','root','','abhi');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Row Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <h2 class="my-4">Available User's Data</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th><input type="checkbox" id="selectAll"></th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Mobile No</th>
                <th>Date of Birth</th>
            </tr>
        </thead>
        <tbody id="userTable">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><input type="checkbox" class="userCheckbox" value="<?= $row['id'] ?>"></td>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['mobile'] ?></td>
                        <td><?= $row['dob'] ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No users found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <button id="deleteSelected" class="btn btn-danger">Delete Selected</button>
</div>

<script>
$(document).ready(function() {
    // Select/Deselect all checkboxes
    $('#selectAll').click(function() {
        $('.userCheckbox').prop('checked', this.checked);
    });

    // Delete selected rows
    $('#deleteSelected').click(function() {
        let selectedIDs = [];
        $('.userCheckbox:checked').each(function() {
            selectedIDs.push($(this).val());
        });

        if (selectedIDs.length > 0) {
            if (confirm("Are you sure you want to delete the selected users?")) {
                // Send IDs to server via AJAX for deletion
                $.ajax({
                    url: 'delete_users.php',
                    method: 'POST',
                    data: { ids: selectedIDs },
                    success: function(response) {
                        if (response === 'success') {
                            alert("Users deleted successfully!");
                            // Remove selected rows from the table
                            $('.userCheckbox:checked').closest('tr').remove();
                        } else {
                            alert("Failed to delete users!");
                        }
                    }
                });
            }
        } else {
            alert("Please select at least one user to delete.");
        }
    });
});
</script>

</body>
</html>

<?php $conn->close(); ?>