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
      <div class="col-sm-12">
        <div class="box">
          <div class="box-body">
            <?php if($this->session->flashdata('hasil')){ ?>
            <div class="alert alert-info">
                <?php echo $this->session->flashdata('hasil'); ?>
            </div>
            <?php } ?>
            
            <div style="padding-bottom: 20px;">
                <a href="<?php echo base_url().'index.php/tiket/tambah/'; ?>" class="btn btn-info" role="button">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
            </div>
            <div class="table-responsive">
              <table id="datatable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 5%; text-align: center;">No</th>
                    <th style="width: 30%; text-align: center;">Id</th>
                    <th style="width: 20%; text-align: center;">Id_Airline</th>
                    <th style="width: 15%; text-align: center;">Tgl</th>
                    <th style="width: 15%; text-align: center;">Harga</th>
                    <th style="width: 15%; text-align: center;">Asal</th>
                    <th style="width: 15%; text-align: center;">Tujuan</th>
                    <th style="width: 15%; text-align: center;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(isset($dataproduk) and $dataproduk):$i=1; foreach($dataproduk as $row): ?>
                  <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->id_airline; ?></td>
                    <td><?php echo $row->tgl_berangkat; ?></td>
                    <td><?php echo $row->harga; ?></td>
                    <td><?php echo $row->asal; ?></td>
                    <td><?php echo $row->tujuan; ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a title="Ubah" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/produk/ubah/'.$row->id; ?>"><i class="fas fa-pencil-alt"></i></a>
                        <a title="Hapus" class="btn btn-sm btn-default" href="<?php echo base_url().'index.php/produk/hapus/'.$row->id; ?>"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php $i++; endforeach; endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

</body>
</html>
