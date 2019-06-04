<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <?php $this->load->view('layout/header.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Detail Penilaian
                    <small>Detail ulasan user.</small>
                </h1>
                <hr style="border-top: 1px solid #ced2d0;">

                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Detail Penilaian</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">

                <div class="row">

                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Nama Website</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <h1 style="font-size: 3em;font-weight: bold;color: #3c8dbc;"><?= $jawaban->nama_website; ?></h1>
                                <hr>
                                <span class="label bg-primary"> <i class="fa fa-fw fa-user"></i> <?= $jawaban->username; ?> </span> | <small class="label bg-green"> <i class="fa fa-fw fa-clock-o"></i> <?= $jawaban->timestamp; ?> </small>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-header with-border bg-primary text-white">
                                <h3 class="box-title" style="color:white;">Nilai</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body text-center bg-primary text-white" style="min-height: 155px;">
                                <h3 class="my-2" style="font-size: 5em;font-weight: bold;"><?= $jawaban->nilai; ?></h3>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div><!-- end row-->



                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ulasan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#satu" aria-expanded="false" class="collapsed">
                                            Bagaimana pendapat anda tentang design dari news site tersebut?
                                        </a>
                                    </h4>
                                </div>
                                <div id="satu" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                        <?= $jawaban->jawaban1; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#dua" class="collapsed" aria-expanded="false">
                                            Apakah anda mengenal newsite tersebut dan bagaimana menurut anda reputasinya?
                                        </a>
                                    </h4>
                                </div>
                                <div id="dua" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban2; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#tiga" class="collapsed" aria-expanded="false">
                                            Apakah website tersebut mengandung iklan yang menggangu?
                                        </a>
                                    </h4>
                                </div>
                                <div id="tiga" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban3; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#empat" class="collapsed" aria-expanded="false">
                                            Bagaimana struktur penulisan pada artikel-artikel news site tersebut? Bagaimana organisasi dan struktur informasi pada news site tersebut?
                                        </a>
                                    </h4>
                                </div>
                                <div id="empat" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban4; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#lima" class="collapsed" aria-expanded="false">
                                            Apakah artikel-artikel pada news site tersebut fokus menyampaikan informasi?
                                        </a>
                                    </h4>
                                </div>
                                <div id="lima" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban5; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#enam" class="collapsed" aria-expanded="false">
                                            Apakah artikel-artikel pada news site tersebut bermanfaat?
                                        </a>
                                    </h4>
                                </div>
                                <div id="enam" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban6; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#tujuh" class="collapsed" aria-expanded="false">
                                            Apakah informasi yang disajikan menyimpang seperti click bait, tidak bersifat netral, dll?
                                        </a>
                                    </h4>
                                </div>
                                <div id="tujuh" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban7; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#delapan" class="collapsed" aria-expanded="false">
                                            Apakah artikel-artikel pada website tersebut menyajikan sumber yang terpercaya atau hanya opini?
                                        </a>
                                    </h4>
                                </div>
                                <div id="delapan" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban8; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sembilan" class="collapsed" aria-expanded="false">
                                            Bagaimana pengalaman anda dengan news site (yang dimaksud) sebelumnya?
                                        </a>
                                    </h4>
                                </div>
                                <div id="sembilan" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban9; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel box box-default">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#sepuluh" class="collapsed" aria-expanded="false">
                                            Apakah anda nyaman membaca artikel artikel pada news site tersebut?
                                        </a>
                                    </h4>
                                </div>
                                <div id="sepuluh" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                    <div class="box-body">
                                    <?= $jawaban->jawaban10; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>


                <div class="box box-primary">
                    <div class="box-body">
                        Bagaimana menurutmu tentang ulasan ini : <span class="h3"><a href="<?= base_url('c_penilaian/thumbs_up/' . $jawaban->id . '/' . $jawaban->nama_website . '/' . $jawaban->username); ?>"><i class="<?= ($status_like == 1) ? 'fa fa-fw fa-thumbs-up' : 'fa fa-fw fa-thumbs-o-up' ?>"></i></a> | <a href="<?= base_url('c_penilaian/thumbs_down/' . $jawaban->id . '/' . $jawaban->nama_website . '/' . $jawaban->username); ?>"><i class="<?= (($status_like != null) and $status_like == 0) ? 'fa fa-fw fa-thumbs-down' : 'fa fa-fw fa-thumbs-o-down' ?>"></i></a><span>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


                <!-- <h3>Komentar :</h3> -->
                <!-- <div class="box box-default">
                    <div class="box-body">
                        <form method="post" action="<?= base_url('c_penilaian/insert_comment'); ?>">
                            <input type="hidden" value="<?= $jawaban->id; ?>" name="id">
                            <textarea name="comment" class="form-control" rows="3" placeholder="Masukan Komentar Anda" required></textarea>
                            <hr>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-send"></i> Kirim</button>
                        </form>
                    </div>
                </div> -->

                <div class="box box-warning direct-chat direct-chat-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Komentar</h3>
                    </div>
                    <div class="box-body">
                        <div class="direct-chat-messages">

                            <?php foreach ($komentar as $k) { ?>
                                <div class="direct-chat-msg <?= ($k->username == $this->session->userdata('username')) ? 'right' : ''; ?>">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-left"><?= $k->username; ?></span>
                                        <span class="direct-chat-timestamp pull-right"><?= $k->timestamp; ?></span>
                                    </div>
                                    <!-- /.direct-chat-info -->
                                    <img class="direct-chat-img" src="<?= base_url('assets/user.png'); ?>" alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        <?= $k->komentar; ?>
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                            <?php } ?>


                        </div>
                    </div>
                    <div class="box-footer">
                        <form method="post" action="<?= base_url('c_penilaian/insert_comment'); ?>">
                            <input type="hidden" value="<?= $jawaban->id; ?>" name="id">
                            <div class="input-group">
                                <input type="text" name="comment" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-warning btn-flat">Send</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>



            </section>
            <!-- /.content -->
        </div>

        <!-- Modal Edit -->