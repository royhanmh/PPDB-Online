<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    public function inputPendaftar($kode_pendaftaran, $nik, $nama, $tmpt_lahir, $tgl_lahir, $jekel, $agama, $no_hp, $email, $sekolah_asal, $kampung, $desa, $kecamatan, $ayah, $nik_ayah, $pend_ayah, $pek_ayah, $no_ayah, $ibu, $nik_ibu, $pend_ibu, $pek_ibu, $no_ibu)
    {
        $data = [
            'kode_pendaftaran'          =>  $kode_pendaftaran,
            'nik'                       =>  $nik,
            'nama'                      =>  $nama,
            'tmpt_lahir'                =>  $tmpt_lahir,
            'tgl_lahir'                 =>  $tgl_lahir,
            'jekel'                     =>  $jekel,
            'agama'                     =>  $agama,
            'no_hp'                     =>  $no_hp,
            'email'                     =>  $email,
            'sekolah_asal'              =>  $sekolah_asal,
            'kampung'                   =>  $kampung,
            'desa'                      =>  $desa,
            'kecamatan'                 =>  $kecamatan,
            'ayah'                      =>  $ayah,
            'nik_ayah'                  =>  $nik_ayah,
            'pend_ayah'                 =>  $pend_ayah,
            'pek_ayah'                  =>  $pek_ayah,
            'no_ayah'                   =>  $no_ayah,
            'ibu'                       =>  $ibu,
            'nik_ibu'                   =>  $nik_ibu,
            'pend_ibu'                  =>  $pend_ibu,
            'pek_ibu'                   =>  $pek_ibu,
            'no_ibu'                    =>  $no_ibu


        ];

        $this->db->insert('tbl_pendaftar', $data);
        $this->session->set_tempdata('notice', '<div class="alert alert-success" role="alert">Selamat Anda Telah Terdaftar</div>', 10);
        return redirect('Home/add');
    }
}
