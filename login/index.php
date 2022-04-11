<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/favicon.png" rel="apple-touch-icon">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
    
                    <div class="p-5 ms-xl-4">
                        <span class="h1 fw-bold mb-0"><img src="../assets/img/Logo PANRB Default.png" class="img-fluid" alt="Logo"></span>
                    </div>
    
                    <div class="d-flex align-items-center px-5 ms-xl-4 pt-3 mt-2 pt-xl-0 mt-xl-n5">
    
                        <form action="" method="POST" style="width: 23rem;">
    
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in Page</h3>
    
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                <label class="form-label" for="email">Email address</label>
                            </div>
    
                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                <label class="form-label" for="password">Password</label>
                            </div>
    
                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="button" name="login" id="login">Login</button>
                            </div>
    
                        </form>
    
                    </div>
    
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                        alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
</body>
</html>