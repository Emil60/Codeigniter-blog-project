<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

    public function __construct()
    {
        parent :: __construct();
        {
            $this->security();
        }
    }

    function security()
    {
        $control = $this->session->userdata('control');
        if(!isset($control) || $control != true)
        {
            redirect('admin');
        }
    }

    public function index()
	{
		$this->load->model('dbase');
        $count = $this->dbase->getmessages();
        $data['count']=$count;
        $this->load->view('admin/index',$data);
    }
    public function shairings()
	{
        $this->load->model('dbase');
        $gets = $this->dbase->getposts();
        $data = new stdClass;
        $count = $this->dbase->getmessages();
       // $data['count']=$count;
        $data->info=$gets;
        $data->count=$count;
		$this->load->view('admin/shairings',$data);
    }
    public function addPost()
	{
		$this->load->view('admin/addPost');
    }
    public function insertPost()
	{
		$category = $this->input->post('category');
		$title = $this->input->post('title');
		$text = $this->input->post('text');
        $date = date('d-M-Y');
        $data = array("title"=>$title,
                        "category"=>$category,
                        "text"=>$text,
                        "date"=>$date,
                        "link"=>sef($title),
                        "views"=>0);
        $this->load->model('dbase');
        $result = $this->dbase->addpost($data);
        if($result)
        {
            $this->session->set_flashdata('info_post','<div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                                </button>
                                                Post added successfully
                                                </div>');
            redirect('adminpanel/shairings');
        }
        else
        {
            $this->session->set_flashdata('info_post','<div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                                </button>
                                                Some error happend please try again
                                                </div>');
            redirect('adminpanel/addPost');
        }

    }
    public function deletePost($id)
	{
        $this->load->model('dbase');
        $this->dbase->deletepost($id);
        redirect('adminpanel/shairings');
        
    }
    
    public function updatePost($id)
	{
        
        $this->load->model('dbase');
        $infopost = $this->dbase->infopost($id);
        //print_r( $infopost);
         $data['info']=$infopost;
         $this->load->view('admin/updatepost',$data);
         
            
    }
    public function updatePostt($id)
	{
    $category = $this->input->post('category');
            $title = $this->input->post('title');
            $text = $this->input->post('text');
            
            $datas = array("title"=>$title,
                        "category"=>$category,
                        "text"=>$text,
                        "link"=>sef($title)
                        );
            $this->load->model('dbase');
            $result = $this->dbase->updatepost($id,$datas);
            if($result)
            {
                $this->session->set_flashdata('info_post','<div class="alert alert-success alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                    ×
                                                    </button>
                                                    Post updated successfully
                                                    </div>');
                redirect('adminpanel/shairings');
            }
            else
            {
                $this->session->set_flashdata('info_post','<div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                    ×
                                                    </button>
                                                    Some error happend please try again
                                                    </div>');
                redirect('adminpanel/updatePost');
            }
    }

    public function getmessages()
	{
        $this->load->model('dbase');
        $count = $this->dbase->getmessages();
        $data['count']=$count;
        $this->load->view('admin/index',$data);
        
    }
    public function messagebox()
	{
        
        $this->load->view('admin/messagebox');
        
    }
}