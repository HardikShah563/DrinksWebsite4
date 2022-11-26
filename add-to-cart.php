<?php include 'functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify</title>
</head>

<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box all-pages">
        <?php include 'navbar.php' ?>

        <?php

        if (isset($_POST['add-to-cart'])) {
            $data = $_POST;
            $id = $_POST["d_id"];
            $quantity = 1;
            if (add_to_cart($id, $quantity)) {
                $response = [
                    'type' => 'success',
                    'message' => 'Drink is added to cart successfully!',
                    'icon' => '<i class="fa-solid fa-circle-check"></i>',
                ];
            } else {
                $response = [
                    'type' => 'success',
                    'message' => 'Some Error Occured, Please try again!',
                    'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
                ];
            }
        } else if (isset($_POST['update-to-cart'])) {
            $data = $_POST;
            $id = $_POST["d_id"];
            $quantity = $_POST['quantity'];
            if (update_to_cart($id, $quantity)) {
                $response = [
                    'type' => 'success',
                    'message' => 'Drink is added to cart successfully!',
                    'icon' => '<i class="fa-solid fa-circle-check"></i>',
                ];
            } else {
                $response = [
                    'type' => 'success',
                    'message' => 'Some Error Occured, Please try again!',
                    'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
                ];
            }
        } else if (isset($_POST['remove-from-cart'])) {
            $id = $_POST["d_id"];
            if (remove_from_cart($id)) {
                $response = [
                'type' => 'success',
                'message' => 'Drink is removed from cart',
                'icon' => '<i class="fa-solid fa-circle-check"></i>',
                ];
            } else {
                $response = [
                'type' => 'error',
                'message' => 'Some Error Occured, Please try again!',
                'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
                ];
            }
        }

        ?>

        <section class="about-us" id="about-us">
            <div class="about-text">
                <div class="main-text-pages">
                    <h1><?= $response['icon'] ?></h1>
                    <h6><?= $response['message'] ?></h6>
                </div>
            </div>
            <div class="about-img">
                <img src="img/four-combo.png" alt="Four Combo Img">
            </div>
        </section>

        <hr>

        <section class="footer">
            <footer>
                <p>&copy; Copyrights reserved | Drinksify 2022</p>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms and Conditions</a>
                </div>
            </footer>
        </section>
    </div>
</body>

</html>