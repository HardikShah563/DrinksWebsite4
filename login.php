<?php include 'functions.php' ?>

<?php

if (isset($_POST['login'])) {
  $data = $_POST;
  $user = login($data);
  if (!$user) {
    $response = [
      'type' => 'error',
      'message' => 'Login Failed!'
    ];
  } else {
    header("Location: explore.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head-links.php' ?>
    <title>Login | Drinksify</title>
</head>
<body>
    <!-- Everything inside the file will be contained inside the box to get that effect -->
    <div class="box login-page">
        <?php include 'navbar.php' ?>
        
        <section class="main-text login-text">
            <h1>Login</h1>
        </section>

        <section class="input-form">
            <?php if (isset($response)) { ?>
            <div class="message-box <?= $response['type'] ?>">
                <p><?= $response['message'] ?></p>
            </div>
            <?php } ?>
            <form action="?" method="post">
                <input type="email" name="email" id="email" placeholder="Email / Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit" name="login">Log In</button>
            </form>
            <p>Don't have an account?&nbsp;&nbsp;<a href="register.php">Register here</a></p>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>