<?php
defined('BASEPATH') or exit('No direct access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Penerimaan Peserta Didik Baru';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/main');
        $this->load->view('chat');
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Formulir Pendaftaran';

        $this->form_validation->set_rules('kode_pendaftaran', 'Kode Pendaftaran', 'required|is_unique[tbl_pendaftar.kode_pendaftaran]');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]|is_unique[tbl_pendaftar.nik]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[tbl_pendaftar.email]');
        $this->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'required');
        $this->form_validation->set_rules('kampung', 'Kampung', 'required');
        $this->form_validation->set_rules('desa', 'Desa', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nik_ayah', 'NIK', 'required|numeric|exact_length[16]|is_unique[tbl_pendaftar.nik_ayah]');
        $this->form_validation->set_rules('pend_ayah', 'Pendidikan Terakhir', 'required');
        $this->form_validation->set_rules('pek_ayah', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('no_ayah', 'Nomor Handphone', 'required');
        $this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('nik_ibu', 'NIK', 'required|numeric|exact_length[16]|is_unique[tbl_pendaftar.nik_ibu]');
        $this->form_validation->set_rules('pend_ibu', 'Pendidikan Terakhir', 'required');
        $this->form_validation->set_rules('pek_ibu', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('no_ibu', 'Nomor Handphone', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('home/form_daftar');
            $this->load->view('chat');
            $this->load->view('templates/footer');
        } else {
            $kode_pendaftaran = $this->input->post('kode_pendaftaran');
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $tmpt_lahir = $this->input->post('tmpt_lahir');
            $jekel = $this->input->post('jekel');
            $agama = $this->input->post('agama');
            $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');
            $sekolah_asal = $this->input->post('sekolah_asal');
            $kampung = $this->input->post('kampung');
            $desa = $this->input->post('desa');
            $kecamatan = $this->input->post('kecamatan');
            $ayah = $this->input->post('ayah');
            $nik_ayah = $this->input->post('nik_ayah');
            $pend_ayah = $this->input->post('pend_ayah');
            $pek_ayah = $this->input->post('pek_ayah');
            $no_ayah = $this->input->post('no_ayah');
            $ibu = $this->input->post('ibu');
            $nik_ibu = $this->input->post('nik_ibu');
            $pend_ibu = $this->input->post('pend_ibu');
            $pek_ibu = $this->input->post('pek_ibu');
            $no_ibu = $this->input->post('no_ibu');



            $this->daftar->inputPendaftar($kode_pendaftaran, $nik, $nama, $tmpt_lahir, $tgl_lahir, $jekel, $agama, $no_hp, $email, $sekolah_asal, $kampung, $desa, $kecamatan, $ayah, $nik_ayah, $pend_ayah, $pek_ayah, $no_ayah, $ibu, $nik_ibu, $pend_ibu, $pek_ibu, $no_ibu);
        }
    }
}
