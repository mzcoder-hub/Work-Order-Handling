<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Users");
		if($this->Users->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		if ($this->session->userdata['role'] == 'admin') {
			$data["complains"] = $this->Users->getAll();
			$this->render_page('Complain', 'Users', $data);
		}else{
			redirect(site_url('workorder/dashboard'));
		}
	}

	public function add(){
		$callModels = $this->Users;
		$validation = $this->form_validation;
		$validation->set_rules($callModels->rules());

		if ($validation->run()) {
			$callModels->insertUser();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->render_page('Complain', 'Form-User');
	}


	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->Users->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil Dihapus');
			redirect(base_url('user'));
		}
	}
}
