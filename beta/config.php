<?php 

// database web
$server = "localhost";
$user = "admin";
$pass = "normal-sugar";
$database = "elearningbeta";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
// function untuk register
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $repassword = mysqli_real_escape_string($conn, $data["repassword"]);
    $email = $data["email"];
    $nama = $data["name"];

    // konfirmasi password saat registrasi
    if ($password !== $repassword) {
        echo "<script>
        alert('Password tidak sesuai!');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // input data registrasi ke database
    $register = "INSERT INTO users
                    VALUES
                (NULL, '$username', '$email', '$password', '$nama')";

    mysqli_query($conn, $register);

    return mysqli_affected_rows($conn);

}

?>