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

        <div class="submit-message">
            <p><i class="fa-solid fa-circle-check"></i> Login Successful</p>
        </div>

        <section class="input-form">
            <form>
                <input type="email" name="email" id="email" placeholder="Email / Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <button>Login</button>
            </form>
            <p>Don't have an account?&nbsp;&nbsp;<a href="/drinksify/register.php">Register here</a></p>
        </section>
    </div>
</body>

</html>