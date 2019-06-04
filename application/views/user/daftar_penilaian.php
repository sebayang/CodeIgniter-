<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <?php $this->load->view('layout/header.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Penilaian Website : <b><?= $website; ?></b>
                    <small>Berikut adalah beberapa ulasan dari user.</small>
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
                                        <th>Username</th>
                                        <th>Nilai</th>
                                        <th>Like</th>
                                        <th>Dislike</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no=0; foreach ($jawaban as $j) { $no++; ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $j->username; ?></td>
                                        <td><?= $j->nilai; ?></td>
                                        <td><?= ($j->like==null)? 0:$j->like; ?></td>
                                        <td><?= ($j->dislike==null)? 0:$j->dislike; ?></td>
                                        <td><a href="<?= base_url('c_penilaian/detail_penilaian/'.$j->username.'/'.$website); ?>"><button class="btn btn-primary"><i class="fa fa-fw fa-eye"></i> Lihat Detail</button></a></td>
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