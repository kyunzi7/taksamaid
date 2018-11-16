<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_register');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'navbar' => 'template/navbar',
			'aside' => 'template/aside',
			'content' => 'admin/dashboard',
			'footer'=> 'template/footer',
			'pmb' => $this->m_register->countPMB(),
			'paid' => $this->m_register->countPMBPaid(),
			'unpaid' => $this->m_register->countPMBUnPaid()
		);
		$this->load->view('template/index',$data);
	}

	function getNotif(){
		$data = $this->m_register->detailNotif();
		echo json_encode($data);
	}

	

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */