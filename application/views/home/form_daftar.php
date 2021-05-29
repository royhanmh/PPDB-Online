<div class="container mt-5">

    <div class="row h-100">
        <div class="col-sm-12 my-auto">
            <?= $this->session->tempdata('notice'); ?>
            <h2>Form Pendaftaran</h2>
            <p>Kode Pendaftaran Anda Adalah : <b> <?= uniqid(); ?> </b></p>
            <hr>
            </hr>
            <form action="<?= base_url('home/add'); ?>" method="POST">
                <div class="form-group">
                    <label for="kode_pendaftaran">Kode Pendaftaran</label>
                    <input type="text" class="form-control" id="kode_pendaftaran" name="kode_pendaftaran" placeholder="Silahkan Masukkan Kode Di Atas">
                    <small class="text-danger">
                        <?= form_error('kode_pendaftaran'); ?>
                    </small>
                </div>

                <div class="alert alert-success">
                    <strong>Data Calon Peserta Didik</strong>
                </div>

                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap ex. Muhammad Raihan" value="<?= set_value('nama'); ?>">
                            <small class="text-danger">
                                <?= form_error('nama'); ?>
                            </small>
                        </div>
                    </div>


                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="ex. 32xxxxxxxxxxxxxx" value="<?= set_value('nik'); ?>">
                            <small class="text-danger">
                                <?= form_error('nik'); ?>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Kelamin:</label>
                            <select class="form-control" id="jekel" name="jekel">
                                <option></option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <small class="text-danger">
                                <?= form_error('jekel'); ?>
                            </small>
                        </div>
                    </div>


                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="tmpt_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="ex. Sukabumi" value="<?= set_value('tmpt_lahir'); ?>">
                            <small class="text-danger">
                                <?= form_error('tmpt_lahir'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="" value="<?= set_value('tgl_lahir'); ?>">
                            <small class="text-danger">
                                <?= form_error('tgl_lahir'); ?>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" id="agama" name="agama">
                                <option></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                            <small class="text-danger">
                                <?= form_error('agama'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="ex. 084567654532" value="<?= set_value('no_hp'); ?>">
                            <small class="text-danger">
                                <?= form_error('no_hp'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="email">Alamat Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="ex. mzr123@example.com" value="<?= set_value('email'); ?>">
                            <small class="text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="sekolah_asal">Asal Sekolah</label>
                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="ex. SDN 1 Kota Sukabumi" value="<?= set_value('sekolah_asal'); ?>">
                    <small class="text-danger">
                        <?= form_error('sekolah_asal'); ?>
                    </small>
                </div>


                <div class="alert alert-success">
                    <strong>Data Alamat</strong>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="kampung">Jalan/Kampung/Dusun</label>
                            <input type="text" class="form-control" id="kampung" name="kampung" placeholder="ex. Kp. Sukajaya" value="<?= set_value('kampung'); ?>">
                            <small class="text-danger">
                                <?= form_error('kampung'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <input type="text" class="form-control" id="desa" name="desa" placeholder="ex. Parungkuda" value="<?= set_value('desa'); ?>">
                            <small class="text-danger">
                                <?= form_error('desa'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="ex. Sundawenang" value="<?= set_value('kecamatan'); ?>">
                            <small class="text-danger">
                                <?= form_error('kecamatan'); ?>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success">
                    <strong>Identitas Orang Tua/Wali</strong>
                </div>

                <p>1. Ayah Kandung</p>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="ayah">Nama Ayah</label>
                            <input type="text" class="form-control" id="ayah" name="ayah" placeholder="ex. Tedi Abdurrahman" value="<?= set_value('ayah'); ?>">
                            <small class="text-danger">
                                <?= form_error('ayah'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="nik_ayah">NIK</label>
                            <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" placeholder="ex. 32xxxxxxxxxxxxxx" value="<?= set_value('nik_ayah'); ?>">
                            <small class="text-danger">
                                <?= form_error('nik_ayah'); ?>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="pend_ayah" name="pend_ayah">
                                <option></option>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Strata 1">Strata 1</option>
                                <option value="Strata 2">Strata 2</option>
                            </select>
                            <small class="text-danger">
                                <?= form_error('pend_ayah'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="pek_ayah">Pekerjaan</label>
                            <input type="text" class="form-control" id="pek_ayah" name="pek_ayah" placeholder="ex. Wiraswasta" value="<?= set_value('pek_ayah'); ?>">
                            <small class="text-danger">
                                <?= form_error('pek_ayah'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="no_ayah">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_ayah" name="no_ayah" placeholder="ex. 084567654532" value="<?= set_value('no_ayah'); ?>">
                            <small class="text-danger">
                                <?= form_error('no_ayah'); ?>
                            </small>
                        </div>
                    </div>
                </div>

                <p>2. Ibu Kandung</p>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <label for="ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="ibu" name="ibu" placeholder="ex. Tini" value="<?= set_value('ibu'); ?>">
                            <small class="text-danger">
                                <?= form_error('ibu'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="nik_ibu">NIK</label>
                            <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" placeholder="ex. 32xxxxxxxxxxxxxx" value="<?= set_value('nik_ibu'); ?>">
                            <small class="text-danger">
                                <?= form_error('nik_ibu'); ?>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="pend_ibu" name="pend_ibu">
                                <option></option>
                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                <option value="Strata 1">Strata 1</option>
                                <option value="Strata 2">Strata 2</option>
                            </select>
                            <small class="text-danger">
                                <?= form_error('pend_ibu'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="pek_ibu">Pekerjaan</label>
                            <input type="text" class="form-control" id="pek_ibu" name="pek_ibu" placeholder="ex. Wiraswasta" value="<?= set_value('pek_ibu'); ?>">
                            <small class="text-danger">
                                <?= form_error('pek_ibu'); ?>
                            </small>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="no_ibu">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_ibu" name="no_ibu" placeholder="ex. 084567654532" value="<?= set_value('no_ibu'); ?>">
                            <small class="text-danger">
                                <?= form_error('no_ibu'); ?>
                            </small>
                        </div>
                    </div>
                </div>


                <button class="btn btn-outline-success">Daftar</button>
            </form>
        </div>
    </div>
</div>