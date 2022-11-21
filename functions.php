<?php 

$dbname = "drinksify";
$dbuser = "root";
$dbpass = "";
$dbhost = "localhost";

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!$db) {
    echo "Error connecting to database";
}
session_start();

function signup($data) {
    global $db;
    // $password = md5($data["password"]);
    $sql = "insert into users(name, phno, email, password) values(?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->blind_param("ssss", $data["name"], $data["phno"], $data["email"], $data["password"]);
    if($stmt->execute()) {
        return 1;
    }
    return 0;
}

function register($name, $phno, $email, $password) {
    global $db;
    // Hashing the password to md5 format
    $password = md5($password);
    // Prepare SQL Query
    $sql = "INSERT INTO `users` (`name`, `phno`, `email`, `password`) VALUES ('$name', '$phno', '$email', '$password')";
    // Push Query to database
    $check = mysqli_query($db, $sql);
    if(!$check)
        echo "Failure";
}

function emailCheck($email) {
    global $db;
    $sql = "select * from users where (email='$email');";
    $checkEmail = mysqli_query($db, $sql);
    if(mysqli_num_rows($checkEmail) > 0) {
        $row = mysqli_fetch_assoc($checkEmail);
        if($email == isset($row['email'])) {
            echo "email already there";
            return 1;
        }
        else {
            return 0;
        }
    }
}

function login($email, $password) {
    global $db;
    $hashedPassword = md5($password);
    $sql = "select * from users where (email='$email' and password='$hashedPassword')";
    $sql = "SELECT email, password FROM users WHERE email = '$email' and password = md5('$password')";
    $ifMatch = mysqli_query($db, $sql);
    if(mysqli_num_rows($ifMatch) > 0) {
        $row = mysqli_fetch_assoc($ifMatch);
        if($email == isset($row['email']) and $hashedPassword == isset($row['password'])) {
            return 1;
        }
        return 0;
    }
}

?>