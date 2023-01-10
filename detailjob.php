<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Detail</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <?php 
    include "navbar.php";
    require "action/functions.php";

    $id_lowongan = $_GET['GET_ID'];
    $lowongan = query ("SELECT lowongan.*, klien.* FROM lowongan 
        INNER JOIN klien ON lowongan.user_id = klien.user_id 
        WHERE id_lowongan = '$id_lowongan'");
    ?>
    
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Detail Pekerjaan</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <?php foreach($lowongan as $row) : ?>
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?= $row["judul"]; ?></h4>
                                    </a>
                                    <ul>
                                        <li><?= $row["nama"]; ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?= $row["lokasi"]; ?></li>
                                        <li>Rp.<?= $row["harga"]; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- job single End -->

                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Deskripsi Pekerjaan</h4>
                                </div>
                                <p><?= $row["deskripsi"]; ?></p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Skill yang dibutuhkan</h4>
                                </div>
                               <ul>
                                   <?php
                                   $skills = explode(",", $row["skill"]);
                                   
                                    for( $i=0; $i<count($skills); $i++) {?>
                                        <li>
                                        <?= "$skills[$i]"; ?> 
                                        </li>
                                    <?php 
                                    } 
                                    ?>
                               </ul>
                            </div>
                        </div>
                    </div>

                        <!-- Right Content -->
                        <div class="col-xl-4 col-lg-4">
                            <div class="post-details3  mb-50">
                                <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Rincian</h4>
                            </div>
                            <ul>
                                <li>Tanggal Posting : <span><?= tanggal($row["waktu_posting"]); ?></span></li>
                                <li>Lokasi : <span><?= $row["lokasi"]; ?></span></li>
                                <li>Tipe Kerja : <span><?= $row["tipe"]; ?></span></li>
                                <li>Bayaran :  <span>Rp.<?= $row["harga"]; ?></span></li>
                            </ul>
                            <div class="apply-btn2">
                                <a href="https://api.whatsapp.com/send/?phone=62<?=$row["no_tlp"];?>" class="btn">Lamar</a>
                            </div>
                        </div>
                            <div class="post-details4  mb-50">
                                <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Informasi Klien</h4>
                            </div>
                                <ul>
                                    <li>Nama: <span><?= $row["nama"]; ?></span></li>
                                    <li>Email: <span><?= $row["email"]; ?></span></li>
                                </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- job post company End -->

    </main>
    <?php include "footer.php";?>
