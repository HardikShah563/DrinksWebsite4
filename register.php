<?php include 'functions.php' ?>

<?php

if (isset($_POST['register'])) {
  $data = $_POST;
  $user_exists = email_exists($data['email']);
  if ($user_exists) {
    $response = [
      'type' => 'error',
      'message' => 'Email is Already Taken!',
    ];
  } else {
    if ($data["password"] == $data["cpassword"]) {
      $data["type"] = 'user';
      $user = signup($data);
      if ($user) {
        $response = [
          'type' => 'success',
          'message' => 'User Registered Successfully! You can Log In now',
        ];
        login($data);
      } else {
        $response = [
          'type' => 'error',
          'message' => 'Some Error Occured!',
        ];
      }
    } else {
      $response = [
        'type' => 'error',
        'message' => 'Passwords should match!',
      ];
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head-links.php' ?>
    <title>Register | Drinksify</title>
</head>
<body>
    <div class="box login-page">
        <?php include 'navbar.php' ?>
        
        <section class="main-text login-text">
            <h1>Create Account</h1>
        </section>
        
        <section class="input-form">
            <?php if (isset($response)) { ?>
            <div class="message-box <?= $response['type'] ?>">
                <p><?= $response['message'] ?></p>
            </div>
            <?php } ?>
            <form action="?" method="post">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Create Password">
                <input type="password" name="cpassword" placeholder="Retype Password">
                <button type="submit" name="register"><a href="../php/index.php">Register</a></button>
            </form>
            <p>Already have an account?&nbsp;&nbsp;<a href="login.php">Login here</a></p>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>