 
<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title>USM | Portal</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./Completed/assets/images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
  
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p><a type="submit" class="btn btn-success  btn-md" name="Home"  href="index.php">Home</a> <br> <br>
        <br>
        <br>
        <img src="/img/bg_front.PNG" />
        <hr>
        <h4>Sign in to account</h4>
        <p>Don't have an account yet? <a href="register.php">Register here!</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-info btn-block" name="login" value="Login" />

        </form>
            
        </div>
        <div class="col-md-6">
            <img class="img img-responsive" src="img/connect.png"  alt="USM" height="900" width="800"/>

        </div>

    </div>
</div>


<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
<footer>
<div class="credit" align="center"> created by <span> <b>Universitas Saintek Muhammadiyah</b></span> | Copyright 2022 </div>
</body>
</html>