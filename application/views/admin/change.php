<div class="container">
    <h2>Edit Data</h2>
    <div class="dropdown-divider"></div>
    <?= form_open('admin/edit/' . $summary['id_daftar']); ?>
    <div class="form-group">
        <label for="kode_pendaftaran">Kode Pendaftaran</label>
        <input type="text" class="form-control" value="<?= $summary['kode_pendaftaran']; ?>" id="kode_pendaftaran" name="kode_pendaftaran" placeholder="Silahkan Masukkan Kode Di Atas">
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
                <input type="text" class="form-control" value="<?= $summary['nama']; ?>" id="nama" name="nama" placeholder="Nama Lengkap ex. Muhammad Raihan">
                <small class="text-danger">
                    <?= form_error('nama'); ?>
                </small>
            </div>
        </div>


        <div class="col-sm-5">
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" value="<?= $summary['nik']; ?>" id="nik" name="nik" placeholder="ex. 32xxxxxxxxxxxxxx">
                <small class="text-danger">
                    <?= form_error('nik'); ?>
                </small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label for="jekel">Jenis Kelamin</label>
                <input type="text" class="form-control" value="<?= $summary['jekel']; ?>" id="jekel" name="jekel" placeholder="ex. Perempuan">
                <small class="text-danger">
                    <?= form_error('jekel'); ?>
                </small>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="form-group">
                <label for="tmpt_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" value="<?= $summary['tmpt_lahir']; ?>" id="tmpt_lahir" name="tmpt_lahir" placeholder="ex. Sukabumi">
                <small class="text-danger">
                    <?= form_error('tmpt_lahir'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" value="<?= $summary['tgl_lahir']; ?>" id="tgl_lahir" name="tgl_lahir" placeholder="">
                <small class="text-danger">
                    <?= form_error('tgl_lahir'); ?>
                </small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" value="<?= $summary['agama']; ?>" id="pend_ibu" name="agama" placeholder="ex. Kristen">
                <small class="text-danger">
                    <?= form_error('agama'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" class="form-control" value="<?= $summary['no_hp']; ?>" id="no_hp" name="no_hp" placeholder="ex. 084567654532">
                <small class="text-danger">
                    <?= form_error('no_hp'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="text" class="form-control" value="<?= $summary['email']; ?>" id="email" name="email" placeholder="ex. mzr123@example.com">
                <small class="text-danger">
                    <?= form_error('email'); ?>
                </small>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="sekolah_asal">Asal Sekolah</label>
        <input type="text" class="form-control" value="<?= $summary['sekolah_asal']; ?>" id="sekolah_asal" name="sekolah_asal" placeholder="ex. SMAN 1 Kota Sukabumi">
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
                <input type="text" class="form-control" value="<?= $summary['kampung']; ?>" id="kampung" name="kampung" placeholder="ex. Kp. Sukajaya">
                <small class="text-danger">
                    <?= form_error('kampung'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="desa">Desa</label>
                <input type="text" class="form-control" value="<?= $summary['desa']; ?>" id="desa" name="desa" placeholder="ex. Parungkuda">
                <small class="text-danger">
                    <?= form_error('desa'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" class="form-control" value="<?= $summary['kecamatan']; ?>" id="kecamatan" name="kecamatan" placeholder="ex. Sundawenang">
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
                <input type="text" class="form-control" value="<?= $summary['ayah']; ?>" id="ayah" name="ayah" placeholder="ex. Tedi Abdurrahman">
                <small class="text-danger">
                    <?= form_error('ayah'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label for="nik_ayah">NIK</label>
                <input type="text" class="form-control" value="<?= $summary['nik_ayah']; ?>" id="nik_ayah" name="nik_ayah" placeholder="ex. 32xxxxxxxxxxxxxx">
                <small class="text-danger">
                    <?= form_error('nik_ayah'); ?>
                </small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="pend_ayah">Pendidikan Terakhir</label>
                <input type="text" class="form-control" value="<?= $summary['pend_ayah']; ?>" id="pend_ibu" name="pend_ayah" placeholder="ex. SLTA/Sederajat">
                <small class="text-danger">
                    <?= form_error('pend_ayah'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="pek_ayah">Pekerjaan</label>
                <input type="text" class="form-control" value="<?= $summary['pek_ayah']; ?>" id="pek_ayah" name="pek_ayah" placeholder="ex. Wiraswasta">
                <small class="text-danger">
                    <?= form_error('pek_ayah'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label for="no_ayah">Nomor Handphone</label>
                <input type="text" class="form-control" value="<?= $summary['no_ayah']; ?>" id="no_ayah" name="no_ayah" placeholder="ex. 084567654532">
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
                <input type="text" class="form-control" value="<?= $summary['ibu']; ?>" id="ibu" name="ibu" placeholder="ex. Tini">
                <small class="text-danger">
                    <?= form_error('ibu'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label for="nik_ibu">NIK</label>
                <input type="text" class="form-control" value="<?= $summary['nik_ibu']; ?>" id="nik_ibu" name="nik_ibu" placeholder="ex. 32xxxxxxxxxxxxxx">
                <small class="text-danger">
                    <?= form_error('nik_ibu'); ?>
                </small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="pend_ibu">Pendidikan Terakhir</label>
                <input type="text" class="form-control" value="<?= $summary['pend_ibu']; ?>" id="pend_ibu" name="pend_ibu" placeholder="ex. SLTA/Sederajat">
                <small class="text-danger">
                    <?= form_error('pend_ibu'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="form-group">
                <label for="pek_ibu">Pekerjaan</label>
                <input type="text" class="form-control" value="<?= $summary['pek_ibu']; ?>" id="pek_ibu" name="pek_ibu" placeholder="ex. Wiraswasta">
                <small class="text-danger">
                    <?= form_error('pek_ibu'); ?>
                </small>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="form-group">
                <label for="no_ibu">Nomor Handphone</label>
                <input type="text" class="form-control" value="<?= $summary['no_ibu']; ?>" id="no_ibu" name="no_ibu" placeholder="ex. 084567654532">
                <small class="text-danger">
                    <?= form_error('no_ibu'); ?>
                </small>
            </div>
        </div>
    </div>
    <button class="btn btn-success" type="submit" onclick="return confirm('Simpan Perubahan?')">Perbarui</button>

    <?= form_close(); ?>

</div>