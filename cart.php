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

        <section class="explore-menu">
            <div class="drink">
                <div class="drink-img">
                    <img src="../img/drink1.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Remove from Cart</button>
                </div>
            </div>

            <div class="drink">
                <div class="drink-img">
                    <img src="../img/drink5.png" alt="drink1">
                </div>
                <div class="drink-text">
                    <h1 class="drink-name">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
                    <h1 class="drink-price">€99</h1>
                    <button class="add-to-cart">Remove from Cart</button>
                </div>
            </div>

        </section>

        <div class="go-to-cart">
            <a href="./checkout.html">Checkout</a>
        </div>

        <hr>

        <?php include 'footer.php' ?>

        <div class="add-to-cart-overlay">
            <p>Product removed from Cart</p>
        </div>
    </div>
</body>

</html>