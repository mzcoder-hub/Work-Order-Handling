<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Users");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->Users->isLogged() == false){

        // tampilkan halaman login
            $this->load->view('Complain/Login');
        }else{
            redirect(base_url('dashboard'));
        }
        // jika form login disubmit
        if($this->input->post()){
            if($this->Users->doLogin()) redirect(base_url('dashboard'));
        }
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(base_url());
    }
}