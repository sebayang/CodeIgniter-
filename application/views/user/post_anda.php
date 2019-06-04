<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('layout/header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Semua Ulasan Anda
      <small>Dashboard</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Post Anda</li>
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
                  <th>ID Jawaban</th>
                  <th>Nama Website</th>
                  <th>Nilai</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($jawaban as $jwb):
                ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $jwb->id;?></td>
                  <td><?php echo $jwb->nama_website;?></td>
                  <td><?php echo $jwb->nilai;?></td>
                  <td>
                  <a href="<?php echo base_url('c_post_anda/edit_jawaban/'.$jwb->id);?>" class="btn btn-primary" ><i class="fa fa-edit"></i></a>
                    <a href="<?php echo base_url('c_post_anda/hapus_jawaban/'.$jwb->id);?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php $no++; endforeach; ?>
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
