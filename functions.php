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
    $password = md5($data["password"]);
    $sql = "insert into users(name, phno, email, password) values(?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->blind_param("sssss", $data["name"], $data["phno"], $data["email"], $password);
    if($stmt->execute()) {
        return 1;
    }
    return 0;
}
// function email_exist($email) {
//     global $db;
//     $sql = "select * from users where email = ?";
//     $stmt = $db -> stmt_init();
//     $stmt->blind_param("s", $email);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     if(mysqli_num_rows($result)) {
//         return 1;
//     }
//     return 0;
// }

?>