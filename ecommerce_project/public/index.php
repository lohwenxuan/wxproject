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
    <?php
    include __DIR__ . "/../inc/products.inc.php";
    ?>
        <!-- First Section -->
        <section id="dogs">
            <h2>All About Dogs!</h2>
            <div class="row">
                <article class="col-sm">
                    <h3>Poodle</h3>
                    <figure>
                        <img src="images/poodle_small.jpg" popup-src="images/poodle_large.jpg" alt="Poodle" class="img-thumbnail" title="View larger image..." />
                        <figcaption>Standard Poodle</figcaption>
                    </figure>
                    <p>
                        Poodles are a group of formal dog breeds, the Standard Poodle,
                        Miniature Poodle and Toy Poodle.
                    </p>
                </article>
                <article class="col-sm">
                    <h3>Chihuahua</h3>
                    <figure>
                        <img src="images/chihuahua_small.jpg" popup-src="images/chihuahua_large.jpg" alt="Poodle" class="img-thumbnail" title="View larger image..." />
                        <figcaption class="center">Chihuahua</figcaption>
                    </figure>
                    <p>
                        The Chihuahua is the smallest breed of dog, and is named after the
                        Mexican state of Chihuahua.
                    </p>
                </article>
            </div>
        </section>

        <!-- Second Section -->
        <section id="cats">
            <h2>All About Cats!</h2>
            <div class="row">
                <article class="col-sm">
                    <h3>Calico</h3>
                    <figure>
                        <img src="images/calico_small.jpg" popup-src="images/calico_large.jpg" alt="Poodle" class="img-thumbnail" title="View larger image..." />
                        <figcaption>Standard Calico</figcaption>
                    </figure>
                    <p>
                        A calico cat (US English) is a domestic cat of any breed with a
                        tri-color coat.
                    </p>
                </article>
                <article class="col-sm">
                    <h3>Tabby</h3>
                    <figure>
                        <img src="images/tabby_small.jpg" popup-src="images/tabby_large.jpg" alt="Poodle" class="img-thumbnail" title="View larger image..." />
                        <figcaption>Tabby</figcaption>
                    </figure>
                    <p>
                        A tabby cat, or simply tabby, is any domestic cat (Felis catus)
                        with a distinctive M-shaped marking on its forehead, stripes by
                        its eyes and across its cheeks
                    </p>
                </article>
            </div>
        </section>
    </main>
    <?php
    include __DIR__ . "/../inc/footer.inc.php";
    ?>

</body>

</html>