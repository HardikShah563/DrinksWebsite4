<?php include 'functions.php' ?>

<?php

if (!isset($_SESSION['u_id'])) {
    header('Location: ./login.php');
}
if (isset($_POST['checkout'])) {
    $checkout = $_POST;
    $cart = get_cart();
    if (!empty($cart)) {
        $checkout['u_id'] = $_SESSION["u_id"];
        $checkout['fname'] = $_POST["fname"];
        $checkout['lname'] = $_POST["lname"];
        $checkout['email'] = $_POST["email"];
        $checkout["total"] = get_total();
        $checkout["drinks"] = json_encode($cart, true);
        $checkout = checkout($checkout);
        if ($checkout) {
            empty_cart();
            header('Location: orderplaced.php');
        }
    } else {
        header('Location: ../index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Checkout</title>
</head>
<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box checkout-page all-pages">
        <?php include 'navbar.php' ?>
        
        <div class="main-text">
            <h1>Checkout form</h1>
        </div>

        <section class="input-form">
            <form action="?" method="post">
                <h1>Personal Details</h1>
                <div class="grouping">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                </div>
                <p>* This email will be used for further communication</p>
                <input type="email" name="email" placeholder="Email">


                <h1>Billing & Shipping Address</h1>
                <input type="text" placeholder="House no. / Building Name" required>
                    <input type="text" placeholder="Road Name / Area / Colony" required>
                    <div class="grouping">
                        <input type="text" placeholder="Pincode" required>
                        <input type="text" placeholder="City" required>
                        <input type="text" placeholder="State" required>
                    </div>
                    <input type="text" placeholder="Nearby Location (optional)">


                <h1>Payment Details</h1>
                <div class="grouping">
                    <input type="text" name="card-holder" id="card-holder" placeholder="Card Holder" required>
                    <input type="date" name="date" id="date" required>
                </div>
                <div class="grouping">
                    <input type="number" name="card-number" id="card-number" placeholder="Card Number" required>
                    <input type="number" name="CVV" id="CVV" placeholder="CVV" required>
                </div>
                <button type="submit" name="checkout">Submit your response</button>
            </form>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>