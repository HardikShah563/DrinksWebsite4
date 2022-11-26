<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Cart</title>
</head>

<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box explore-cart-page all-pages">
        
    <?php include 'navbar.php' ?>

        <div class="title">
            <h1>Cart</h1>
        </div>

        <?php 

        $cart = get_cart();
        if (isset($cart)) {
            $drinks = get_drinks_by_ids($cart);
        }

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
                        <button type="submit" name="remove-from-cart" class="add-to-cart"> Remove from Cart <i class="fa-solid fa-cart-shopping"></i></button>
                    </form>
                </div>
            </div>
            <?php } ?>
        <?php } ?>

        </section>

        <?php if (mysqli_num_rows($drinks)) { ?>
        <div class="checkout-section">
            <div class="go-to-cart">
                <a href="checkout.php">Checkout</a>
            </div>
        </div>
        <?php } else {?>
            <p style="text-align: center; color: #fff; margin: 100px 0;"><-- Cart is empty, fill in with beautiful cans! --></p>
        <?php }?>

        <?php include 'footer.php' ?>

        <div class="add-to-cart-overlay">
            <p>Product removed from Cart</p>
        </div>
    </div>
</body>

</html>