<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    public function is_login()
    {
        $is_login = $this->session->userdata('auth');
        if (!empty($is_login)) 
        {
            return true;
        } else {
            return false;
        }
    }

    public function do_login()
    {
        $post = $this->input->post();
        if (!empty($post)) 
        {
            $username = @$post['username'];
            $password = @$post['password'];
            $user = $this->db->query('SELECT * FROM user WHERE username = ?', $username)->row_array();
            if (!empty($user)) 
            {
                if ($user['password'] == md5($password) || $user['password'] == $password) {
                    $this->session->set_userdata('auth', $user);
                    redirect(base_url());
                } else {
                    return '<div class="alert alert-danger" role="alert">Maaf User Dan Password Tidak Sesuai!</div>';
                }
            } else {
                return '<div class="alert alert-danger" role="alert">Maaf user '.$username.' tidak terdaftar</div>';
            }
        }
    }
}