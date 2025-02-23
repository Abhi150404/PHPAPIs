<?php
// Include database connection
include 'db.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    // Insert user into the database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        echo "User registered successfully!";
        echo "<br><a href='login.php'>Login now</a>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
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
<?php
if (isset($_GET['token'])){
    $ab = $_GET['token'];
    if($ab=='87654567854'){ ?>
    <div class='alert alert-success mt-3'>
        <strong>success</strong>
        <span>User successfully Registerd..</span>
    </div>


<?php }
}
?>

</form>
</div>
</div>
</div>
</div>
</div>
    </form>
</body>
<script>
    let data = '<?php echo $_GET['token'];?>';
    if(data=='87654567854'){
        setTimeout(() => {    
        window.location='Register.php'}, 900);
    }
</script>
</html>