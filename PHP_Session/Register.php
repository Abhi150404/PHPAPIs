<?php
require_once(session.php);
?>


<!-- HTML Form for user registration -->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>
<body>
<div class='container-fluid'>
        <div class='row'>
            <div class='col-lg-4'>
                <div class='card mt-4'>
                    <div class='card-header pb-2 bg-primary text-light'>
                        <h4>User Registration</h4>
</div>
<div class='card-body'>
    <form method="post" action="register.php">
    <div class = 'form-group'>
        <label for="username">Username:</label>

        <input type="text" name="username" required>
</div>
<div class = 'form-group'>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
</div>      
<button type='submit' class='btn btn-success btn-block'>Register</button>
</form>
</div>
</div>
</div>
</div>
</div>
</form>
</body>
<script>   
</script>
</html>