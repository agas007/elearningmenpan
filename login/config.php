<?php 
 
$server = "127.0.0.1:3306";
$user = "u748553090_agastya";
$pass = "BIROsdmu!2020";
$database = "u748553090_elearning";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>