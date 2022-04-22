<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("WorkOrder_Model");
		$this->load->model("Users");
		if($this->Users->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		$data['open'] = $this->WorkOrder_Model->getStatusCount('Open');
		$data['close'] = $this->WorkOrder_Model->getStatusCount('Closed');
		$data['onprog'] = $this->WorkOrder_Model->getStatusCount('On Progress');
		$data["complains"] = $this->WorkOrder_Model->getAll();
		$this->render_page('Complain', 'Report', $data);
	}
	public function add_info(){
		$post = $this->input->post();
		$id = $post['ID_COMPLAIN'];

		$this->Add_info = $post['AddInfo'];
		$CallModels = $this->db->update('complain', $this, array('ID_COMPLAIN' => $id));

		if($CallModels) {
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect(site_url('report'));
		}else{
			$this->session->set_flashdata('warning', 'Ada Masalah');
			redirect(site_url('report'));
		}
	}
}
