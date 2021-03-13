<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function exit()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
	public function index()
	{
		$this->load->view('admin/login');
    }

    public function panel()
	{
		$this->load->view('admin/index');
    }


    public function login()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','E-Mail','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');

        $this->form_validation->set_message('required','<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        %s field is empty.
    </div>');

        if($this->form_validation->run())
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('dbase');
            $result = $this->dbase->loginCheck($email,$password);
            if($result)
            {
                $this->session->set_userdata('control',true);
                $this->session->set_userdata('info',$result);
                redirect('adminpanel');
            }
            else
            {
                $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                You Are not here.
            </div>');
            redirect('admin/login');
            }
        }
        else
        {
            $this->load->view('admin/login');

        }

	}
}
