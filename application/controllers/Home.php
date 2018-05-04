<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
		$this->load->model('Post_model');
    }

	public function index()
	{
        $data = array(
            'posts' => $this->admin_model->getAllPost('berita',3),
            'visi' => $this->admin_model->getRowByRole('home_visi','page'),
            'misi' => $this->admin_model->getRowByRole('home_misi','page'),
            'grand_theme' => $this->admin_model->getRowByRole('home_grand_theme','page')
        );
		$this->load->view('home',$data);
	}

    public function route($uri)
	{
        if($uri == 'authorize') {
            if($this->admin_model->is_LoggedIn()) {
                redirect('admin/dashboard');
            }
        }
        if($uri == 'berita') {
            $this->load->library('pagination');

            $config['base_url'] = base_url('berita/');
            $config['total_rows'] = $this->Post_model->total_rows('berita');
            $config['per_page'] = 5;

            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close']= '<div class="ripple-container"></div></li>';
            $config['prev_link'] 	= '<span class="page-link">Previous</span>';
            $config['prev_tag_open']='<li class="page-item">';
            $config['prev_tag_close']='</li>';
            $config['next_link'] 	= '<span class="page-link">Next</span>';
            $config['next_tag_open']='<li class="page-item">';
            $config['next_tag_close']='</li>';
            $config['cur_tag_open']='<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']='<span class="sr-only">(current)</span></span></li>';
            $config['first_tag_open']='<li class="page-item">';
            $config['first_tag_close']='</li>';
            $config['last_tag_open']='<li class="page-item">';
            $config['last_tag_close']='</li>';
            $config['attributes'] = array('class' => 'page-link');
            $this->pagination->initialize($config);

            $limit = $config['per_page'];
            $offset = (int) $this->uri->segment(2);

            $data = array(
            'record' => $this->Post_model->read('berita', $limit, $offset),
            'data' => $this->admin_model->getRowByRole($uri,'page'),
            'pagination' => $this->pagination->create_links()
        );
        } else {

        $data = array(
            'data' => $this->admin_model->getRowByRole($uri,'page')
        );

        }

		$this->load->view($uri,$data);
	}

    public function artikel($slug)
	{
        $data = array(
            'data' => $this->admin_model->getRowBySlug($slug,'berita')
        );

		$this->load->view('artikel',$data);
	}
}
