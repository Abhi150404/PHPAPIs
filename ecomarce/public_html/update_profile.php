<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Fetch the current user's email
$email = $_SESSION['email'];

// Capture form inputs
$username = $_POST['username'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

// Handle password change if provided
if (!empty($_POST['password'])) {
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->execute([$password, $email]);
}

// Handle profile image upload
if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
    $imageName = $_FILES['profile_image']['name'];
    $imageTmpName = $_FILES['profile_image']['tmp_name'];
    $imagePath = 'uploads/' . $imageName;

    // Move the uploaded file to the "uploads" directory
    move_uploaded_file($imageTmpName, $imagePath);

    // Save the image name to the database
    $stmt = $pdo->prepare("UPDATE users SET profile_image = ? WHERE email = ?");
    $stmt->execute([$imageName, $email]);
}

// Update user details (username, dob, gender)
$stmt = $pdo->prepare("UPDATE users SET username = ?, dob = ?, gender = ? WHERE email = ?");
$stmt->execute([$username, $dob, $gender, $email]);

// Redirect back to the dashboard
header("Location: user_dashboard.php");
exit();
?>