<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->model('dbase');
		$result = $this->dbase->getposts();
		$data = new stdClass;
		$data->info=$result;
		$data->infos=null;
		$data->headinfo='Home page';
		$this->load->view('index',$data);
	}
	public function postdetail($id)
	{
		$this->load->model('dbase');
		$result = $this->dbase->infopost($id);
		$data['infos']=$result;
		$gets = $this->dbase->getposts();
		
		$data['fullinfo']=$gets;
        $this->load->view('postdetail',$data);
	}
	public function about()
	{
		$data = new stdClass;
		$data->infos=null;
		$data->headinfo='About Us';
        $this->load->view('about',$data);
	}
	public function contact()
	{
		$data = new stdClass;
		$data->infos=null;
		$data->headinfo='Contact with us';
        $this->load->view('contact',$data);
	}
	public function sendmessage()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$date = date('d-M-Y');
		$data = array('name'=>$name,
					  'email'=>$email,
					  'subject'=>$subject,
					  'message'=>$message,
					  'date'=>$date);
		$this->load->model('dbase');
		$result = $this->dbase->insertmessage($data);
		if($result)
		{
			$this->session->set_flashdata('messinfo','<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			We got your message and we will return you as soon as possible. 
		</div>');
			redirect('contact');
		}
	}

}
