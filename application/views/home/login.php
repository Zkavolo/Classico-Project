<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>

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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets\css\global.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets\css\login.css">
</head>

<body>
    <div class="bg_content">

        <div class="container">
            <div class="row">

                <div class="col-6 bg-dark-blue">
                    <a href="<?php echo base_url() ?>main/index" id="previous-button">
                        &#8249; Kembali
                    </a>
                    <div class="col">
                        <img src="<?php echo base_url() ?>assets\img\img5.png" alt="image_5" id="image_5">
                    </div>
                </div>

                <div class="col">
                    <div class="form-login">
                        <h1 id="title-sect1">Masuk</h1>
                        <p id="p-sect1">Selamat Datang Kembali! Silahkan masuk untuk<br> melanjutkan.</p>

                        <form>
                            <div class="form-group">
                                <label class="lato-font" for="exampleInputEmail1">Nama Pengguna atau Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username/Email">
                            </div>
                            <div class="form-group">
                                <label class="lato-font" for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Simpan Kata Sandi ?</label>
                                </div>
                                <div class="form-forget-pass">
                                    <a href="#">Lupa Kata Sandi ?</a>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">MASUK</button>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <p>Belum Punya Akun? <span><a href="#">daftar</a></span></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>