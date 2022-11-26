<?php include 'functions.php' ?>

<?php 

if (isset($_POST['go-explore'])) {
    header('Location: explore.php');
}

?>

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

        <section class="about-us" id="about-us">
            <div class="about-text">
                <div class="main-text-pages">
                    <h1><i class="fa-solid fa-circle-check"></i></h1>
                    <h6>Your order has been placed successfully!</h6>
                    <form action="?" method="post">
                        <button name="go-explore" style="width: 200px;">Explore some more drinks</button>
                    </form>
                </div>
            </div>
            <div class="about-img">
                <img src="img/four-combo.png" alt="Four Combo Img">
            </div>
        </section>

        <hr>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>