<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WorkOrder extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Users");
		$this->load->model("WorkOrder_Model");
		$this->load->helper('download');
		$this->load->library('form_validation');
		if($this->Users->isNotLogin()) redirect(site_url('login'));
	}
	public function index()
	{
		$data["complains"] = $this->WorkOrder_Model->getAll();
		$this->render_page('Complain', 'List-WorkOrder', $data);
	}

	public function viewByID($id = null) {
		$callModels = $this->WorkOrder_Model;
		$data = $callModels->getById($id);
		echo json_encode($data);
	}

	public function DownloadFile($FileName = null){
		$pathFile = 'assets/gambar/'.$FileName;
		force_download($pathFile,NULL);
	}

	public function add()
	{
		$callModels = $this->WorkOrder_Model;
		$validation = $this->form_validation;
		$validation->set_rules($callModels->rules());

		if ($validation->run()) {
			$callModels->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->render_page('Complain', 'Form-WorkOrder');
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect(base_url('workorder'));

		$callModels = $this->WorkOrder_Model;
		$validation = $this->form_validation;
		$validation->set_rules($callModels->rules());

		if ($validation->run()) {
			$callModels->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["workorder_content"] = $callModels->getById($id);
		if (!$data["workorder_content"]) show_404();

		$this->render_page('Complain', 'Edit-WorkOrder', $data);
	}

	public function updateStatus($status = null, $id = null){
		$this->Status = $status;
		if ($this->Status == 'on-progress') {
			$this->Status = 'On Progress';
		}else if ($this->Status == 'closed'){
			$this->Status = 'Closed';
		}else{
			$this->Status = 'Open';
		}
		$progress = $this->db->update('complain', $this, array('ID_COMPLAIN' => $id));

		if ($progress) {
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}else{
			$this->session->set_flashdata('warning', 'Gagal disimpan');
		}
		redirect(base_url('workorder'));
	}

	public function delete($id=null)
	{
		if (!isset($id)) show_404();

		if ($this->WorkOrder_Model->delete($id)) {
			$this->session->set_flashdata('success', 'Berhasil Dihapus');
			redirect(base_url('workorder'));
		}
	}
}
