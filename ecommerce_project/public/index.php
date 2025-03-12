<!DOCTYPE html>
<html lang="en">

<head>
    <title>World of Pets</title>
    <?php
    include __DIR__ . "/../inc/head.inc.php";
    ?>
</head>

<body>
    <?php
    include __DIR__ . "/../inc/nav.inc.php";
    ?>

    <?php
    include __DIR__ . "/../inc/header.inc.php";
    ?>
    <!-- Hero Image -->
    <div class="row g-0"> <!-- g-0 removes Bootstrap gutter spacing -->
        <div class="col-12 p-0"> <!-- col-12 ensures full width -->
            <a href="shop.php">
                <img src="images/hero_image.png" class="img-fluid hero-img" alt="Hero Image">
            </a>
        </div>
    </div>

   

    <main class="container">
         <!-- Featured Products -->
        <?php
        include __DIR__ . "/../inc/products.inc.php";
        ?>
       
    </main>
    <?php
    include __DIR__ . "/../inc/footer.inc.php";
    ?>

</body>

</html>