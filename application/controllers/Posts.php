<?php

class Posts extends CI_Controller{

	public function index(){


      $data ['posts'] = $this->post_model->get_posts();
       
		$data['title']='Latest Posts';
		$this->load->view('templates/header');
		$this->load->view('posts/index',$data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL){

		$data['posts'] = $this->post_model->get_posts($slug);
		if(empty($data['posts'])){
			show_404();
		}
		$data['title'] =$data['posts']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view', $data);
		$this->load->view('templates/footer');
	}

	public function create(){

		 $data['title'] = "Create An Artifex";
		 $this->form_validation->set_rules('title' ,'Title' ,'required');
		 $this->form_validation->set_rules('body' ,'Body','required');
		 
		 if($this->form_validation->run()===FALSE){
		 $this->load->view('templates/header');
		 $this->load->view('posts/create.php', $data);
		 $this->load->view('templates/footer');
	
        }else{
        	$this->post_model->create_post();
        	redirect('posts');
        }

	}

}

?>