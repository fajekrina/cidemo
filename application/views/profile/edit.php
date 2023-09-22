<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Profile</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('profile'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditProfile', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value=" <?= $data_profile->id; ?>">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value=" <?= $data_profile->nama_lengkap; ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_lengkap') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama_panggilan" class="col-sm-2 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value=" <?= $data_profile->id; ?>">
                            <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" value=" <?= $data_profile->nama_panggilan; ?>">
                            <small class="text-danger">
                                <?php echo form_error('nama_panggilan') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value=" <?= $data_profile->id; ?>">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value=" <?= $data_profile->tempat_lahir; ?>">
                            <small class="text-danger">
                                <?php echo form_error('tempat_lahir') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value=" <?= $data_profile->id; ?>">
                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value=" <?= $data_profile->tanggal_lahir; ?>">
                            <small class="text-danger">
                                <?php echo form_error('tanggal_lahir') ?>
                            </small>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" <?php if ($data_profile->jenis_kelamin == "Laki-laki") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="jenis_kelamin2" name="jenis_kelamin" value="Perempuan" <?php if ($data_profile->jenis_kelamin == "Perempuan") : echo "checked";
                                                                                                                                            endif; ?>>
                                    <label class="form-check-label" for="jenis_kelamin2">
                                        Perempuan
                                    </label>
                                </div>
                                <small class="text-danger">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </small>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="agama" name="agama">
                                <option value="Islam" selected disabled>Pilih</option>
                                <option value="Islam" <?php if ($data_profile->agama == "Islam") : echo "selected";
                                                        endif; ?>>Islam</option>
                                <option value="Protestan" <?php if ($data_profile->agama == "Protestan") : echo "selected";
                                                            endif; ?>>Protestan</option>
                                <option value="Katolik" <?php if ($data_profile->agama == "Katolik") : echo "selected";
                                                        endif; ?>>Katolik</option>
                                <option value="Hindu" <?php if ($data_profile->agama == "Hindu") : echo "selected";
                                                        endif; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($data_profile->agama == "Buddha") : echo "selected";
                                                        endif; ?>>Buddha</option>
                                <option value="Khonghucu" <?php if ($data_profile->agama == "Khonghucu") : echo "selected";
                                                            endif; ?>>Khonghucu</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('agama') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="<?= $data_profile->pendidikan; ?>">
                            <small class="text-danger">
                                <?php echo form_error('pendidikan') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $data_profile->jurusan; ?>">
                            <small class="text-danger">
                                <?php echo form_error('jurusan') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="instansi" class="col-sm-2 col-form-label">Instansi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="instansi" name="instansi" value="<?= $data_profile->instansi; ?>">
                            <small class="text-danger">
                                <?php echo form_error('instansi') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nilai" class="col-sm-2 col-form-label">IPK/Nilai</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nilai" name="nilai" value="<?= $data_profile->nilai; ?>">
                            <small class="text-danger">
                                <?php echo form_error('nilai') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $data_profile->alamat; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data_profile->no_hp; ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_hp') ?>
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