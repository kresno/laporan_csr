<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
		$this->load->model('m_laporan');
	}
	
	public function index()
	{
		$data['laporan'] = $this->m_laporan->getall();
		
		$this->load->view('template/header');
		$this->load->view('laporan/content', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{

		$this->load->view('template/header');
		$this->load->view('laporan/create');
		$this->load->view('template/footer');
	}

	public function store()
	{
		$data =array();
		
		$data['tahun'] = $this->input->post('tahun');
		$data['nama'] = $this->input->post('nama');
		$data['bidang'] = $this->input->post('bidang');
		$data['anggaran'] = $this->input->post('anggaran');
		$data['sasaran'] = $this->input->post('sasaran');
		$data['lokasi'] = $this->input->post('lokasi');
		$data['nama_kegiatan'] = $this->input->post('nama_kegiatan');
		$data['tanggal_pelaksanaan'] = $this->input->post('tanggal_pelaksanaan');

		$nama = $this->input->post('nama');
		$bidang = $this->input->post('bidang');

		$config['upload_path']          = dirname($_SERVER["SCRIPT_FILENAME"]).'/public/upload/dokumen/';
		$config['allowed_types']        = 'pdf';
	    $config['max_size']             = 5000;
		$config['file_name']            = rand(0,1000).'-'.$nama.'_'.$bidang.'_'.date("Y-m-d");

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
				
		if (!$this->upload->do_upload('file')) {
            $error = $this->upload->display_errors();
			
			// menampilkan pesan error
            print_r($error);
        } else {
			$result = $this->upload->data();
			$data['file'] = $result['file_name'];
            $this->M_laporan->insert($data);

            echo "<script>alert('Upload Berhasil') ; window.location.href = '../laporan' </script>";
        }

	}
}
