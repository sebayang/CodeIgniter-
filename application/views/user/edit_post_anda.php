<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php $this->load->view('layout/header.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Edit Ulasan
                    <small>Silhakan masukan ulasan Anda</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Edit Ulasan</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">

                    <?php if (!empty($this->session->flashdata('msg'))) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                            <?= $this->session->flashdata('msg'); ?>
                        </div>
                    <?php } ?>

                    <div class="box box-primary">
                        <div class="box-header with-border">
                        </div>
                        <div class="box-body">

                            <form class="" action="<?php echo base_url('c_ungah_ulasan/insert_jawaban'); ?>" method="post">
                                <div class="form-group">
                                    <label for="email">Nama Website:</label>
                                    <div class="row-fluid">
                                        <select class="form-control" data-show-subtext="true" data-live-search="true" name="nama_website" required>
                                            <option data-subtext="" value="">-Pilih Website-</option>
                                            <?php
                                            foreach ($website as $wst) :
                                                ?>
                                                <option data-subtext="<?php echo $wst->nama_website ?>" value="<?php echo $wst->nama_website ?>" <?= ($wst->nama_website == $jawaban->nama_website) ? 'selected' : ''; ?>><?php echo $wst->nama_website ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Bagaimana pendapat anda tentang design dari news site tersebut?</label>
                                    <input value="<?= $jawaban->jawaban1; ?>" type="text" class="form-control" id="jawaban1" placeholder="Masukan Jawaban Anda" name="jawaban1">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apakah anda mengenal newsite tersebut dan bagaimana menurut anda reputasinya?</label>
                                    <input value="<?= $jawaban->jawaban2; ?>" type="text" class="form-control" id="jawaban2" placeholder="Masukan Jawaban Anda" name="jawaban2">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apakah website tersebut mengandung iklan yang menggangu?</label>
                                    <input value="<?= $jawaban->jawaban3; ?>" type="text" class="form-control" id="jawaban3" placeholder="Masukan Jawaban Anda" name="jawaban3">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Bagaimana struktur penulisan pada artikel-artikel news site tersebut? Bagaimana organisasi dan struktur informasi pada news site tersebut?</label>
                                    <input value="<?= $jawaban->jawaban4; ?>" type="text" class="form-control" id="jawaban4" placeholder="Masukan Jawaban Anda" name="jawaban4">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apakah artikel-artikel pada news site tersebut fokus menyampaikan informasi?</label>
                                    <input value="<?= $jawaban->jawaban5; ?>" type="text" class="form-control" id="jawaban5" placeholder="Masukan Jawaban Anda" name="jawaban5">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apakah artikel-artikel pada news site tersebut bermanfaat?</label>
                                    <input value="<?= $jawaban->jawaban6; ?>" type="text" class="form-control" id="jawaban6" placeholder="Masukan Jawaban Anda" name="jawaban6">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apakah informasi yang disajikan menyimpang seperti click bait, tidak bersifat netral, dll?</label>
                                    <input value="<?= $jawaban->jawaban7; ?>" type="text" class="form-control" id="jawaban7" placeholder="Masukan Jawaban Anda" name="jawaban7">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apakah artikel-artikel pada website tersebut menyajikan sumber yang terpercaya atau hanya opini?</label>
                                    <input value="<?= $jawaban->jawaban8; ?>" type="text" class="form-control" id="jawaban8" placeholder="Masukan Jawaban Anda" name="jawaban8">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Bagaimana pengalaman anda dengan news site (yang dimaksud) sebelumnya?</label>
                                    <input value="<?= $jawaban->jawaban9; ?>" type="text" class="form-control" id="jawaban9" placeholder="Masukan Jawaban Anda" name="jawaban9">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Apakah anda nyaman membaca artikel artikel pada news site tersebut?</label>
                                    <input value="<?= $jawaban->jawaban10; ?>" type="text" class="form-control" id="jawaban10" placeholder="Masukan Jawaban Anda" name="jawaban10">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Berapakah nilai tingkat kepercayaan anda terhadap news site tersebut? </label>
                                    <input value="<?= $jawaban->nilai; ?>" type="text" class="form-control" id="nilai" placeholder="Masukan Nilai Tingkat Kepercayaan Anda Terhadap Newsite ini antara 1 sampai 100" name="nilai" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-send"></i> Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Modal Edit -->