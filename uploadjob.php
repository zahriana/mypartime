<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Upload Lowongan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <?php 
    include "navbar.php";
    require "action/functions.php";

    if( isset($_POST["upload"]) ) {
        //cek data berhasil ditambahkan atau tidak
        if( tambah ($_POST) > 0 ) {
            echo"
                <script>
                    alert('Lowongan berhasil diupload!');
                    document.location.href = 'joblist.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Lowongan gagal diupload!');
                </script>
            ";
        }
    }
    ?>
    <main>
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle white-text text-center">
                    <h2>Upload Lowongan</h2>
                </div>
            </div>
        </div>
        <!-- Section Upload -->
        <div class="row d-flex justify-content-center">
           <div class="col-lg-8 col-md-6">
                <div class="single-process mb-30" style="background: #fff;">
                    <form method="POST" id="uploadjob-form" action="" style="padding: 30px;">
                    <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['user_id']?>">
                    <div class="mt-10 mb-30">
                            <h6>Judul pekerjaan</h6>
                            <input type="text" name="judul" id="judul" placeholder="contoh: Desain logo event"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'contoh: Desain logo event'" required
                                    class="form-control single-input-primary">
                        </div>
                        <div class="mt-10">
                        <h6>Kategori</h6>
                            <div class="default-select" id="default-select">
                                    <select name="kategori">
                                    <option>Pilih kategori</option>
                                    <option value="Content Writer">Content Writer</option>
                                    <option value="Desain">Desain</option>
                                    <option value="Sales & Marketing">Sales & Marketing</option>
                                    <option value="Teknisi">Teknisi</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mt-30">
                        <h6>Tipe kerja</h6>
                            <div class="default-select" id="default-select">
                                    <select name="tipe">
                                    <option>Pilih tempat</option>
                                    <option value="Remote">Remote</option>
                                    <option value="Langsung ditempat">Langsung ditempat</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mt-30">
                            <h6>Lokasi</h6>
							<input type="text" name="lokasi" id="lokasi" placeholder="contoh: Banda Aceh"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'contoh: Banda Aceh'" required
                                    class="form-control single-input-primary">
						</div>
                        <div class="mt-30">
                            <h6>Deskripsi pekerjaan</h6>
							<textarea class="form-control single-textarea" name="detail" id="detail" placeholder="contoh: HI, Saya ingin merekrut Anda untuk pekerjaan saya ini" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'contoh: HI, Saya ingin merekrut Anda untuk pekerjaan saya ini'" required></textarea>
						</div>
                        <div class="mt-30">
                            <h6>Skill yang dibutuhkan</h6>
                            <textarea class="form-control single-textarea" name="skill" id="skill" placeholder="pisahkan skill dengan tanda koma (contoh: desain canva, video editing, photoshop)" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'pisahkan skill dengan tanda koma (contoh: desain canva, video editing, photoshop)'" required></textarea>
							<!-- <input type="text" name="skill" id="skill" placeholder="Contoh: Desain canva"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contoh: Desain canva'" required
                                    class="form-control single-input-primary"> -->
						
                        <!-- <div id="skillnext"></div>
                        <div class="genric-btn info-border mt-30" onclick="skillFunction()">Tambah</div> -->
                        </div>
                        <div class="mt-30">
                            <h6>Berapa budget untuk pekerjaan ini?</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                </div>
                                <input type="text" name="harga" id="harga" aria-describedby="basic-addon1" placeholder="Masukkan perkiraan harga"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan perkiraan harga'" required
                                    class="form-control single-input-primary">
                            </div>
                        </div>
                        <div class="mt-30 ml-200">
                            <input type="submit" name="upload" id="upload" class="btn genric-btn primary f-right"  value="Upload"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>

    <!-- <script>
        const element = document.getElementById("skillnext");
        let index = 1;
        function skillFunction(){
            element.innerHTML += `
            <input type="text" name="skill-${index}" id="skill" placeholder="" onfocus="this.placeholder = ''"
            onblur="this.placeholder =" required class="form-control single-input-primary mt-30">
            `;
            index ++;
        };
    </script> -->

    <?php include "footer.php";?>