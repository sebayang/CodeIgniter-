<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('c_user')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Crowdsourcing</b>.com</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/Admin/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $this->session->userdata('nama')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/Admin/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                <p>
                  <?php
                  $text = $this->session->userdata('username')." - ".$this->session->userdata('type');
                  echo $text;
                  ?>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('c_user/keluar');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url('assets/Admin/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $this->session->userdata('nama') ;?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>MENU</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li ><a href="<?php echo base_url('c_post_anda');?>"><i class="fa fa-circle-o"></i> Post Anda</a></li>
              <li><a href="<?php echo base_url('c_user');?>"><i class="fa fa-circle-o"></i>  Hasil Penilaian </a></li>
              <li class="active"><a href="<?php echo base_url('c_ungah_ulasan');?>"><i class="fa fa-circle-o"></i>  Ungah Ulasan   </a></li>
            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Ulasan</h2>
<div class="container">

  <form class="form-horizontal" action="<?php echo base_url('c_ungah_ulasan/insert_jawaban'); ?>" method="post">
    <div class="form-group">
      <label for="email">Nama Website:</label>
          <div class="row-fluid">
            <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="nim" required>
              <option data-subtext="">Pilih Website</option>
              <?php
              foreach ($website as $wst):
              ?>
              <option value="<?php echo $wst->nama_website?>"><?php echo $wst->nama_website?></option>
              <?php endforeach; ?>
            </select>
          </div>
    </div>
    <div class="form-group">
      <label  for="pwd">Bagaimana pendapat anda tentang design dari news site tersebut?</label>
        <input type="text" class="form-control" id="jawaban1" placeholder="Masukan Jawaban Anda" name="jawaban1">
    </div>
    <div class="form-group">
      <label  for="pwd">Apakah anda mengenal newsite tersebut dan bagaimana menurut anda reputasinya?</label>
        <input type="text" class="form-control" id="jawaban2" placeholder="Masukan Jawaban Anda" name="jawaban2">
    </div>
    <div class="form-group">
      <label  for="pwd">Apakah website tersebut mengandung iklan yang menggangu?</label>
        <input type="text" class="form-control" id="jawaban3" placeholder="Masukan Jawaban Anda" name="jawaban3">
    </div>
    <div class="form-group">
      <label  for="pwd">Bagaimana struktur penulisan pada artikel-artikel news site tersebut? Bagaimana organisasi dan struktur informasi pada news site tersebut?</label>
        <input type="text" class="form-control" id="jawaban4" placeholder="Masukan Jawaban Anda" name="jawaban4">
    </div>
    <div class="form-group">
      <label  for="pwd">Apakah artikel-artikel pada news site tersebut fokus menyampaikan informasi?</label>
        <input type="text" class="form-control" id="jawaban5" placeholder="Masukan Jawaban Anda" name="jawaban5">
    </div>
    <div class="form-group">
      <label  for="pwd">Apakah artikel-artikel pada news site tersebut bermanfaat?</label>
        <input type="text" class="form-control" id="jawaban6" placeholder="Masukan Jawaban Anda" name="jawaban6">
    </div>
    <div class="form-group">
      <label  for="pwd">Apakah informasi yang disajikan menyimpang seperti click bait, tidak bersifat netral, dll?</label>
        <input type="text" class="form-control" id="jawaban7" placeholder="Masukan Jawaban Anda" name="jawaban7">
    </div>
    <div class="form-group">
      <label  for="pwd">Apakah artikel-artikel pada website tersebut menyajikan sumber yang terpercaya atau hanya opini?</label>
        <input type="text" class="form-control" id="jawaban8" placeholder="Masukan Jawaban Anda" name="jawaban8">
    </div>
    <div class="form-group">
      <label  for="pwd">Bagaimana pengalaman anda dengan news site (yang dimaksud) sebelumnya?</label>
        <input type="text" class="form-control" id="jawaban9" placeholder="Masukan Jawaban Anda" name="jawaban9">
    </div>
    <div class="form-group">
      <label  for="pwd">Apakah anda nyaman membaca artikel artikel pada news site tersebut?</label>
        <input type="text" class="form-control" id="jawaban10" placeholder="Masukan Jawaban Anda" name="jawaban10">
    </div>
    <div class="form-group">
      <label  for="pwd">Berapakah nilai tingkat kepercayaan anda terhadap news site tersebut? </label>
        <input type="text" class="form-control" id="nilai" placeholder="Masukan Nilai Tingkat Kepercayaan Anda Terhadap Newsite ini antara 1 sampai 100" name="nilai">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </form>
</div>

</body>
</html>
    </div>
  </div>
</body>
<!-- END Edit  -->
