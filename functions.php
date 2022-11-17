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
// function email_exist($email) {
//     global $db;
//     $sql = "select * from users where email = ?";
//     // $stmt = $db -> stmt_init();
//     $stmt->blind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if(mysqli_num_rows($result)) {
//         return 1;
//     }
//     return 0;
// }

?>