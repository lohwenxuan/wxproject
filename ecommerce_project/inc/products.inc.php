<section class="featured-products">
    <h2>Featured Products</h2>

    <div class="row">
        <?php
        // Example product array (Replace with database query)
        $products = [
            ["name" => "Friskies - Dry Cat Food", "image" => "images/product.png", "price" => "12.90"],
            ["name" => "Fancy Feast - Chicken Grilled", "image" => "images/product.png", "price" => "12.90"],
            ["name" => "Kaytee - All Natural Timothy Hay", "image" => "images/product.png", "price" => "12.90"],
            ["name" => "Pedigree - Adult Dry Dog Food", "image" => "images/product.png", "price" => "12.90"],
            ["name" => "Kaytee - All Natural Timothy Hay", "image" => "images/product.png", "price" => "12.90"],
            ["name" => "Pedigree - Adult Dry Dog Food", "image" => "images/product.png", "price" => "12.90"]
            
        ];

        // Loop through products and display Bootstrap cards
        foreach ($products as $product) {
            echo '
  <div class="col-md-4 mb-4">
    <div class="product-card bg-white rounded-4 shadow-sm h-100 position-relative p-3">

        <!-- Product Image -->
        <div class="overflow-hidden">
            <img src="' . $product["image"] . '" class="product-image w-100" alt="' . $product["name"] . '">
        </div>

        <!-- Product Details -->
        <div class="p-4">
            <h5 class="fw-bold mb-3">' . $product["name"] . '</h5>


            <!-- Description -->
            <p class="text-muted mb-4">Short product description goes here.</p>

            <!-- Price & Buttons -->
            <div class="d-flex justify-content-between align-items-center">
                <span class="price">$' . $product["price"] . '</span>

                <div class="card-footer d-flex justify-content-between bg-light">
            <button class=" btn btn-primary btn-sm me-2">Add to Cart</button>
            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-heart"></i></button>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

';
        }
        ?>
    </div>

    <!-- View All Products Button -->
    <div class="text-center">
        <a href="shop.php" class="btn btn-primary">View All Products</a>
    </div>
</section>