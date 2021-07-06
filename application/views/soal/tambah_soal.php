
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
                    <a href="<?=site_url('soal/tambah_soal')?>" class="float-right btn btn-primary btn-flat" >
                        <i class="fa fa-user-plus"></i> Create
                    </a>
                </div> -->
                <h3 class="card-title">Isi Data Dengan Lengkap</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
              <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputnama">Nama Matkul</label>
                  <input type="text" class="form-control" id="exampleInputnama" placeholder="masukan nama matkul">
                </div>
                <div class="form-group">
                  <label for="exampleInputsemester">Semester</label>
                  <input type="number" class="form-control" id="exampleInputsemester" placeholder="masukan semester">
                </div>
                <div class="form-group">
                  <label for="exampleInputtanggal">Tanggal Upload</label>
                  <input type="date" class="form-control" id="exampleInputtanggal" placeholder="masukan tanggal upload">
                </div>
                <div class="form-group">
                  <label for="exampleInputdosen">Dosen Pengampu</label>
                  <input type="text" class="form-control" id="exampleInputdosen" placeholder="masukan nama dosen pengampu">
                </div>
                <div class="form-group">
                  <label for="exampleInputtahun">Tahun Ujian</label>
                  <input type="text" class="form-control" id="exampleInputtahun" placeholder="masukan tahun ujian">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Soal</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">masukan file soal</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <!-- <div class="card-footer"></div> -->
              <a href="#" class="btn btn-primary btn-block"
              ><b>Tambah Soal</b></a
            >
              </div>
            </form>
          
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
 