<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Profil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <?php 
    include "navbar.php";
    require "action/functions.php";
    
    $id = $_SESSION['user_id'];
    $lowongan = query ("SELECT * FROM lowongan
        WHERE user_id = '$id' ");

    $klien = query ("SELECT * FROM klien
        WHERE user_id = '$id' ");

    if( isset($_POST["edit_profil"]) ) {
            
        //cek data berhasil ditambahkan atau tidak
        if( edit_profil($_POST) > 0 ) {
            echo"
                <script>
                    alert('Profil berhasil diperbaharui');
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }
    ?>
    <main>
    <!-- Profil Area Start -->
    <div class="our-services">
            <div class="container">
                <div class="row d-flex justify-content-left mt-50">
                    <div class="col-lg-5 col-md-6">
                        <div class="single-services text-center mb-30">
                        <h3 class="mb-20">Profile</h3>
                            <center><img src="assets/img/icon/profil.png" width="150px"></center>
                            <?php foreach($klien as $row) : ?>
                            <form method="POST" id="uploadjob-form" action="" style="padding: 30px;">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Nama lengkap</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="nama" class="single-input-primary" placeholder="Nama lengkap" value="<?= $row["nama"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="email" class="single-input-primary" placeholder="Email" value="<?= $row["email"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Username</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="username" class="single-input-primary" placeholder="Username" value="<?= $row["username"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">No. telepon</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" name="no_tlp" class="single-input-primary" placeholder="Nomor telepon" value="<?= $row["no_tlp"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Alamat
                                        </label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <textarea name="alamat" class="single-input-primary" rows="3" placeholder="Alamat"><?= $row["alamat"]; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Password</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="password" name="password" class="single-input-primary" placeholder="Password baru">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Konfirmasi</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="password" name="password2" class="single-input-primary" placeholder="Konfirmasi password">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3 mt-30">
                                        <button type="reset" class="genric-btn primary-border">Reset</button>
                                        <button type="submit" name="edit_profil" id="edit_profil" class="genric-btn info">Edit</button>
                                        </div>
                                    </div>
                            </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- single-job-content -->
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="single-job-items mb-20">
                                <div class="job-items">
                                    <div class="section-tittle text-center">
                                        <h5>Riwayat Posting Lowongan</h5>
                                    </div>
                                </div>
                            </div>
                            <?php foreach($lowongan as $row) : ?>
                            <div class="single-job-items mb-20">
                                <div class="job-items">
                                    <div class="job-tittle job-tittle2">
                                        <a href="detailjob.php?GET_ID=<?= $row['id_lowongan']?>">
                                            <h4><?= $row["judul"]; ?></h4>
                                            </a>
                                            <ul>
                                            <li><?= $row["kategori"]; ?></li>
                                            <li><i class="fas fa-map-marker-alt"></i><?= $row["lokasi"]; ?></li>
                                            <li><i class="fas fa-solid fa-briefcase"></i><?= $row["tipe"]; ?></li>
                                            <li>Rp.<?= $row["harga"]; ?></li>
                                            <li></li>
                                            </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right mt-20">
                                <a href="action/hapusjob.php?GET_ID=<?php echo $row['id_lowongan']?>" class="genric-btn danger circle arrow medium">Hapus</a>
                                <span><?= postingDate($row["waktu_posting"]); ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- single-job-content End -->
            </div>
    </div>
    </main>
    <?php include "footer.php";?>