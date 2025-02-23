<!DOCTYPE html>
<html lang="en">
<head>
 <script src="jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
   <style>
    /* Hero Section */
.hero-section {
    background-image: url('imgs/Banner.png'); /* Add your banner image */
    background-size: cover;
    background-position: center;
    height: 450px;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    display:none;
    color: white;
    transition:2s all;
}

.hero-content {
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    padding: 20px;
    border-radius: 10px;
}

.hero-content h1 {
    font-size: 48px;
    margin-bottom: 10px;
}

.hero-content p {
    font-size: 18px;
    margin-bottom: 20px;
}

.hero-content .btn {
    padding: 10px 20px;
    background-color: #ff6600;
    color: white;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
}

/* Category Section */
.category-section {
    padding: 50px;
    text-align: center;
}

.category-section h2 {
    font-size: 36px;
    margin-bottom: 40px;
}

.category-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.category-card {
    background-color: #8def79;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.category-card:hover {
    transform: scale(1.05);
}

.category-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
}

.category-card h3 {
    font-size: 24px;
    margin: 20px 0 10px;
}

.category-card a {
    text-decoration: none;
    color: #ff6600;
    font-weight: bold;
}
/* Featured Products Section */
.featured-products, .latest-products, .deals-of-the-day {
    padding: 50px;
    text-align: center;
}

.featured-products h2, .latest-products h2, .deals-of-the-day h2 {
    font-size: 36px;
    margin-bottom: 40px;
}

.product-grid, .deal-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

 .deal-card {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.product-card:hover, .deal-card:hover {
    transform: scale(1.05);
}

.product-card img, .deal-card img {
    width: 100%;
    height: 400px;
   
    border-radius: 10px;
}

.product-card h3, .deal-card h3 {
    font-size: 24px;
    margin: 20px 0 10px;
}

.product-card p, .deal-card p {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px;
}

.product-card .btn, .deal-card .btn {
    padding: 10px 20px;
    background-color: #ff6600;
    color: white;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
}
/* Latest Products section*/
.scroll-container {
    position: relative;

    display: flex;
    align-items: center;
    width: 100%;

   
}

.products-slider {
    display: flex;
    gap: 20px;
    overflow-x: scroll;
    width: 100%;
    scroll-behavior: smooth; /* Enables smooth scrolling */
    scrollbar-width: none; /* Hides scrollbar for Firefox */

}

.products-slider::-webkit-scrollbar {
    display: block; 
} 

.product-card {
    min-width: 250px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    padding: 10px;
}
.product-card img{
    height:150px;
}

.scroll-button {
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    position: absolute;
    z-index: 1;
}

#scroll-left {
    left: 0;
}

#scroll-right {
    right: 0;
}

/* Deals of the Day - Countdown Timer */
.countdown {
    font-size: 18px;
    font-weight: bold;
    color: red;
    margin-bottom: 15px;
}
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include_once 'header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to Your Store</h1>
            <p>Shop the best products at unbeatable prices!</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
    </section>

    <!-- Category Section -->
    <section class="category-section">
        <h2>Shop by Category</h2>
        <div class="category-grid">
            <div class="category-card">
                <img src="imgs/electronics.png" alt="Electronics">
                <h3>Electronics</h3>
                <a href="#">Shop Electronics</a>
            </div>
            <div class="category-card">
                <img src="imgs/cloths.png" alt="Clothing">
                <h3>Clothing</h3>
                <a href="#">Shop Clothing</a>
            </div>
            <div class="category-card">
                <img src="imgs/phone.png" alt="Accessories">
                <h3>Mobiles</h3>
                <a href="#">Shop Mobiles</a>
            </div>
            <div class="category-card">
                <img src="imgs/shoes.png" alt="Shoes">
                <h3>Shoes</h3>
                <a href="#">Shop Shoes</a>
            </div>
            <!-- Add more categories if needed -->
        </div>
    </section>
    <!-- Featured Products Section -->
<section class="featured-products">
    <h2>Featured Category </h2>
    <div class="product-grid">
        <div class="product-card">
            <img src="imgs/product1.png" alt="Product 1">
            <h3>Product 1</h3>
            <p>₹1000</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <div class="product-card">
            <img src="imgs/product2.png" alt="Product 2">
            <h3>Product 2</h3>
            <p>₹1500</p>
            <a href="#" class="btn">Add to Cart</a>
        </div>
        <!-- Add more featured products as needed -->
    </div>
</section>

<!-- Latest Products Section -->
 <h2>Latest Products</h2>
 <div class="scroll-container">
    <button class="scroll-button" id="scroll-left">←</button>
    <div class="products-slider">
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 1</h3>
            <p>₹1200</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <div class="product-card">
        <img src="imgs/phone.png" alt="Accessories">
            <h3>Latest Product 2</h3>
            <p>₹1800</p>
            <button>Add to Cart</button>
        </div>
        <!-- More products here -->
    </div>
    <button class="scroll-button" id="scroll-right">→</button>
</div>

<!-- Deals of the Day Section -->
<section class="deals-of-the-day">
    <h2>Deals of the Day</h2>
    <div class="deal-grid">
        <div class="deal-card">
            <img src="deal1.jpg" alt="Deal 1">
            <h3>Deal Product 1</h3>
            <p>₹800</p>
            <div class="countdown" id="countdown1"></div>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="deal-card">
            <img src="deal2.jpg" alt="Deal 2">
            <h3>Deal Product 2</h3>
            <p>₹1000</p>
            <div class="countdown" id="countdown2"></div>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <!-- Add more deals as needed -->
    </div>
</section>
</body>
<script>
   
//latest product scrollbar

    $('#scroll-left').click(function() {
        $('.product-slider').css({'MarginLeft': '120px);'}); // Adjust the duration for smoothness
    });

    $('#scroll-right').click(function() {
        $('.product-slider').css({'MarginLeft':'120px;'});
        
      // Adjust the duration for smoothness
    });

      
    </script>
</html>