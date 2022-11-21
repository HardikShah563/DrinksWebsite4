<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Login</title>
</head>
<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box login-page">
    <?php include 'navbar.php' ?>
        
        <section class="main-text login-text">
            <h1>Login</h1>
        </section> 

        <section class="input-form">
        <form action="?" method="post">
            <?php if (isset($response)) { ?>
                <div class="submit-message <?= $response['type'] ?>">
                    <p><?= $response['message'] ?></p>
                </div>
            <?php } ?>
                <input type="email" name="email" id="email" placeholder="Email / Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" name="login" onclick="submitForm()">Log In</button>
            </form>

            <script>
                var inputForm = document.getElementById("input-form");
                var email = document.getElementById("email");
                var pass = document.getElementById("password");

                function submitForm() {
                    document.inputForm.reset();
                }
            </script>

            <p>Don't have an account?&nbsp;&nbsp;<a href="/drinksify/register.php">Register here</a></p>
        </section>
        <div style="color: white;">
        <?php

        $email = "NULL";
        $password = "NULL";

        if ($_POST) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            echo $email . "    " . $password . "\n";

            if(login($email, $password)) {
                echo "Login Successful! ";
                header('location: explore.php');
            }
            else {
                echo "Login failed! ";
            }

            unset($_POST);
            $_POST = array();

            $email = "";
            $password = "";
            $_POST['email'] = "NULL";
            $_POST['password'] = "NULL";

            //Redirect to another page
            
        }

        ?>
        </div>

        
    </div>
</body>

</html>