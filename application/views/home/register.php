<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
                      <h1 id="title-sect1">Daftar</h1>
                          <p id="p-sect1">Selamat Datang. Ayo buat akunmu! Sudah punya akun?<a href="<?php echo base_url()?>main/login">Masuk</a></p>
                                <?php echo form_open('users/register'); ?>
                        <div class="form-group">
                             <label for="namalengkap">Nama Lengkap</label>
                             <input type="text" class="form-control" name="namalengkap" placeholder="">
                                 <span style="color:#EA1717;"><?php echo form_error('namalengkap'); ?></span>
                             </div>
                                <div class="form-group">
                                <label for="namapengguna">Nama Pengguna</label>
                                  <input type="text" class="form-control" name="namapengguna" placeholder="">
                                  <span style="color:#EA1717;"><?php echo form_error('namapengguna'); ?></span>
                             </div>
                             <div class="form-group">
                                <label for="email">Email</label>
                                  <input type="email" class="form-control" name="email" placeholder="">
                                  <span style="color:#EA1717;"><?php echo form_error('email'); ?></span>
                             </div>
                             <div class="form-group">
                                <label for="status">Status</label>
                                  <input type="text" class="form-control" name="status" placeholder="">
                             </div>
                             <div class="form-group">
                                <label for="nomorhandphone">Nomor Handphone</label>
                                  <input type="number" class="form-control" name="nomorhandphone" placeholder="">
                                  <span style="color:#EA1717;"><?php echo form_error('nomorhandphone'); ?></span>
                             </div>
                             <div class="form-group">
                                <label for="katasandi">Kata Sandi</label>
                                  <input type="text" class="form-control" name="katasandi" placeholder="">
                                  <span style="color:#EA1717;"><?php echo form_error('katasandi'); ?></span>
                             </div>
                             <div class="form-group">
                                <label for="katasandi">Konfirmasi Kata Sandi</label>
                                  <input type="text" class="form-control" name="konfirmasi_kata_sandi" placeholder="">
                                  <span style="color:#EA1717;"><?php echo form_error('konfirmasi_kata_sandi'); ?></span>
                             </div>
                            <div class="form-check">
                             <input type="checkbox" class="form-check-input" name="check">
                             <label class="form-check-label" for="check">Saya menyetujui aturan pakai yang berlaku</label>
                             <span style="color:#EA1717;"><?php echo form_error('check'); ?></span>
                        </div>
                            <button type="submit" class="btn btn-primary" value="submit">DAFTAR</button>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="column">
                        <img src="<?php echo base_url() ?>assets\img\img6.png" alt="image_6">
                    </div>
                </div>
            </div>

    </div>
</body>

</html>
