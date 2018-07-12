<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" />
        <meta name="author" content="Reficul" />

        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url() . "assets/bootstrap/css/bootstrap.min.css"; ?>" media="screen,projection" />
        <link href="<?php echo base_url() . "assets/fontawesome/web-fonts-with-css/css/fontawesome-all.css"; ?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo base_url()."assets/styleWelcome.css"; ?>" media="screen,projection" />
        <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js'; ?>"></script>
        
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
                <li><a href="<?php echo base_url() . 'index.php/pesanan'; ?>">Cek Pesanan</a></li>
            </ul>
        </div>
        <div class="container" style="padding-top: 50px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box">
                        <div class="box-body">
                            <?php if ($this->session->flashdata('hasil')) { ?>
                                <div class="alert alert-info">
                                    <?php echo $this->session->flashdata('hasil'); ?>
                                </div>
                            <?php } ?>

                            <div style="padding-bottom: 20px;">
                                <a href="<?php echo base_url() . 'index.php/tiket/tambah/'; ?>" class="btn btn-info" role="button">
                                    <i class="fa fa-plus"></i> Tambah Data
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%; text-align: center;">No</th>
                                            <th style="width: 30%; text-align: center;">Kode Tiket</th>
                                            <th style="width: 20%; text-align: center;">Id_Airline</th>
                                            <th style="width: 15%; text-align: center;">Tgl</th>
                                            <th style="width: 15%; text-align: center;">Harga</th>
                                            <th style="width: 15%; text-align: center;">Asal</th>
                                            <th style="width: 15%; text-align: center;">Tujuan</th>
                                            <th style="width: 15%; text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($dataproduk) and $dataproduk):$i = 1;
                                            foreach ($dataproduk as $row): ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $i; ?></td>
                                                    <td><?php echo $row->kode_tiket; ?></td>
                                                    <td><?php echo $row->id_airline; ?></td>
                                                    <td><?php echo $row->tgl_berangkat; ?></td>
                                                    <td><?php echo $row->harga; ?></td>
                                                    <td><?php echo $row->asal; ?></td>
                                                    <td><?php echo $row->tujuan; ?></td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a title="Pesan" class="btn btn-sm btn-default" href="<?php echo base_url() . 'index.php/tiket/pesan/' . $row->kode_tiket; ?>"><i class="fas fa-credit-card"></i></a>
                                                            <a title="Ubah" class="btn btn-sm btn-default" href="<?php echo base_url() . 'index.php/tiket/ubah/' . $row->kode_tiket; ?>"><i class="fas fa-pencil-alt"></i></a>
                                                            <a title="Hapus" class="btn btn-sm btn-default" href="<?php echo base_url() . 'index.php/tiket/hapus/' . $row->kode_tiket; ?>"><i class="fas fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
        <?php $i++;
    endforeach;
endif; ?>
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
