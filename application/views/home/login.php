<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets\css\Main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets\css\login.css">
</head>

<body>
    <div class="bg-content">

        <div class="container">
            <div class="row">
                <div class="column">
                    <div class="column">
                        <img src="<?php echo base_url() ?>assets\icon\back-icon.png" alt="back">
                    </div>
                    <div class="column">
                        <img src="<?php echo base_url() ?>assets\img\img5.png" alt="image_5">
                    </div>
                </div>
                <div class="column">
                      <h1 id="title-sect1">Masuk</h1>
                          <p id="p-sect1">Selamat Datang ! Silahkan masuk untuk dilanjutkan</p>
    
                      <form>
                        <div class="form-group">
                             <label for="exampleInputEmail1">Email address</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                             </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                             </div>
                            <div class="form-check">
                             <input type="checkbox" class="form-check-input" id="exampleCheck1">
                             <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                </div>
            </div>

    </div>
</body>

</html>
