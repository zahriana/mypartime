<?php
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Joblist</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <?php 
    include "navbar.php";
    require "action/functions.php";
    
    ?>
    
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                    </div>
                                    <h4>Filter Jobs</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Job Category Listing start -->
                        <div class="job-category-listing mb-50">
                            <!-- single one -->
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Kategori</h4>
                               </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="select">
                                        <option value="">Semua Kategori</option>
                                        <option value="">Content Writer</option>
                                        <option value="">Desain</option>
                                        <option value="">Sales & Marketing</option>
                                        <option value="">Teknisi</option>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Jenis Partime</h4>
                                    </div>
                                    <label class="container">Remote
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Langsung di tempat 
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single three -->
                            <div class="single-listing">
                                <!-- select-Categories start -->
                                <div class="select-Categories pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Waktu Upload</h4>
                                    </div>
                                    <label class="container">Semua
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Hari ini
                                        <input type="checkbox" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">2 hari terakhir
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">3 hari terakhir
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">5 hari terakhir
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">10 hari terakhir
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                        </div>
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <span>39.782 Pekerjaan ditemukan</span>
                                            <!-- Select job items start -->
                                            <div class="select-job-items">
                                                <span>Urut berdasarkan</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">Nama</option>
                                                    <option value="">Terbaru</option>
                                                    <option value="">Terlama</option>
                                                </select>
                                            </div>
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <?php
                                //pagination
                                $batas = 5 ;
                                if(empty($_REQUEST['halaman']))
                                    $halaman = 1;
                                else 
                                    $halaman = $_REQUEST['halaman'];
                                
                                if(empty($halaman))
                                        {
                                            $posisi = 0;
                                            $halaman = 1;
                                        }
                                    else
                                        {
                                            $posisi = ($halaman-1)*$batas;
                                        }
                                
                                        $sql = "SELECT lowongan.*, nama FROM lowongan 
                                        INNER JOIN klien ON lowongan.user_id = klien.user_id  order by waktu_posting desc limit $posisi, $batas";
                                        $hasilselect = mysqli_query($conn, $sql);
                                ?>
                                <!-- single-job-content -->
                                <?php while($data = mysqli_fetch_array($hasilselect)) : ?>
                                <div class="single-job-items mb-20">
                                    <div class="job-items">
                                        <div class="job-tittle job-tittle2">
                                            <a href="detailjob.php?GET_ID=<?php echo $data['id_lowongan']?>">
                                                <h4><?= $data["judul"]; ?></h4>
                                            </a>
                                            <ul>
                                                <li><?= $data["nama"]; ?></li>
                                                <li><i class="fas fa-map-marker-alt"></i><?= $data["lokasi"]; ?></li>
                                                <li><i class="fas fa-solid fa-briefcase"></i><?= $data["tipe"]; ?></li>
                                                <li>Rp.<?= $data["harga"]; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                        <a href="detailjob.php?GET_ID=<?php echo $data['id_lowongan']?>">Detail</a>
                                        <span><?= postingDate($data["waktu_posting"]); ?></span>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <!-- single-job-content End -->
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    
                                    <?php
                                    /*---------------------------------------tes---------------------------*/
                                    
                                    $tampil2=mysqli_query($conn,"select lowongan.*, nama FROM lowongan 
                                    INNER JOIN klien ON lowongan.user_id = klien.user_id");
                                    $jmldata=mysqli_num_rows($tampil2);
                                    $jmlhalaman=ceil($jmldata/$batas);
                                    $file="joblist.php";
            
                                    //link ke halaman sebelumnya
                                    if($halaman > 1)
                                    {
                                        $previous=$halaman-1;
                                        echo "<li class='page-item'><a class='page-link' href='$file?halaman=1'><span>First</span></a></li>
                                        <li class='page-item'><a class='page-link' href='$file?halaman=$previous'><span class='ti-angle-left'></span></a></li> ";
                                    }
                                    else
                                    {
                                        echo "<li class='page-item'><a class='page-link' href='#'><span>First</span></a></li>
                                        <li class='page-item'><a class='page-link' href='#'><span class='ti-angle-left'></span></a></li> ";
                                    }
            
                                    //Tampilkan link halaman 1, 2, 3 ...
                                    for($i=1;$i<=$jmlhalaman;$i++)
                                    if($i != $halaman)
                                    {
                                        echo "<li class='page-item'><a class='page-link' href='$file?halaman=$i'>$i</a></li>";
                                    }
                                    else
                                    {
                                        echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                                    }
            
                                    //link ke halaman berikutnya (next)
                                    if($halaman<$jmlhalaman)
                                    {
                                        $next=$halaman+1;
                                        echo "<li class='page-item'><a class='page-link' href='$file?halaman=$next'><span class='ti-angle-right'></span></a></li>
                                        <li class='page-item'><a class='page-link' href='$file?halaman=$jmlhalaman'><span>Last</span></a></li>";
                                    }
                                    else
                                    {
                                        echo "<li class='page-item'><a class='page-link' href='#'><span class='ti-angle-right'></span></a></li>
                                        <li class='page-item'><a class='page-link' href='#'><span>Last</span></a></li>";
                                    }
            
                                    echo "<p>&nbsp;&nbsp;Total Lowongan : <b>$jmldata</b></p>";
                        /*---------------------------------------end tes---------------------------*/
                                    ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->  
    </main>
    <?php include "footer.php";?>
