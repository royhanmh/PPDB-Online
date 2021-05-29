<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Summary_model extends CI_Model
{

    public function ambilPendaftar($limit, $start)
    {
        return $this->db->get('tbl_pendaftar', $limit, $start)->result_array();
    }

    public function hitungPendaftar()
    {
        return $this->db->get('tbl_pendaftar')->num_rows();
    }

    public function get_all()
    {

        $dataPendaftar = $this->db->get('tbl_pendaftar')->result();
        return $dataPendaftar;
    }

    public function get_by_id($id_daftar)
    {
        $this->db->where('id_daftar', $id_daftar);
        $this->db->from('tbl_pendaftar');

        $query = $this->db->get();
        return $query->row_array();
    }

    public function perbarui($data, $id_daftar)
    {
        $this->db->where('id_daftar', $id_daftar);
        return $this->db->update('tbl_pendaftar', $data);
    }

    public function hapus($id_daftar)
    {
        $this->db->where('id_daftar', $id_daftar);
        return $this->db->delete('tbl_pendaftar');
    }
}
