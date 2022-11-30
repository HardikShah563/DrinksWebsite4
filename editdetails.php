<?php include 'functions.php' ?>

<?php

if (isset($_POST['edit'])) {
    $editDetails = $_POST;
    $editDetails['uid'] = $_SESSION["uid"];
    $editDetails['fname'] = $_POST["fname"];
    $editDetails['lname'] = $_POST["lname"];
    $editDetails['email'] = $_POST["email"];
    $editDetails['password'] = $_POST["newpassword"];
    
    if(!edit_user($editDetails)) {
        $response = [
            'type' => 'error',
            'message' => 'Edit Failed'
        ];
    } else {
        $response = [
            'type' => 'success',
            'message' => 'Successfully Edited details'
        ];
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
            <h1>Edit Details</h1>
        </div>

        <section class="input-form">
            <?php if (isset($response)) { ?>
                <div class="message-box <?= $response['type'] ?>">
                    <p style="color: #fff; font-size: 16px;"><?= $response['message'] ?></p>
                </div>
            <?php } ?>

            <form action="?" method="post" class="checkout-form">
                <p>Note: If you do not wish to update any particular field, type the original ones</p>
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="email" name="email" placeholder="Email Address">
                <input type="password" name="password" placeholder="Old password">
                <input type="password" name="newpassword" placeholder="New password">
                <button type="submit" name="edit" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px; margin: 20px auto;">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
            </form>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>