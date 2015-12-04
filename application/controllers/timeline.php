<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Timeline extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('timeline_model');
	}

	public function index(){
		if(($this->session->userdata('user_name')==""))
		{
			redirect ('/user');
		}
		else{
			$data['timeline'] = $this->timeline_model->get_post();
			$this->load->view('view_timeline', $data);
			//redirect('/timeline');
		}

	}

	public function input(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('caption', 'Caption', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('location', 'Location', 'trim|required|');

		if($this->form_validation->run() == FALSE)
		{
			redirect ('beranda');
		}
		else
		{
			$this->timeline_model->add_timeline();
			redirect('timeline');
		}
	}

	
}	
?>