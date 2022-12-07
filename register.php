<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>


<DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title>Register | Portal</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="./Completed/assets/images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        
        <p><a type="back" class="btn btn-success btn-md" name="Home"  href="index.php">Back</a> <br> <br>
        <!-- <p>&larr; <a href="index.php">Back</a> -->
        <br>
        <br>
        <img src="/img/bg_front.PNG" />
        <hr>
        <p>Already have an account? <a href="login.php">Sign in here</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Full name</label>
                <input class="form-control" type="text" name="name" placeholder="your name" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Address Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            
            <input type="submit" class="btn btn-primary btn-block" name="register" value="Register" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/connect.png"  alt="USM" height="1100" width="800"/>
        </div>

    </div>
</div>
<br> <br> <br> <br> 
<footer>
<div class="credit" align="center"> created by <span> <b>Universitas Saintek Muhammadiyah</b></span> | Copyright 2022 </div>
</footer>
</body>
</html>