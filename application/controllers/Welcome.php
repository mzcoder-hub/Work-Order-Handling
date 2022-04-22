<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Users");
		if($this->Users->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		$this->render_page('Complain', 'index');
	}
}
