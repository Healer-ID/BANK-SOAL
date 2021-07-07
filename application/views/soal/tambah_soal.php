
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>TAMBAH SOAL</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Tambah Soal</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
             <div class="card-header">

                <!-- <div class="pull-right">
                    <a href="" class="float-right btn btn-primary btn-flat" >
                        <i class="fa fa-user-plus"></i> Create
                    </a>
                </div> -->
                <h3 class="card-title">Isi Data Dengan Lengkap</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
              <?= form_open_multipart ('soal/tambah_soal') ;?>
              <div class="card-body">
                <div class="form-group">
                  <label for="namamatkul">Nama Matkul</label>
                  <input type="text" class="form-control" id="namamatkul" placeholder="masukan nama matkul">
                </div>
                <div class="form-group">
                  <label for="semester">Semester</label>
                  <input type="number" class="form-control" id="semester" placeholder="masukan semester">
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal Upload</label>
                  <input type="date" class="form-control" id="tanggal" placeholder="masukan tanggal upload">
                </div>
                <div class="form-group">
                  <label for="dosen">Dosen Pengampu</label>
                  <input type="text" class="form-control" id="dosen" placeholder="masukan nama dosen pengampu">
                </div>
                <div class="form-group">
                  <label for="tahun">Tahun Ujian</label>
                  <input type="text" class="form-control" id="tahun" placeholder="masukan tahun ujian">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori Soal</label>
                    <br>
                    <input type="radio" id="UTS" name="kategori" value="satu">
                    <label for="satu">Ujian Tengah Semester (UTS)</label>
                    <br><input type="radio" id="UAS" name="kategori" value="dua"> 
                    <label for="dua">Ujian Akhir Semester (UAS)</label>
                  </div>
                <div class="form-group">
                  <label for="userfile">File Soal</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="userfile">
                      <label class="custom-file-label" for="userfile">masukan file soal</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <!-- <div class="card-footer"></div> -->
             <button type="submit" class="btn btn-primary">tambah soal</button>
             
              <!-- <a href="#" class="btn btn-primary btn-block"
              ><b>Tambah Soal</b></a
            > -->
              </div>
            <?= form_close(); ?>
          
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
 