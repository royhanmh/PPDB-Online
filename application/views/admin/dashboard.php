 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <?= $this->session->tempdata('alert'); ?>
     <h1 class="h3 mb-2 text-gray-800">Tabel</h1>



     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-success">Data Tabel Pendaftar</h6>
             <div class="dropdown-divider"></div>
             <a type="button" href="<?= site_url('admin/export'); ?>" class="btn btn-outline-success">Cetak Spreadsheet</a>
         </div>

         <div class="card-body">
             <div class="table-responsive text-nowrap text-center">
                 <table class="table table-bordered" width="100%" cellspacing="">
                     <thead>
                         <tr>
                             <th width="150" scope="col">No</th>
                             <th scope="col">Nomor Pendaftaran</th>
                             <th scope="col">NIK</th>
                             <th scope="col">Nama</th>
                             <th scope="col">Tempat Lahir</th>
                             <th scope="col">Tanggal Lahir</th>
                             <th scope="col">Jenis Kelamin</th>
                             <th scope="col">Agama</th>
                             <th scope="col">Nomor HP</th>
                             <th scope="col">Email</th>
                             <th scope="col">Sekolah Asal</th>
                             <th scope="col">Kampung</th>
                             <th scope="col">Desa</th>
                             <th scope="col">Kecamatan</th>
                             <th scope="col">Nama Ayah</th>
                             <th scope="col">NIK Ayah</th>
                             <th scope="col">Pendidikan Terakhir Ayah</th>
                             <th scope="col">Pekerjaan Ayah</th>
                             <th scope="col">Nomor HP Ayah</th>
                             <th scope="col">Nama Ibu</th>
                             <th scope="col">NIK Ibu</th>
                             <th scope="col">Pendidikan Terakhir Ibu</th>
                             <th scope="col">Pekerjaan Ibu</th>
                             <th scope="col">Nomor HP Ibu</th>
                             <th scope="col">Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($tbl_pendaftar as $tp) : ?>
                             <tr>
                                 <th scope="row"><?= ++$start ?></th>
                                 <td width="150"><?= $tp['kode_pendaftaran']; ?></td>
                                 <td><?= $tp['nik']; ?></td>
                                 <td><?= $tp['nama']; ?></td>
                                 <td><?= $tp['tmpt_lahir']; ?></td>
                                 <td><?= $tp['tgl_lahir']; ?></td>
                                 <td><?= $tp['jekel']; ?></td>
                                 <td><?= $tp['agama']; ?></td>
                                 <td><?= $tp['no_hp']; ?></td>
                                 <td><?= $tp['email']; ?></td>
                                 <td><?= $tp['sekolah_asal']; ?></td>
                                 <td><?= $tp['kampung']; ?></td>
                                 <td><?= $tp['desa']; ?></td>
                                 <td><?= $tp['kecamatan']; ?></td>
                                 <td><?= $tp['ayah']; ?></td>
                                 <td><?= $tp['nik_ayah']; ?></td>
                                 <td><?= $tp['pend_ayah']; ?></td>
                                 <td><?= $tp['pek_ayah']; ?></td>
                                 <td><?= $tp['no_ayah']; ?></td>
                                 <td><?= $tp['ibu']; ?></td>
                                 <td><?= $tp['nik_ibu']; ?></td>
                                 <td><?= $tp['pend_ibu']; ?></td>
                                 <td><?= $tp['pek_ibu']; ?></td>
                                 <td><?= $tp['no_ibu']; ?></td>
                                 <td>
                                     <a href="<?= site_url('admin/edit/' . $tp['id_daftar']); ?>" class="btn btn-primary">Edit</a>
                                     <a href="<?= site_url('admin/hapus/' . $tp['id_daftar']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</a>
                                 </td>
                             </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
             <?= $this->pagination->create_links(); ?>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->