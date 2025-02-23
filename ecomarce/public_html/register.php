<?php

include '../includes/db.php'; // Database connection
session_start(); // Start the session to hold user data

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];  // Hash the password
    $dob = $_POST['dob'];  // Date of Birth
    $gender = $_POST['gender'];  // Gender

    // Insert the new fields along with username, email, and password
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, dob, gender) VALUES (?, ?, ?, ?, ?)");

    if ($stmt->execute([$username, $email, $password, $dob, $gender])) {
        // Store user info in session
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        // Display success message and add a Login button
        echo "<p>Registration successful! You can now visit your dashboard.</p>";
        echo "<a href='user_dashboard.php'>Go to Dashboard</a>";
        echo "<br><a href='login.php'>Login</a>";
    } else {
        echo "Error: Could not register.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(135deg, #70e1f5, #ffd194);
}

.registration-container {
    width: 100%;
    max-width: 450px;
   
    background-color: #fff;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
}

.registration-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 5px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
  
    color: #555;
}

.form-group input {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.gender-group {
    display: flex;
    flex-direction: column;
    padding:10px 5px;
}

.gender-options {
    display: flex;
    justify-content: space-between;
    height: 20px;
    margin-top: 5px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    
}

.gender-options input {
    margin-right: 10px;
}

button[type="submit"] {
    width: 100%;
    padding: 12px;
    background: linear-gradient(90deg, #7f00ff, #e100ff);
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    margin-top:15px;
    transition: background 0.3s ease;
}

button[type="submit"]:hover {
    background: linear-gradient(90deg, #5a00ff, #b100ff);
}

/* Responsive Styles for Tablets and Mobiles */
@media (max-width: 768px) {
    .registration-container {
        width: 95%;
        max-width: none;
    }

    .gender-options {
        flex-direction: column;
    }

    button[type="submit"] {
        font-size: 14px;
    }
}
</style>
</head>
<body>

    <div class="registration-container">
        <form action="register.php" method="POST" class="registration-form">
            <h2>Registration</h2>

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your number" required>
            </div>
            <div class="form-group">
                <label for="phone">Date Of Birth</label>
                <input type="date" id="date" name="dob" placeholder="Enter your dob" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
            </div>

            <div class="form-group gender-group">
                <label>Gender</label>
                <div class="gender-options">
                    <input type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label>

                    <input type="radio" id="other" name="gender" value="Other">
                    <label for="other">Other</label>
                </div>
            </div>

            <button type="submit">Register</button>
            <?php
                                if(isset($_GET['token'])){
                                    $ab=$_GET['token'];
                                    if($ab=='87654567854'){ ?>
                                 
                                        <strong>success</strong>
                                        <span>User successfully Registerd..</span>
                                        
                                    <?php }

                                }
                                ?>
        </form>
    </div>

</body>
<script>
        let data = '<?php echo $_GET['token']; ?>';
        if (data=='87654567854'){
            setTimeout(() => {
               window.location='register.php'; 
            }, 3000);
        }
        </script>
</html>