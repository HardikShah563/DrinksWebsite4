<?php include 'functions.php' ?>

<?php

session_start();

empty_cart();

unset($_SESSION["u_id"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["email"]);
unset($_SESSION["type"]);

header("Location: index.php");
