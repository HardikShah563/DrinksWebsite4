<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Register</title>
    <link rel="stylesheet" href="/drinksify/style.css">
</head>
<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box login-page">
        <?php include 'navbar.php' ?>
        
        <?php 

        if(isset($_POST['register'])) {
            $data = $_POST;
            $user_exist = email_exist($data['email']);
            if($user_exist) {
                $response = [
                    'type' => 'error',
                    'message' => 'This email address already exist!',
                ];
            }
            else {
                $user = signup($data);
                if($user) {
                    $response = [
                        'type' => 'success',
                        'message' => 'Registration Successful! You can log in',
                    ];
                }
                else {
                    $response = [
                        'type' => 'error',
                        'message' => 'Registration failed! Try again',
                    ];
                }
            }
        }
        
        ?>

        <section class="main-text login-text">
            <h1>Register</h1>
        </section>
        
        <section class="input-form">
            <form action="?" method="post">
                <div class="submit-message" style="color: #0c770c; display: none;">
                    <p><i style="color: #0c770c;" class="fa-solid fa-circle-check"></i> Registration successful! You can log in</p>
                </div>
                <div class="submit-message" style="color: #ff6d6d; display: none;">
                    <p><i style="color: #ff6d6d;" class="fa-solid fa-circle-xmark"></i> Registration failed! Try again</p>
                </div>
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="number" name="phnumber" id="phnumber" placeholder="Phone Number" required>
                <input type="email" name="email" id="email" placeholder="Email / Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" name="register">Register</button>
            </form>
            <p>Already have an account?&nbsp;&nbsp;<a href="/drinksify/login.php">Login here</a></p>
        </section>
    </div>
</body>

</html>