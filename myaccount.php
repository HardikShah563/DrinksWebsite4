<?php include 'functions.php' ?>

<?php 

if (isset($_POST['logout'])) {
    header("Location: logout.php");
}

if (isset($_POST['editbio'])) {
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <section class="about-us" id="about-us">
            <div class="about-text">
                <div class="main-text-pages">
                    <h1>My Account</h1>
                </div>
                <div class="user-details">
                    <p>Name: <?= $_SESSION["fname"]; $_SESSION["lname"]; ?></p>
                    <p>Email Address: <?= $_SESSION["email"] ?></p>
                </div>
                <div class="user-buttons" style="display: flex; justify-content: center; gap: 20px;">
                    <form action="?" method="post">
                        <button type="submit" name="editbio">Edit Bio</button>
                    </form>
                    <form action="?" method="post">
                        <button type="submit" name="logout">Log Out</button>
                    </form>
                </div>
            </div>
            <div class="about-img">
                <img src="img/four-combo.png" alt="Four Combo Img">
            </div>
        </section>

    <?php include 'footer.php' ?>
</body>

</html>