<?php include 'functions.php' ?>

<?php

if (isset($_POST['editDetails'])) {
    $editDetails = $_POST;

        $editDetails['fname'] = $_POST["fname"];
        $editDetails['lname'] = $_POST["lname"];
        $editDetails['email'] = $_POST["email"];
        $editDetails['password'] = $_POST["newpassword"];
        $edit = edit_user($editDetails);
        
        if(!$edit) {
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
            <form action="?" method="post">
                <p>If you do not wish to update any particular field, type the original ones</p>
                <h1>Personal Details</h1>
                <div class="grouping">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                </div>
                <p>* This email will be used for all the communication</p>
                <input type="email" name="email" placeholder="Email" required>

                <h1>Change Password</h1>
                <div class="grouping">
                    <input type="password" name="password" placeholder="Old Password" required>
                    <input type="password" name="newpassword" placeholder="New password" required>
                </div>
                <button type="submit" name="editDetails">Edit Details</button>
            </form>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>