<?php
// $date = time();
// echo date("Y-m-d H:i:s", $date);
// echo "$date";
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

    //$skill = $_POST["skill"];
    ?>
<main>
    <!-- <div class="container">
        <div class="row">
    <form action="" method="post">
    <div class="mt-30">
                            <h6>Skill yang dibutuhkan</h6>
							<input type="text" name="skill" id="skill" placeholder="Contoh: Desain canva"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contoh: Desain canva'" required
                                    class="form-control single-input-primary">
						
                        <div id="skillnext"></div>
                        <div class="genric-btn info-border mt-30" onclick="skillFunction()">Tambah</div>
                        <div class="mt-30 ml-200">
                            <input type="submit" name="upload" id="upload" class="btn genric-btn primary f-right"  value="Upload"/>
                        </div>
                    </div>
                    </form> 
</div>
</div>
                        <script>
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

    <?php
    // $user = mysqli_query ($conn, "SELECT * FROM user
    // WHERE username = 'mae'");
    // $row = mysqli_fetch_assoc($user);
    // var_dump($row);

    // $getid =  $row['user_id'];
    // var_dump($getid);
    // $klien = mysqli_query ($conn, "SELECT * FROM klien
    // WHERE user_id = $getid ");
    // $row2 = mysqli_fetch_assoc($klien);
    // $nama =  $row2['nama'];
    // var_dump($nama)
    if ( isset($_SESSION["username"]) && ($_SESSION["user_akses"] == "klien")){
        echo $_SESSION["nama"];
        echo ($_SESSION["user_id"]);
}
    ?>
    </main>
    <?php include "footer.php";?>