<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Explore</title>
</head>

<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box all-pages explore-cart-page ">
    <?php include 'navbar.php' ?>

        <div class="title">
            <h1>Explore the Energy!</h1>
        </div>

        <?php $drinks = get_drinks();
        if (mysqli_num_rows($drinks)) { ?>
        <section class="explore-menu">
            <?php foreach ($drinks as $drink) { ?>
            <div class="drink">
                <div class="drink-img">
                    <img src="<?= $drink['image'] ?>" alt="drink image" />
                </div>
                <div class="drink-text">
                    <p class="drink-name"><?= $drink['name'] ?></p>
                    <h3 class="drink-cost" style="text-align: center;">£<?= $drink['price'] ?></h3>
                </div>
                <div class="add-to-basket">
                    <form action="add-to-cart.php" method="POST">
                        <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                        <button type="submit" name="add-to-cart" class="add-to-cart"> Add to Cart <i class="fa-solid fa-cart-shopping"></i></button>
                    </form>
                </div>
            </div>
            <?php } ?>
        <?php } ?>

        </section>

        <div class="go-to-cart">
            <a href="/drinksify/cart.php">Go to Cart</a>
        </div>

        <?php include 'footer.php' ?>

        <!-- <div class="add-to-cart-overlay">
            <p>Product Added to Cart</p>
        </div> -->
    </div>
</body>

</html>