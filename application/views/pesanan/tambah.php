<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Reficul" />

	<title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>" media="screen,projection" />
    <link href="<?php echo base_url()."assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css"; ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()."assets/styleWelcome.css"; ?>" media="screen,projection" />
    <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'; ?>"></script>
</head>

<body>
<div class="headers">
            <center><h1><i class="fa fa-cloud" style="font-size: 18px;"></i>TravelOra</h1>
                <h5>"Mau Travel? Yakinin travel dolo, Pesan Tiket Kemudian"</h5></center>
        </div>
        <div class="nav-bar">
            <ul>
                <li><a href="<?php echo base_url() . 'index.php'; ?>">Home</a></li>
                <li><a href="<?php echo base_url() . 'index.php/tiket'; ?>">Cek Tiket</a></li>
                <li><a href="#">Cek Pesanan</a></li>
            </ul>
        </div>
<div class="container" style="padding-top: 50px;">
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div>
            <div>
                <h2>Form <?php echo $title;?></h2>
                <div class="clearfix"></div>
            </div>
            <div><br />
                <form action="<?php echo base_url()."index.php/tiket/tambah"; ?>" method="post" enctype="multipart/form-data">
                 <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Maskapai <span class="required">*</span></label>
                        <div class="col-md-4">
                            <!-- <input type="text" name="id_airline" required="required" class="form-control col-md-8" /> -->
                            <select name='airline' class="form-control col-md-8">
                               <option value="GA" >Garuda Indonesia </option>
                               <option value="SJ" >Sriwijaya Air</option>
                               <option value="ID" >Batik Air</option>                                
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">tanggal <span class="required">*</span></label>
                        <div class="col-md-4">
                            <input type="date" name="tgl" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">harga</label>
                        <div class="col-md-4">
                            <input type="number" name="harga" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">asal</label>
                        <div class="col-md-4">
                            <input type="text" name="asal" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">tujuan</label>
                        <div class="col-md-4">
                            <input type="text" name="tujuan" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <a href="<?php echo site_url('pesanan');?>" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
