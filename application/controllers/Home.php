<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
        if (!$this->AuthModel->is_login()) {
            redirect('auth/login');
        }
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['title'] = 'Halaman Data User';
        $data['users'] = $this->M_user->SemuaData();
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index' , $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah User';
        $data['users'] = $this->M_user->SemuaData();
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_data' , $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah_data()
    {
        $this->M_user->proses_tambah_data();
        $this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('Home');
    }

    public function hapusData($id)
    {
        $this->M_user->hapusData($id);
        $this->session->set_flashdata('pesan' , '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');
        redirect('Home');
    }

    public function edit_data($id)
    {
        $data['title'] = 'Halaman Edit User';
        $data['user'] = $this->M_user->ambil_id_user($id);
        $this->load->view('templates/header' , $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit_data($id = null)
    {
        $this->M_user->proses_edit_data($id);
        $this->session->set_flashdata('pesan' , '<div class="alert alert-success" role="alert">Data Berhasil Diedit!</div>');
        redirect('Home');
    }
}