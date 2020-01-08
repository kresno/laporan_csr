<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *	
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_laporan');
	}

	public function index()
	{
		$data['angkeg'] = $this->M_laporan->getdataangkeg();
		$data['dataper'] = $this->M_laporan->getdataper();
		
		$this->load->view('template/header');
		$this->load->view('welcome_message', $data);
		$this->load->view('template/footer');
	}
}
