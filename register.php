<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Register</title>
    <link rel="stylesheet" href="/drinksify/style.css">
</head>

<body style="color: white;">
    <div class="box login-page">
        <?php include 'navbar.php' ?>


        <section class="main-text login-text">
            <h1>Register</h1>
        </section>

        <section class="input-form" id="input-form">
            <form action="?" method="post">
            <?php if (isset($response)) { ?>
                <div class="submit-message <?= $response['type'] ?>">
                    <p><?= $response['message'] ?></p>
                </div>
            <?php } ?>
            
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="number" name="phnumber" id="phnumber" placeholder="Phone Number" required>
                <input type="email" name="email" id="email" placeholder="Email / Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" name="register" onclick="submitForm()">Register</button>
            </form>

            <script>
                var inputForm = document.getElementById("input-form");
                var name = document.getElementById("name");
                var phno = document.getElementById("phnumber");
                var email = document.getElementById("email");
                var pass = document.getElementById("password");

                function submitForm() {
                    document.inputForm.reset();
                }
            </script>
            <p>Already have an account?&nbsp;&nbsp;<a href="/drinksify/login.php">Login here</a></p>
        </section>

        <?php

        $name = "NULL";
        $phno = 0;
        $email = "NULL";
        $password = "NULL";
        // $name = $_POST["name"];
        // $phno = $_POST["phnumber"];
        // $email = $_POST["email"];
        // $password = $_POST["password"];
        // $confirm = register($name, $phno, $email, $password);
        // unset($_POST);

        if ($_POST) {
            $name = $_POST["name"];
            $phno = $_POST["phnumber"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            if (emailCheck($email)) {
                $response = [
                    'type' => 'error',
                    'message' => 'Email already exists',
                ];
            }
            else {
                $confirm = register($name, $phno, $email, $password);
                if ($confirm) {
                    $response = [
                        'type' => 'success',
                        'message' => 'Registration Successful! You can log in',
                    ];
                } else {
                    $response = [
                        'type' => 'failure',
                        'message' => 'Registration failed! Try again',
                    ];
                }
            }

            unset($_POST);
            $_POST = array();

            $name = "";
            $phno = 0;
            $email = "";
            $password = "";
            $_POST['name'] = "NULL";
            $_POST['phnumber'] = "0";
            $_POST['email'] = "NULL";
            $_POST['password'] = "NULL";

            //Redirect to another page
            header('location: login.php');
        }

        ?>
    </div>
</body>

</html>