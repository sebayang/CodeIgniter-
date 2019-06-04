<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view('layout/header.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Daftar Website
          <small>Listing website yang akan diulas.</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Daftar Website</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <!-- Main row -->
        <div class="row">
          <div class="box">
            <div class="box-body">
              <?php if (!empty($this->session->flashdata('msg'))) { ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                  <?= $this->session->flashdata('msg'); ?>
                </div>
                <hr>
              <?php } ?>

              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Website</button>
              <hr>
              <table id="table_dosen" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Website</th>
                    <th>Nilai</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php $no = 0;
                if (!empty($website)) {
                  foreach ($website as $w) {
                    $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $w->nama_website; ?></td>
                      <td><?= ($w->nilai == null) ? 0 : $w->nilai; ?></td>
                      <td><button class="btn btn-danger" onclick="delete_website('<?= $w->nama_website; ?>')"><i class="fa fa-trash"></i></button></td>
                    </tr>
                  <?php }
              }  ?>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </section>
      <!-- /.content -->
      =
      <!-- /.content -->
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <form method="post" action="<?= base_url('c_website/add_website'); ?>">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Tambah Nama Website</h4>
            </div>
            <div class="modal-body">

              <div class="box-body">
                <div class="form-group">
                  <label>Nama Website</label>
                  <input type="text" name="website" class="form-control" placeholder="Masukan nama website" required>
                </div>
              </div>
              <!-- /.box-body -->

            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Kirim</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
          </form>
        </div>

      </div>
    </div>

    <script>
      function delete_website(nama) {
        var web = nama;
        swal({
            title: "Apa kamu yakin?",
            text: "Seluruh data penilaian dan komentar dari user akan terhapus!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location.href = '<?= base_url('c_website/delete_website/'); ?>' + web;
            }
          });
      }
    </script>