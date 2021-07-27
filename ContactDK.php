<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.css"> 
        <script src="jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="ContactDK.css">
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
            <h3 class="text-center"><u>Contact Us</u></h3><br>
            <form class="form-horizontal" method="post" action="hasilCDK.php" autocomplete="off">
            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1" >Nama :</label>
                <div class="txt">
                    <input type = "text" name="nama" class="form-control-inline col-sm-10" id="nama" placeholder="Masukkan Nama"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1 ttl">Tanggal Lahir :</label>
                <div class="txt">
                    <input type = "date" name="ttl" class="form-control-inline col-sm-10"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1 ko">Kota :</label>
                <div class="txt">
                    <input type="text" name="kota" class="form-control-inline col-sm-10" placeholder="Masukkan Kota"/>
                </div>
            </div>

            
            <div class="form-group row">
                <label class="col-sm-2 offset-md-1 control-label" for="jk">Jenis Kelamin :</label>
                <div class="form-control-inline">
                    <label class="radio-inline" ><input type="radio" id="jk" name="jk" value="Pria"> Pria</label>
                    <label class="radio-inline"><input type="radio" id="jk" name="jk" value="Wanita"> Wanita</label>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1 ko">Email :</label>
                <div class="txt">
                    <input type="email" name="email" class="form-control-inline col-sm-10" placeholder="Masukkan Email"/>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2 offset-md-1" for="Pendapat">Pendapat Anda :</label>
                    <select class="form-control-inline col-sm-8" id="pendapat" name="pendapat">
                        <option value='-'>--Pilihan Anda--</option>
                        <option value='Suka'>Suka</option>
                        <option value='Biasa Saja'>Biasa Saja</option>
                        <option value='Tidak Suka'>Tidak Suka</option>
                    </select>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2 offset-md-1" for="suka">Tempat yang disukai :</label>
                    <label class="checkbox-inline" ><input type='checkbox' name='suka1' value='Danau Kelimutu' id="suka"> Danau Kelimutu </label>
                    <label class="checkbox-inline" ><input type='checkbox' name='suka2' value='Danau Toba' id="suka"> Danau Toba </label>
                    <label class="checkbox-inline" ><input type='checkbox' name='suka3' value='Pantai Koka' id="suka"> Pantai Koka </label>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2 offset-md-1" for="tambahan">Tambahan :</label>
                <textarea class="form-control-inline col-sm-7" rows="3"  id="tambahan" name="tambahan" placeholder="Masukkan tambahan"></textarea>
             </div>

            <div class="for-group row">
                <div class="col-sm-2 offset-md-1 ">
                    <button type="submit" class="btn btn-primary sub">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div><br>
        </div>
        </form>
    </body>
<html>
        