<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Portal</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/Completed/assets/images/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<style>
  body {
    background-image: url("/img/bg.PNG")
  }
</style>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
            <a href="./Completed/index.html" type="submit" class="btn btn-success btn-block">Back to Home</a>
            
        </div>
        <br>
            <hr>

        <div class="col-md-8">

            <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="The Purpose and Importance of studying the History of the Prophets"></textarea>
                </div>
            </form>

            <?php for($i=0; $i < 1; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Mempelajari sejarah Nabi Muhammad SAW juga menjadi sangat penting dalam membangun pondasi keimanan yang kokoh. Dari kajian terhadap sejarah hidup dan perjalanan dakwah Nabi Muhammad SAW setiap muslim akan mengetahui bahwa aspek akidah dan tauihid adalah prioritas pertama dari dakwah Nabi SAW
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                Tentu saja dakwah Nabi bukan hanya urusan tauhid, tetapi tauhid menjadi pilar semua elemen kehidupan masyarakat yang dibangun oleh Nabi SAW. Dari sudut pandang ini, dapat disimpulkan bahwa mempelajari sejarah hidup Nabi SAW adalah salah satu cara yang efektif untuk menumbuhkan dan memperkuat keimanan dan komitmen keislaman.
            </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                Selain karena menunjang penguasaan terhadap ilmu-ilmu keislaman dan penguatan keimanan, mempelajari sejarah Nabi SAW juga penting sebab berkaitan dengan bagaimana seseorang menyampaikan dan mengajarkan Islam kepada orang lain. Perjalanan hidup Nabi SAW adalah gambar paling akurat dan rujukan paling tepat bagaimana Islam diajarkan dan disebarluaskan.
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                Pentingnya memahami Islam melalui sejarah Rasulullah Muhammad SWA,dan Nabi lain nya adalah sesuatu kajian menarik yang sangat mempesona dan menakjubkan. Umat Islam yang mempelajari sejarah hidup Nabi Muhammad shallallahu „alaihi wa sallam akan mudah memahami ajaran Islam secara sempurna dan mengenal sifat-sifat beliau dalam kesabaran menghadapi cobaan, keteguhan memegang prinsip-prinsip kebenaran, kemantapan hati dalam menghadapi goncangan dunia, serta mampu mengangkat nilai-nilai kemanusiaan yang begitu indah.
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                Manfaat dirasah (mempelajari) Siroh Nabawi. Mempelajari Siroh (sejarah hidup) Nabi Muhammad shallallahu 'alaihi wasallam berguna sebagai nutrisi bagi hati dan sumber keceriaan bagi jiwa serta penyejuk bagi mata. Bahkan hal itu merupakan bagian dari agama Allah Ta'ala dan ibadah untuk mendekatkan diri kepada-Nya.
                </div>
            </div>
            <?php } ?>
            
        </div>
    
    </div>
</div>


</body>
</html>