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
            <h1 class="h3 mb-0 text-gray-800">Tambah Hasil Laporan CSR</h1>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Input Laporan CSR</h6>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url('index.php/laporan/store'); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control form-control-user" id="tahun" disabled value="2019">
                    <input type="hidden" name="tahun" value="2019">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Perusahaan:</label>
                    <input name="nama" type="text" class="form-control form-control-user" id="nama" placeholder="Nama Perusahaan" required>
                </div>
                <div class="form-group">
                    <label for="sel1">Pilih Bidang yang dilaksanakan:</label>
                    <select name="bidang" class="form-control form-control-user" id="sel1" required>
                        <option>-- Pilih Bidang --</option>
                        <option value="kesehatan">Bidang Kesehatan</option>
                        <option value="pendidikan">Bidang Pendidikan</option>
                        <option value="sosial">Bidang Sosial</option>
                        <option value="infrastruktur">Bidang Infrastruktur</option>
                        <option value="ekonomi">Bidang Ekonomi</option>
                        <option value="bina_lingkungan">Bidang Bina Lingkungan</option>
                        <option value="keagamaan">Bidang Keagamaan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan:</label>
                    <input name="nama_kegiatan" type="text" class="form-control form-control-user" id="nama_kegiatan" placeholder="Nama Kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_pelaksanaan">Tanggal Pelaksanaan:</label>
                    <input name="tanggal_pelaksanaan" type="date" class="form-control form-control-user" id="tanggal_pelaksanaan" required>
                </div>
                <div class="form-group">
                    <label for="sasaran">Sasaran/Penerima Manfaat Kegiatan yang dilaksanakan:</label>
                    <input type="text" name="sasaran" class="form-control form-control-user" id="sasaran" placeholder="Sasaran/Penerima Manfaat Kegiatan yang dilaksanakan (ex:sekolah, pesantren, warga masyarakat)" required>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi Kegiatan:</label>
                    <input name="lokasi" type="text" class="form-control form-control-user" id="lokasi" placeholder="Masukkan Lokasi Kegiatan (ex: Kecamatan: SUKALARANG, Desa/Kelurahan: CIMANGKOK.)" required>
                </div>
                <div class="form-group">
                    <label for="anggaran">Masukkan Jumlah Anggaran:</label>
                    <input type="number" name="anggaran" class="form-control form-control-user" id="anggaran" placeholder="Jumlah Anggaran (Masukkan tanpa menggunakan koma/titik, ex: 5000000)" required>
                </div>
                <div class="form-group">
                    <label for="file">Upload FIle Laporan CSR (Tipe File PDF):</label>
                    <input name="file" type="file" class="form-control form-control-user" id="file" placeholder="File Laporan CSR berbentuk pdf" accept="application/pdf"  required>
                </div>
                <div class="form-group">
                  <input type="submit" class="form-control form-control-user btn btn-primary" id="submit" value="submit">
                </div>
              </form>
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
