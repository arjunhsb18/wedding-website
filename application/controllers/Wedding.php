<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['kode_pemesan'] = $this->uri->segment(2);
		var_dump($data['kode_pemesan']);
		$this->load->view('welcome_message');
	}
	public function invitation(){
		$data['kode_pemesan'] = $this->uri->segment(3);
        $queryUcapanByName = $this->Usermodel->getUcapanByName($data['kode_pemesan']);
		$data['queryByName'] = $queryUcapanByName;
		$data['invited'] = rawurldecode($this->uri->segment(4));
		$this->load->view('welcome_message',$data);
	}
	public function kirim($param='Bapak/Ibu/Saudara/i'){
		$nama = $this->input->post('nama');
		$ucapan = $this->input->post('ucapan');
		$hadir = $this->input->post('hadir');
		$jumlah_hadir = $this->input->post('jumlah_hadir');

		$arrInsert = array(
			'kode_pemesan' => $this->uri->segment(1),
			'nama' => $nama,
			'ucapan' => $ucapan,
			'kehadiran' => $hadir,
			'jumlah_hadir' => $jumlah_hadir

		);

		$this->Usermodel->simpanucapan($arrInsert);
		redirect('daulatandanisa/to/'.urldecode($param));
	}
}
