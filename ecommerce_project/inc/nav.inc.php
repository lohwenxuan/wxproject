<?php
session_start();
$cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<nav class="navbar navbar-expand-lg" style="background-color: #FFF4F0;">
<div class="container-fluid">
        <!-- Main Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" class="img-fluid" alt="Logo">
        </a>

        <!-- Navbar Toggler (for mobile view) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-3 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#dogs">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#cats">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#birds">Contact</a>
                </li>
            </ul>

            <!-- Right-Side Icons -->
            <div class="ms-auto d-flex align-items-center">
                
                <!-- Search Icon -->
                <a href="#" class="nav-link me-3" id="search-icon">
                    <img src="images/search.png" class="nav-icon" alt="Search">
                </a>

                <!-- Saved Products -->
                <a href="saved_products.php" class="nav-link me-3">
                    <img src="images/saved_products.png" class="nav-icon" alt="Saved Products">
                </a>

                <!-- Cart Icon with Item Count -->
                <a href="cart.php" class="nav-link position-relative me-3">
                    <img src="images/cart.png" class="nav-icon" alt="Cart">
                    <span class="cart-count position-absolute top-0 start-100 translate-middle badge bg-danger">
                        <?= $cart_count; ?>
                    </span>
                </a>

                <!-- Profile Icon -->
                <?php if (isset($_SESSION["email"])): ?>
                    <a href="account.php" class="nav-link me-3">
                        <img src="images/profile.png" class="nav-icon" alt="Account">
                    </a>
                <?php else: ?>
                    <a href="login.php" class="nav-link me-3">
                        <img src="images/profile.png" class="nav-icon" alt="Login">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>


</div>
