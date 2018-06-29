<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Reficul" />

	<title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>" media="screen,projection" />
    <link href="<?php echo base_url()."assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css"; ?>" rel="stylesheet" />
    <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'; ?>"></script>
</head>

<body>
<div class="jumbotron text-center">
  <h1>Aplikasi Web Service</h1>
  <p>Menggunakan REST</p>
</div>
<div class="container">
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
                        <label class="col-md-2">Nama <span class="required">*</span></label>
                        <div class="col-md-4">
                            <input type="text" name="nama" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Tipe</label>
                        <div class="col-md-4">
                            <input type="text" name="tipe" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Harga</label>
                        <div class="col-md-4">
                            <input type="number" name="harga" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <label class="col-md-2">Stok</label>
                        <div class="col-md-4">
                            <input type="number" name="stok" required="required" class="form-control col-md-8" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                            <a href="<?php echo site_url('produk');?>" class="btn btn-primary">Kembali</a>
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
