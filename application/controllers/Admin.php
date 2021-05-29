<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin extends CI_Controller
{
    public function index()
    {
        if ($email = $this->session->userdata('email') == null) {
            $data['title'] = 'Administrator Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->session->userdata('email');
            $data = [
                'title' => 'Halaman Administrator',
                'users' =>  $this->db->get_where('users', ['email' => $email])->row_array(),
            ];

            $this->load->view('templates/adm_header', $data);
            $this->load->view('templates/adm_sidebar', $data);
            $this->load->view('templates/adm_topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/adm_footer');
        }
    }

    public function dashboard()
    {
        if ($email = $this->session->userdata('email') == null) {
            $data['title'] = 'Administrator Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->session->userdata('email');
            $data = [
                'title' => 'Halaman Administrator',
                'users' =>  $this->db->get_where('users', ['email' => $email])->row_array(),
                'tbl_pendaftar' => $this->db->get('tbl_pendaftar')->result_array()
            ];

            $config['base_url'] = 'http://localhost/UAS_1930511114/admin/dashboard';
            $config['total_rows'] = $this->Summary_model->hitungPendaftar();
            $config['per_page'] = 10;
            $config['num_links'] = 5;

            $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul></nav>';

            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';

            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';

            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';

            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';

            $config['attributes'] = array('class' => 'page-link');

            $this->pagination->initialize($config);

            $data['start'] = $this->uri->segment(3);
            $data['tbl_pendaftar'] =  $this->Summary_model->ambilPendaftar($config['per_page'], $data['start']);

            $this->load->view('templates/adm_header', $data);
            $this->load->view('templates/adm_sidebar', $data);
            $this->load->view('templates/adm_topbar', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('templates/adm_footer');
        }
    }

    public function addAdmin()
    {
        if ($email = $this->session->userdata('email') == null) {
            $data['title'] = 'Administrator Login';

            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->session->userdata('email');
            $data = [
                'title' => 'Halaman Administrator',
                'users' =>  $this->db->get_where('users', ['email' => $email])->row_array(),
            ];

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]|matches[cek_password]');
            $this->form_validation->set_rules('cek_password', 'Password', 'required|trim|matches[password]');

            if ($this->form_validation->run() == false) {


                $this->load->view('templates/adm_header', $data);
                $this->load->view('templates/adm_sidebar', $data);
                $this->load->view('templates/adm_topbar', $data);
                $this->load->view('admin/addAdmin', $data);
                $this->load->view('templates/adm_footer');
            } else {
                $in = [
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                ];

                $this->db->insert('users', $in);
                $this->session->set_tempdata('message', '<div class="alert alert-success" role="alert">Akun Admin Telah Ditambah</div>', 10);
                redirect('admin/addAdmin');
            }
        }
    }

    public function edit($id_daftar = '')
    {
        if ($email = $this->session->userdata('email') == null) {
            $data['title'] = 'Administrator Login';

            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {

            if (empty($id_daftar)) {
                redirect('admin/dashboard' . 'refresh');
            }

            $summary = $this->Summary_model->get_by_id($id_daftar);

            $this->form_validation->set_rules('kode_pendaftaran', 'Kode Pendaftaran', 'required');
            $this->form_validation->set_rules('nik', 'NIK', 'required|numeric|exact_length[16]');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('agama', 'Agama', 'required');
            $this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'required');
            $this->form_validation->set_rules('kampung', 'Kampung', 'required');
            $this->form_validation->set_rules('desa', 'Desa', 'required');
            $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
            $this->form_validation->set_rules('ayah', 'Nama Ayah', 'required');
            $this->form_validation->set_rules('nik_ayah', 'NIK', 'required|numeric');
            $this->form_validation->set_rules('pend_ayah', 'Pendidikan Terakhir', 'required');
            $this->form_validation->set_rules('pek_ayah', 'Pekerjaan', 'required');
            $this->form_validation->set_rules('no_ayah', 'Nomor Handphone', 'required');
            $this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');
            $this->form_validation->set_rules('nik_ibu', 'NIK', 'required|numeric|exact_length[16]');
            $this->form_validation->set_rules('pend_ibu', 'Pendidikan Terakhir', 'required');
            $this->form_validation->set_rules('pek_ibu', 'Pekerjaan', 'required');
            $this->form_validation->set_rules('no_ibu', 'Nomor Handphone', 'required');



            if ($this->form_validation->run() == false) {
                $email = $this->session->userdata('email');
                $data = [
                    'title' => 'Halaman Administrator',
                    'users' =>  $this->db->get_where('users', ['email' => $email])->row_array(),
                    'summary' => $summary
                ];

                $this->load->view('templates/adm_header', $data);
                $this->load->view('templates/adm_sidebar', $data);
                $this->load->view('templates/adm_topbar', $data);
                $this->load->view('admin/change', $data);
                $this->load->view('templates/adm_footer');
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

                $summary = [
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
                $perbarui = $this->Summary_model->perbarui($summary, $id_daftar);
                $this->session->set_tempdata('alert', '<div class="alert alert-success" role="alert">Data Telah Diperbaharui</div>', 10);
                redirect('admin/dashboard', 'refresh');
            }
        }
    }

    public function hapus($id_daftar = '')
    {

        $this->Summary_model->hapus($id_daftar);
        $this->session->set_tempdata('alert', '<div class="alert alert-success" role="alert">Data Telah Dihapus</div>', 10);
        redirect('admin/dashboard');
    }

    public function export()
    {
        if ($email = $this->session->userdata('email') == null) {
            $data['title'] = 'Administrator Login';

            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'NO');
            $sheet->setCellValue('B1', 'No Pendaftaran');
            $sheet->setCellValue('C1', 'NIK');
            $sheet->setCellValue('D1', 'Nama');
            $sheet->setCellValue('E1', 'Tempat Lahir');
            $sheet->setCellValue('F1', 'Tanggal Lahir');
            $sheet->setCellValue('G1', 'Jenis Kelamin');
            $sheet->setCellValue('H1', 'Agama');
            $sheet->setCellValue('I1', 'Nomor HP');
            $sheet->setCellValue('J1', 'Email');
            $sheet->setCellValue('K1', 'Sekolah Asal');
            $sheet->setCellValue('L1', 'Kampung');
            $sheet->setCellValue('M1', 'Desa');
            $sheet->setCellValue('N1', 'Kecamatan');
            $sheet->setCellValue('O1', 'Nama Ayah');
            $sheet->setCellValue('P1', 'NIK Ayah');
            $sheet->setCellValue('Q1', 'Pendidikan Terakhir Ayah');
            $sheet->setCellValue('R1', 'Pekerjaan Ayah');
            $sheet->setCellValue('S1', 'Nomor HP Ayah');
            $sheet->setCellValue('T1', 'Nama Ibu');
            $sheet->setCellValue('U1', 'NIK Ibu');
            $sheet->setCellValue('V1', 'Pendidikan Terakhir Ibu');
            $sheet->setCellValue('W1', 'Pekerjaan Ibu');
            $sheet->setCellValue('X1', 'Nomor HP Ibu');

            $pendaftar = $this->Summary_model->get_all();
            $no = 1;
            $x = 2;
            foreach ($pendaftar as $row) {
                $sheet->setCellValue('A' . $x, $no++);
                $sheet->setCellValue('B' . $x, $row->kode_pendaftaran);
                $sheet->setCellValue('C' . $x, $row->nik);
                $sheet->setCellValue('D' . $x, $row->nama);
                $sheet->setCellValue('E' . $x, $row->tmpt_lahir);
                $sheet->setCellValue('F' . $x, $row->tgl_lahir);
                $sheet->setCellValue('G' . $x, $row->jekel);
                $sheet->setCellValue('H' . $x, $row->agama);
                $sheet->setCellValue('I' . $x, $row->no_hp);
                $sheet->setCellValue('J' . $x, $row->email);
                $sheet->setCellValue('K' . $x, $row->sekolah_asal);
                $sheet->setCellValue('L' . $x, $row->kampung);
                $sheet->setCellValue('M' . $x, $row->desa);
                $sheet->setCellValue('N' . $x, $row->kecamatan);
                $sheet->setCellValue('O' . $x, $row->ayah);
                $sheet->setCellValue('P' . $x, $row->nik_ayah);
                $sheet->setCellValue('Q' . $x, $row->pend_ayah);
                $sheet->setCellValue('R' . $x, $row->pek_ayah);
                $sheet->setCellValue('S' . $x, $row->no_ayah);
                $sheet->setCellValue('T' . $x, $row->ibu);
                $sheet->setCellValue('U' . $x, $row->nik_ibu);
                $sheet->setCellValue('V' . $x, $row->pend_ibu);
                $sheet->setCellValue('W' . $x, $row->pek_ibu);
                $sheet->setCellValue('X' . $x, $row->no_ibu);
                $x++;
            }
            $writer = new Xlsx($spreadsheet);
            $filename = 'Data Pendaftar PPDB';

            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
            header('Cache-Control: max-age=0');

            $writer->save('php://output');
        }
    }
}
