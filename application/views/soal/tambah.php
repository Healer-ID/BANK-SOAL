<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Soal</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('mahasiswa'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmAddSoal', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="matkul" name="matkul" value=" <?= set_value('matkul'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('matkul') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Semester" name="semester" value=" <?= set_value('semester'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('semester') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_upload" class="col-sm-2 col-form-label">Tanggal Upload</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_upload" name="tgl_upload" value=" <?= set_value('tgl_upload'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('tgl_upload') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dosen" class="col-sm-2 col-form-label">Dosen Pengampu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dosen" name="dosen" value=" <?= set_value('dosen'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('dosen') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thn_ujian" class="col-sm-2 col-form-label">Tahun Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="thn_ujian" name="thn_ujian" value=" <?= set_value('thn_ujian'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('thn_ujian') ?>
                            </small>
                        </div>
                    </div>
                <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Kategori</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="kategori" name="kategori" value="Laki-laki" <?php if (set_value('kategori') == "UTS") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="kategori">
                                        UTS
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="kategori2" name="kategori" value="UAS" <?php if (set_value('kategori') == "UAS") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="kategori2">
                                        UAS
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('kategori') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label for="file_soal" class="col-sm-2 col-form-label">Tahun Ujian</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="file_soal" name="file_soal" value=" <?= set_value('file_soal'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('file_soal') ?>
                            </small>
                        </div>
                    </div>

              <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>