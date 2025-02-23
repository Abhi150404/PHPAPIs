<!DOCTYPE html>
<html lang="en">
<head>
<script src="jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <style>
    header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    position:fixed;
    z-index: 999;
  
    background-color: #7CF87C;
    color: white;
}

/* Logo */
.logo {
    width: 80px;
    height: 80px;
    border-radius:50%;
    background:url(imgs/logo.png);
    background-size:cover;
    transform-origin: center;
    transition:0.6s all;
    perspective: 100px;
    cursor: pointer;


}



 img :hover{
    transform:scale(1.2);
}


/* Website Name (Center) */
.header-center h1 {
    font-size: 24px;
    font-weight: bold;
    text-align: center;
}

/* Search Bar */
.search-bar input {
    padding: 5px;
    width: 250px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

/* User Icon and Cart Icon */
.user-icon img, .cart-icon img {
    width: 30px;
    height: 30px;
    margin-left: 20px;
}

/* Mega Menu */
.mega-menu ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.mega-menu ul li {
    position: relative;
}

.mega-menu ul li a {
    color: white;
    text-decoration: none;
    padding: 10px;
    display: block;
}

.mega-menu ul .dropdown {
    display: none;
    position: absolute;
    background-color: #444;
    list-style: none;
    top: 100%;
    left: 0;
    padding: 10px;
}

.mega-menu ul li:hover .dropdown {
    display: block;
}

.mega-menu ul .dropdown li a {
    padding: 10px;
}
</style>
   
</head>
<body>
    <header id="h1">
        <!-- Left Section: Logo -->
       <div class='logo'>

         </div>

        <!-- Center Section: Website Name -->
        <div class="header-center">
            <h1>Your Website Name</h1>
        </div>

        <!-- Right Section: Search Bar, User Icon, Cart Icon -->
        <div class="header-right">
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
            <!-- User Icon -->
            <div class="user-icon">
                <a href="user_dashboard.php">
                    <img src="user-icon.png" alt="User">
                </a>
            </div>
            <!-- Cart Icon -->
            <div class="cart-icon">
                <a href="cart.php">
                    <img src="cart-icon.png" alt="Cart">
                </a>
            </div>
        </div>

        <!-- Mega Menu -->
        <nav class="mega-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Categories</a>
                    <!-- Dropdown Menu -->
                    <ul class="dropdown">
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">Accessories</a></li>
                        <!-- Add more categories as needed -->
                    </ul>
                </li>
                <li><a href="#">Deals</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
<script>
    $(".logo").click(function(){
        $(".logo").css("transform", "rotateY(-170deg)")
        });
 





    


    </script>
</html>