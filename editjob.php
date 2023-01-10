<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Edit Lowongan</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <?php include "navbar.php";?>
    <main>
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle white-text text-center">
                    <h2>Edit Lowongan</h2>
                </div>
            </div>
        </div>
        <!-- Section Edit -->
        <div class="row d-flex justify-content-center">
           <div class="col-lg-8 col-md-6">
                <div class="single-process mb-30" style="background: #fff;">
                    <form method="POST" id="editjob-form" style="padding: 30px;">
                        <div class="mt-10 mb-30">
                            <h6>Judul pekerjaan</h6>
                            <input type="text" name="name_job" id="name_job" placeholder="Contoh: Desain logo event"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contoh: Desain logo event'" required
                                    class="form-control single-input-primary">
                        </div>
                        <div class="single-element-widget mt-10">
                        <h6>Kategori</h6>
                            <div class="default-select" id="default-select">
                                    <select>
                                    <option>Pilih kategori</option>
                                    <option value="1">Content Writer</option>
                                    <option value="1">Desain</option>
                                    <option value="1">Sales & Marketing</option>
                                    <option value="1">Teknisi</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mt-30">
                        <h6>Tipe kerja</h6>
                            <div class="default-select" id="default-select">
                                    <select>
                                    <option>Pilih tempat</option>
                                    <option value="1">Remote</option>
                                    <option value="1">Langsung ditempat</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mt-30">
                            <h6>Lokasi</h6>
							<input type="text" name="name_job" id="name_job" placeholder="Contoh: Banda Aceh"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contoh: Banda Aceh'" required
                                    class="form-control single-input-primary">
						</div>
                        <div class="mt-30">
                            <h6>Deskripsi pekerjaan</h6>
							<textarea class="form-control single-textarea" name="detail" id="detail" placeholder="e.g HI, Saya ingin merekrut Anda untuk pekerjaan saya ini" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'e.g HI, Saya ingin merekrut Anda untuk pekerjaan saya ini'" required></textarea>
						</div>
                        <div class="mt-30">
                            <h6>Skill yang dibutuhkan</h6>
							<textarea class="form-control single-textarea" name="detail" id="detail" placeholder="e.g -corel draw -canva -photoshop" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'e.g -corel draw -canva -photoshop'" required></textarea>
						</div>
                        <div class="mt-30">
                            <h6>Berapa budget untuk pekerjaan ini?</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                </div>
                                <input type="text" name="name_job" id="name_job" aria-describedby="basic-addon1" placeholder="Kosongkan jika harga menyesuaikan pekerja"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kosongkan jika harga menyesuaikan pekerja'" required
                                    class="form-control single-input-primary">
                            </div>
                        </div>
                        <div class="mt-30 ml-200">
                            <input type="submit" name="edit" id="edit" class="btn genric-btn info f-right"  value="Simpan"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
    <?php include "footer.php";?>