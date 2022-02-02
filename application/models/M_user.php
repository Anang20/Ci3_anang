<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model 
{
    public function semuaData()
    {
       return $this->db->get('user')->result_array();
    }    

    public function proses_tambah_data()
    {
        $data = [
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
        ];

        $this->db->insert('user', $data);
    }

    public function hapusData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function ambil_id_user($id)
    {
       return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}