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
            <!-- Dynamic Rows Here -->
        </tbody>
    </table>
    <button id="deleteSelected" class="btn btn-danger">Delete Selected</button>
</div>

<script>
// Sample user data
const users = [
    { id: 1, name: "Abhishek", mobile: "9368779595", dob: "1997-02-11" },
    { id: 2, name: "Hema", mobile: "9887326716", dob: "1985-09-17" },
    { id: 3, name: "Rekha", mobile: "9191919191", dob: "1984-11-14" },
    { id: 4, name: "Jaya", mobile: "9212128756", dob: "1989-02-17" }
];

// Function to render table rows
function renderTable() {
    let tableBody = '';
    users.forEach(user => {
        tableBody += `<tr>
            <td><input type="checkbox" class="userCheckbox" value="${user.id}"></td>
            <td>${user.id}</td>
            <td>${user.name}</td>
            <td>${user.mobile}</td>
            <td>${user.dob}</td>
        </tr>`;
    });
    $('#userTable').html(tableBody);
}

// Call renderTable on page load
$(document).ready(function() {
    renderTable();

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
                    url: 'delete_temp.php',
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