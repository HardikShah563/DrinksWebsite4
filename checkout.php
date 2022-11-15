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
            <form>
                <h1>Personal Details</h1>
                <div class="grouping">
                    <input type="text" name="FirstName" id="FirstName" placeholder="First Name" required>
                    <input type="text" name="LastName" id="LastName" placeholder="Last Name" required>
                </div>
                <p>* You can login through phone number or email address</p>
                <input type="number" name="phnumber" id="phnumber" placeholder="Phone Number">
                <input type="email" name="email" id="email" placeholder="Email / Username">
                <div class="grouping">
                    <input type="password" name="password" id="password" placeholder="Create Password" required>
                    <input type="password" name="password" id="password" placeholder="Retype Password" required>
                </div>
                <button>Save Changes</button>
            </form>
        </section>

        <section class="input-form">
            <form>
                <h1>Billing & Shipping Address</h1>
                <input type="text" placeholder="House no. / Building Name" required>
                    <input type="text" placeholder="Road Name / Area / Colony" required>
                    <div class="grouping">
                        <input type="text" placeholder="Pincode" required>
                        <input type="text" placeholder="City" required>
                        <input type="text" placeholder="State" required>
                    </div>
                    <input type="text" placeholder="Nearby Location (optional)">
                    <button>Save Changes</button>
            </form>
        </section>

        <section class="input-form">
            <form>
                <h1>Billing & Shipping Address</h1>
                <div class="grouping">
                    <input type="text" name="card-holder" id="card-holder" placeholder="Card Holder" required>
                    <input type="date" name="date" id="date" required>
                </div>
                <div class="grouping">
                    <input type="number" name="card-number" id="card-number" placeholder="Card Number" required>
                    <input type="number" name="CVV" id="CVV" placeholder="CVV" required>
                </div>
                <button>Proceed with payment</button>
            </form>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>