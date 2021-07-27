<?php
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $kota = $_POST['kota'];
    $jenis = $_POST['jk'];
    $mail = $_POST['email'];
    $pend = $_POST['pendapat'];
    $mail = $_POST['email'];
    $pend = $_POST['pendapat'];
    $disukai = "";
    for ($i=1; $i<=3; $i++){
        $suka = $_POST['suka'.$i];
        if(!empty ($suka))
            $disukai .= $suka.", ";
    }
    $tambah = $_POST['tambahan'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Contact Us</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.css"> 
        <script src="jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="hasilCDK.css">
        <link rel="stylesheet" href="fontawesome/css/all.css"/>
    </head>
    <body>
            
        <div class="header text-left">
            <div class="row">
                <nav class="navbar col-lg-12 col-sm-8 col-sm-4 col-xs-4">
                    <h1 class="title"><a href="HomeDK.html">KEINDAHAN ALAM</a></h1>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="ArtikelDK.html">Artikel</a><li>
                        <li class="nav-item"><a class="nav-link" href="PhotoDK.html">Photo Gallery</a><li>
                        <li class="nav-item"><a class="nav-link" href="VideoDK.html">Video Gallery</a><li>
                        <li class="nav-item"><a class="nav-link" href="AboutDK.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="ContactDK.php">Contact Us</a><li>
                    </ul>
                </nav>
            </div>   
        </div>

        <div class="container">
            <div class="panel-group">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3 class="text-center">Hasil Contact Us</h3><br></div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Nama :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$nama?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Tanggal Lahir:</label>
                                <div class="col-sm-7 hasil">
                                    <?=$ttl?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Kota :</label>
                                <div class="col-sm-7 hasil">
                                    <?php echo $kota; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Jenis Kelamin :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$jenis?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Email :</label>
                                <div class="col-sm-7 hasil">
                                    <?php echo $mail; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Pendapat :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$pend?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Tempat yang disukai :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$disukai?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Tambahan :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$tambah?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
    </body>
<html>
        
