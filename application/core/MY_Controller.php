<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	function render_page($dirTheme, $content, $data = NULL){
		$this->load->view($dirTheme.'/Partials/Header');
		// $this->load->view($dirTheme.'/Template_part/Sidebar');
		// $this->load->view($dirTheme.'/Template_part/TopBar');
		$this->load->view($dirTheme.'/'.$content, $data);
		$this->load->view($dirTheme.'/Partials/Footer');
	}
	function render_simple($dirTheme, $content, $data = NULL){
		$this->load->view($dirTheme.'/Template_part/Header');
		$this->load->view($dirTheme.'/'.$content, $data);
		$this->load->view($dirTheme.'/Template_part/Footer');
	}
}


