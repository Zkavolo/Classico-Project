<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- my Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- my Css -->
    <!-- <link rel="stylesheet" href="assets\css\Main.css"> -->
    <!-- <link rel="stylesheet" href="assets\css\landing_page.css"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets\css\Main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets\css\landing_page.css">

    <title>Classico</title>
</head>

<body>
    <div class="bg_content">

        <!-- navbar -->
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="#">Classico</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end of navbar -->

        <!-- section 1 -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 id="title-sect1">Segera bergabung dengan kami dan temukan passion mu!</h1>
                    <p id="p-sect1">Memberikan ruang belajar online untuk menciptakan interaksi yang
                        baik dan menyenangkan bagi para mentor dan peserta kelas, serta memberikan
                        kesempatan bagi siapapun untuk menjadi mentor terbaik ditiap kelas
                        tanpa ada batasan apapun dengan fasilitas terbaik yang kami tawarkan.</p>
                </div>
                <div class="col">
                    <div class="img-wrapper-center">
                        <!-- <img src="assets\img\classicoProject.png" id="img1-sect1" alt="classico"> -->
                        <img src="<?php echo base_url('assets\img\classicoProject.png'); ?>" alt="img1" id="img1-sect1">
                    </div>
                </div>
            </div>
            <button>Daftar Sekarang</button>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>