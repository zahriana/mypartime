<?php
session_start();
if ( isset($_SESSION["username"]) ) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Registrasi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		
    <?php 
    include "navbar.php";
    require "action/functions.php";

    if( isset($_POST["register"]) ) {
        
        //cek data berhasil ditambahkan atau tidak
        if( registrasi ($_POST) > 0 ) {
            echo"
                <script>
                    alert('Registrasi berhasil! silahkan login :)');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }
    ?>
    <main>
    <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h3_hero.jpg">    
    <div class="container">
            <div class="row d-flex">
                <div class="col-lg-5 col-md-6 text-center align-center">
                    <div class="single-services section-tittle text-center mb-30">
                        <h2>Create Account</h2>
                    <form method="POST" action="">
                        <div>
                            <input type="text" name="nama" id="nama" placeholder="Nama lengkap"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama lengkap'" required oninvalid="this.setCustomValidity('masukkan nama lengkap!')" oninput="setCustomValidity('')"
                                    class="single-input-primary">
                        </div>
                        <div class="mt-10">
							<input type="email" name="email" id="email" placeholder="Email"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required required oninvalid="this.setCustomValidity('masukkan alamat email!')" oninput="setCustomValidity('')"
								class="single-input-primary">
						</div>
                        <div class="mt-10">
							<input type="text" name="username" id="username" placeholder="Username"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required oninvalid="this.setCustomValidity('Username tidak boleh kosong!')" oninput="setCustomValidity('')"
								class="single-input-primary">
						</div>
                        <div class="mt-10">
							<input type="password" name="password" id="password" placeholder="Password"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required required oninvalid="this.setCustomValidity('Password tidak boleh kosong!')" oninput="setCustomValidity('')"
								class="single-input-secondary">
						</div>
                        <div class="mt-10">
							<input type="password" name="password2" id="password2" placeholder="Konfirmasi password"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi password'" required required 
								class="single-input-secondary">
						</div>
                        <div class="mt-20">
                            <input type="submit" name="register" id="register" class="btn head-btn1" value="Register"/>
                        </div>
                    </form>
                    <div class="mt-30">
                    <p class="loginhere">
                        Sudah memiliki akun? <a href="#myModal" data-toggle="modal" class="genric-btn primary-border circle arrow">Login<span class="lnr lnr-arrow-right"></span></a>
                    </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php include "footer.php";?>