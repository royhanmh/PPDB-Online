<?php
defined('BASEPATH') or exit('No direct access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Administrator Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $users = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($users) {
            if ($users['is_active'] == 1) {

                if (password_verify($password, $users['password'])) {
                    $data = [
                        'email' => $users['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_tempdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>', 10);
                    redirect('auth');
                }
            } else {
                $this->session->set_tempdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Diaktivasi</div>', 10);
                redirect('auth');
            }
        } else {
            $this->session->set_tempdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar</div>', 10);
            redirect('auth');
        }
    }

    public function logout()
    {
        if ($email = $this->session->userdata('email') == null) {
            $data['title'] = 'Administrator Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('login');
            $this->load->view('templates/auth_footer');
        } else {

            $this->session->unset_userdata('email');
            $this->session->set_tempdata('message', '<div class="alert alert-success" role="alert">Selamat Anda Telah Logout</div>', 10);
            redirect('auth');
        }
    }
}
