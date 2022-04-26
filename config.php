<?php 

// database web
$server = "127.0.0.1:3306";
$user = "u748553090_agastya";
$pass = "BIROsdmu!2020";
$database = "u748553090_elearning";

// database local
// $server = "localhost";
// $user = "root";
// $pass = "";
// $database = "elearning";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $repassword = mysqli_real_escape_string($conn, $data["repassword"]);
    $email = $data["email"];
    $nama = $data["name"];

    if ($password !== $repassword) {
        echo "<script>
        alert('Password tidak sesuai!');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $register = "INSERT INTO users
                    VALUES
                (NULL, '$username', '$email', '$password', '$nama')";

    mysqli_query($conn, $register);

    return mysqli_affected_rows($conn);

}

?>