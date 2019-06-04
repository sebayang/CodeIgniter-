<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <?php $this->load->view('layout/header.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Hasil Penilaian
                    <small>Rata-rata dari penilaian seluruh user</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Hasil Penilaian</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <div class="box">
                        <div class="box-body">                            
                            <table id="table_dosen" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Website</th>
                                        <th>Nilai</th>
                                        <th>Total</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no=0; foreach ($website as $w) { $no++; ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $w->nama_website; ?></td>
                                        <td><?= $w->nilai; ?></td>
                                        <td><?= $w->total; ?></td>
                                        <td><?= $w->jumlah; ?></td>
                                        <td><a href="<?= base_url('c_penilaian/daftar_penilaian/'.$w->nama_website); ?>"><button class="btn btn-primary"><i class="fa fa-fw fa-eye"></i> Lihat Ulasan</button></td>
                                    </tr>
                                <?php } ?>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Modal Edit -->