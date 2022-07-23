<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('Usermodel');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == false){
			$this->load->view('admin_login');
		}else{
			$this->_login();
		}
		
	}
	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username'=>$username])->row_array();
		
		if($user){
			if($user['is_active'] ==1){
				if($password==$user['password']){
					$data = [
						'username' => $user['username']
					];
					$this->session->set_userdata($data);
					redirect('admin/home');
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Password Anda salah</div>');
					redirect('admin/');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Username tidak aktif</div>');
				redirect('admin/');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Username tidak ditemukan </div>');
			redirect('admin/');
		}
	}
	public function home(){
		if (!$this->session->has_userdata('username')){
			redirect('admin/');
		}else{
			$data['user'] = $this->db->get_where('user',['username'=>$this->session->userdata('username')])->row_array();
			$data['kode_pemesan'] = $data['user']['username'];
			$numRowsLink = $this->Usermodel->getNumRows('link', $data['kode_pemesan']);
			$numRowsUcapan = $this->Usermodel->getNumRows('ucapan', $data['kode_pemesan']);
			$jumlahKonfHadir = $this->Usermodel->jumlahKonfirmasiHadir($data['kode_pemesan']);
			$jumlahHadir = $this->Usermodel->jumlahHadir($data['kode_pemesan']);
			$data['numrowslink'] = $numRowsLink;
			$data['numrowsucapan'] = $numRowsUcapan;
			$data['jumlahkonfhadir'] = $jumlahKonfHadir;
			$data['jumlahhadir'] = $jumlahHadir;
			$this->load->view('admin_dashboard',$data);
		}
		
	}
    public function buatundangan(){
		$data['user'] = $this->db->get_where('user',['username'=>$this->session->userdata('username')])->row_array();
		$data['kode_pemesan'] = $data['user']['username'];
		$queryLinkByName = $this->Usermodel->getLinkByName($data['kode_pemesan']);
		$data['queryByName']=$queryLinkByName;
        $this->load->view('admin_buatundangan',$data);
    }
    public function ucapandoa(){
		$data['user'] = $this->db->get_where('user',['username'=>$this->session->userdata('username')])->row_array();
		$data['kode_pemesan'] = $data['user']['username'];
        $queryUcapanByName = $this->Usermodel->getUcapanByName('daulatandanisa');
		$data['queryByName'] = $queryUcapanByName;
        //$data = array('queryByName'=> $queryUcapanByName);
        $this->load->view('admin_ucapandoa',$data);
    }
	public function buatlink(){
		$nama = $this->input->post('nama');
		$kode_pemesan = $this->input->post('kode_pemesan');
		$link = base_url().$kode_pemesan.'/to/'.rawurlencode($nama);
		$arrInsert = array(
			'kode_pemesan' => $kode_pemesan,
			'nama_diundang' => $nama,
			'link_undangan' => $link
		);
		$this->Usermodel->simpanlink($arrInsert);
		redirect('admin/buatundangan');
	}
	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Usermodel->hapusLink(intval($id));
		redirect('admin/buatundangan');
	}
	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Anda berhasil logout </div>');
			redirect('admin/');
	}
}
