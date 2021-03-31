<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>

    <!--Stylesheet CSS-->
    <link rel="stylesheet" 
        href="<?php echo asset_url('login-form/'); ?>assets/css/style.css">

    <!--Ajax-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <!--Container-->
    <div class="container" id="container">

        <!--Form Daftar-->
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Buat Akun</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                </div>
                <span>atau gunakan email untuk mendaftar</span>
                <input type="text" name="nama" placeholder="Nama" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pwd" placeholder="Password" required="">
                <button>Daftar</button>
            </form>
        </div>

        <!--Form Masuk-->
        <div class="form-container sign-in-container">
            <form action="<?php echo base_url('admin/login_proses'); ?>" 
                method="post">
                <h1>Masuk</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google"></i></a>
                    <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                </div>
                <span>atau gunakan akun</span>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pwd" placeholder="Password" required="">
                <a href="#">lupa password?</a>
                <button>Masuk</button>
            </form>
        </div>

        <!--Overlay-->
        <div class="overlay-container">
            <div class="overlay">
                <!--Overlay Kiri-->
                <div class="overlay-panel overlay-left">
                    <h1>Selamat Datang</h1>
                    <p>Untuk tetap terhubung dengan kami, silakan masuk dengan info pribadi anda</p>
                    <button class="ghost" id="signIn">Masuk</button>
                </div>

                <!--Overlay Kanan-->
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Gengs!</h1>
                    <p>Masukkan info pribadi anda, dan gabung bersama kami</p>
                    <button class="ghost" id="signUp">Daftar</button>
                </div>
            </div>
        </div>
    </div>

</body>
<!--Javascript-->
<script src="<?php echo asset_url('login-form/'); ?>assets/js/main.js"></script>
</html>