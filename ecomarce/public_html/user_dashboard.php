<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['username'])) {
    // Redirect to login if not logged in
    header("Location: login.php");
    exit();
}

// Fetch user details from the database using the session email
$email = $_SESSION['email'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Dashboard Container */
.dashboard-container {
    display: flex;
    height: 100vh;
    background-color: #1f1f2e;
    color: #ffffff;
}

/* Sidebar Styling */
.sidebar {
    width: 250px;
    background-color: #262626;
    padding: 20px;
    margin-left:-600px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.sidebar h2 {
    color: #fff;
    font-size: 1.5rem;
    text-align: center;
    margin-bottom: 40px;
}

.sidebar nav ul {
    list-style: none;
}

.sidebar nav ul li {
    margin: 15px 0;
}

.sidebar nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.sidebar nav ul li a:hover {
    color: #ffd700;
}

.premium-offer {
    text-align: center;
}

.premium-offer p {
    font-size: 0.9rem;
}

.premium-offer button {
    margin-top: 10px;
    padding: 10px;
    background-color: #ff9f43;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: white;
}

/* Main Dashboard */
.main-dashboard {
    flex: 1;
    padding: 20px;
}

.top-summary {
    display: flex;
    justify-content: space-between;
}

.card {
    width: 30%;
    background-color: #323344;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.card h3 {
    color: #d3d3d3;
}

.card p {
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
}

/* Analytics Section */
.analytics-section {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.earning-analytics, .mode-of-order {
    width: 48%;
    background-color: #323344;
    padding: 20px;
    border-radius: 10px;
}

.earning-analytics h3, .mode-of-order h3 {
    margin-bottom: 20px;
    color: #d3d3d3;
}

/* Sales Overview */
.sales-overview {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.top-selling-products, .recent-orders {
    width: 48%;
    background-color: #323344;
    padding: 20px;
    border-radius: 10px;
}

.top-selling-products table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.top-selling-products th, .top-selling-products td {
    padding: 10px;
    text-align: left;
    color: #d3d3d3;
    border-bottom: 1px solid #444;
}

.recent-orders ul {
    list-style: none;
    padding: 10px;
}

.recent-orders ul li {
    padding: 10px 0;
    border-bottom: 1px solid #444;
    color: #d3d3d3;
}
/* Toggle Button */
.toggle-button {
    position: absolute;
    top: 20px;
    left: 20px;
   
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 25px;
    cursor: pointer;
}

.toggle-button div {
    width: 100%;
    height: 4px;
    background-color: black;
    transition: 0.4s ease;
}

/* Slider Styling */
.slider {
    position: fixed;
    top: 0;
    left: -100%;
    width: 300px;
    height: 100%;
    background-color: #2c3e50;
    color: white;
    padding: 50px 20px;
    transition: 0.5s ease;
}

.slider.open {
    left: 0;
}

/* Toggle Button Animation for Cross Icon */
.toggle-button.open .bar1 {
    transform: rotate(-45deg) translate(-5px, 6px);
}

.toggle-button.open .bar2 {
    opacity: 0;  /* Hide the middle bar */
}

.toggle-button.open .bar3 {
    transform: rotate(45deg) translate(-5px, -6px);
}
/* Responsiveness */
@media (max-width: 768px) {
    .top-summary, .analytics-section, .sales-overview {
        flex-direction: column;
    }

    .card, .earning-analytics, .mode-of-order, .top-selling-products, .recent-orders {
        width: 100%;
        margin-bottom: 20px;
    }
}
        </style>
</head>
<body>
    <h2>Welcome, <?php echo $user['username']; ?>!</h2>
 <!--   <p>Email: <?php echo $user['email']; ?></p>
    <p>Date of Birth: <?php echo $user['dob']; ?></p>
    <p>Gender: <?php echo $user['gender']; ?></p>
    <div class="dashboard-container">
        <!-- Sidebar -->
           <!-- Toggle Button -->
    <div class="toggle-button" id="toggleBtn">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <!-- Slider Content -->
    <div class="slider" id="slider">
    
            <h2>GQIPSU</h2>
            <nav>
                <ul>
                    <li><a href="main.php">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Sales</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
            <div class="premium-offer">
                <p>Get Premium Features at 25% off</p>
                <button>Upgrade Now</button>
            </div>
        </div>
       
    
       

        <!-- Main Dashboard Content -->
        <div class="main-dashboard">
            <!-- Top Summary -->
            <div class="top-summary">
                <div class="card">
                    <h3>Total Sales</h3>
                    <p>$9568.19</p>
                </div>
                <div class="card">
                    <h3>Total Earnings</h3>
                    <p>$4593.36</p>
                </div>
                <div class="card">
                    <h3>Total Orders</h3>
                    <p>150k</p>
                </div>
            </div>

            <!-- Analytics and Mode of Order -->
            <div class="analytics-section">
                <div class="earning-analytics">
                    <h3>Earning Analytics</h3>
                    <canvas id="earningsChart"></canvas> <!-- Line Chart -->
                </div>

                <div class="mode-of-order">
                    <h3>Mode of Order</h3>
                    <div class="order-pie-chart">
                        <canvas id="orderChart"></canvas> <!-- Pie Chart -->
                    </div>
                </div>
            </div>

            <!-- Top Selling Products and Recent Orders -->
            <div class="sales-overview">
                <div class="top-selling-products">
                    <h3>Top Selling Products</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Orders</th>
                                <th>Stock</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nike Revolution 3</td>
                                <td>$120</td>
                                <td>679</td>
                                <td>In Stock</td>
                                <td>$12560</td>
                            </tr>
                            <tr>
                                <td>Green Plain T-Shirt</td>
                                <td>$25</td>
                                <td>90</td>
                                <td>In Stock</td>
                                <td>$2160</td>
                            </tr>
                            <tr>
                                <td>Nike Dunk Shoes</td>
                                <td>$79</td>
                                <td>120</td>
                                <td>Out of Stock</td>
                                <td>$5980</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="recent-orders">
                    <h3>Recent Orders</h3>
                    <ul>
                        <li>Nike Revolution 3 - $250</li>
                        <li>Round Neck Gray T-shirt - $99</li>
                        <li>Polo Multicolor T-shirt - $139</li>
                        <li>Green Plain T-Shirt - $50</li>
                        <li>Nike Dunk Shoes - $79</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- For Charts -->
    <script src="dashboard.js"></script> <!-- External JS for Charts -->
</body>


  <!--  <h3>Edit Profile</h3>
    <form action="update_profile.php" method="POST" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $user['username']; ?>"><br>

        <label for="password">New Password:</label>
        <input type="password" name="password"><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo $user['dob']; ?>"><br>

        <label for="gender">Gender:</label>
        <select name="gender">
            <!-- <option value="Male" <?php if($user['gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if($user['gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if($user['gender'] == 'Other') echo 'selected'; ?>>Other</option> -->
       <!-- </select><br>

        <!-- Profile Picture -->
       <!-- <label for="profile_image">Profile Image:</label>
        <input type="file" name="profile_image"><br>

        <button type="submit">Update Profile</button>
    </form>!-->
</body>
<script>
    const toggleBtn = document.getElementById('toggleBtn');
const slider = document.getElementById('slider');

// Toggle open/close states for the slider and the button icon
toggleBtn.addEventListener('click', function() {
    slider.classList.toggle('open');  // Toggle the slider's visibility
    toggleBtn.classList.toggle('open');  // Toggle button icon change
});
    var ctx1 = document.getElementById('earningsChart').getContext('2d');
var earningsChart = new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Earnings',
            data: [2000, 4000, 3000, 5000, 7000, 6000, 8000, 10000, 9000, 12000],
            borderColor: '#4bc0c0',
            fill: false
        }]
    }
});

// Orders Chart (Pie Chart)
var ctx
    </script>
</html>