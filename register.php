<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Register</title>
    <link rel="stylesheet" href="/drinksify/style.css">
</head>

<body style="color: transparent;">
    <div class="box login-page">
        <?php include 'navbar.php' ?>


        <section class="main-text login-text">
            <h1>Register</h1>
        </section>

        <section class="input-form" id="input-form">
            <form action="?" method="post">
                <div class="submit-message" style="color: #0c770c; display: none;">
                    <p><i style="color: #0c770c;" class="fa-solid fa-circle-check"></i> Registration successful! You can
                        log in</p>
                </div>
                <div class="submit-message" style="color: #ff6d6d; display: none;">
                    <p><i style="color: #ff6d6d;" class="fa-solid fa-circle-xmark"></i> Registration failed! Try again
                    </p>
                </div>
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
        // $name = "";
        // $phno = 0;
        // $email = "";
        // $password = "";
        if ($name != "" or $phno != "" or $email != "" or $password != "") {
            $name = $_POST["name"];
            $phno = $_POST["phnumber"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirm = register($name, $phno, $email, $password);

            if ($confirm) {
                $response = [
                    'type' => 'success',
                    'message' => 'Registration Successful! You can log in',
                ];
            } else {
                $response = [
                    'type' => 'error',
                    'message' => 'Registration failed! Try again',
                ];
            }

            $name = "";
            $phno = 0;
            $email = "";
            $password = "";
        }

        ?>
    </div>
</body>

</html>