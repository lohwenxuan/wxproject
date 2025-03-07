<?php
session_start();
$cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<header>
    <nav class="navbar">
        <!-- Logo -->
        <div class="logo">
            <img src="logo.png" alt="PurePaw Logo">
            <span>PurePaw</span>
        </div>

        <!-- Navigation Links -->
        <ul class="nav-links" id="nav-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <!-- Icons Section -->
        <div class="nav-icons">
            <a href="#"><i class="fas fa-search"></i></a>  
            <a href="account.php"><i class="fas fa-user"></i></a>  
            <a href="wishlist.php"><i class="fas fa-heart"></i></a>  
            <a href="cart.php"><i class="fas fa-shopping-cart"></i> <span class="cart-count" id="cart-count"><?= $cart_count; ?></span></a>
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <div class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <ul class="mobile-nav" id="mobile-nav">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</header>
