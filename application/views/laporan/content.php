    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="<?php echo base_url('index.php/laporan/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Input Laporan CSR</a>
          </div>

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">&nbsp;</h1>
            <a href="<?php echo base_url().'public/upload/dokumen/template.docx'; ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Template Laporan CSR</a>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan CSR</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Perusahaan</th>
                      <th>Bidang</th>
                      <th>Nama Kegiatan</th>
                      <th>Sasaran</th>
                      <th>Tanggal</th>
                      <th>Lokasi</th>
                      <th>Anggaran</th>
                      <th>File</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Nama Perusahaan</th>
                      <th>Bidang</th>
                      <th>Nama Kegiatan</th>
                      <th>Sasaran</th>
                      <th>Tanggal Pelaksanaan</th>
                      <th>Lokasi</th>
                      <th>Anggaran</th>
                      <th>File</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $count=0; 
                      if($laporan){ 
                        foreach($laporan as $result): 
                    ?>
                    <tr>
                      <td> <?php echo ++$count; ?> </td>
                      <td> <?php echo $result->nama; ?> </td>
                      <td> <?php echo $result->bidang; ?> </td>
                      <td> <?php echo $result->nama_kegiatan; ?> </td>
                      <td> <?php echo $result->sasaran; ?> </td>
                      <td> <?php echo $result->tanggal_pelaksanaan; ?> </td>
                      <td> <?php echo $result->lokasi; ?> </td>
                      <td align="right"> <?php echo number_format($result->anggaran); ?> </td>
                      <td> <a href="<?php echo base_url().'public/upload/dokumen/'.$result->file; ?>" class="btn btn-md btn-primary"> Download </td>
                    </tr>
                    <?php endforeach; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    <!-- Page level plugins -->
    <script src="<?php echo base_url('public/assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('public/assets/js/demo/datatables-demo.js'); ?>"></script>
