<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head-links.php' ?>
    <title>Drinksify | Register</title>
</head>
<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box login-page">
    <?php include 'navbar.php' ?>
        
        <section class="main-text login-text">
            <h1>Register</h1>
        </section>
        <div class="submit-message">
            <p><i class="fa-solid fa-circle-check"></i> New Account created successfully</p>
        </div>
        
        <section class="input-form">
            <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="number" name="phnumber" id="phnumber" placeholder="Phone Number">
                <input type="email" name="email" id="email" placeholder="Email / Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <button><a href="../php/index.php">Register</a></button>
            </form>
            <p>Already have an account?&nbsp;&nbsp;<a href="/drinksify/login.php">Login here</a></p>
        </section>
    </div>
</body>

</html>