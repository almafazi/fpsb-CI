<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function index()
	{
		$this->load->view('home');
	}
    public function route($uri)
	{
        if($uri == 'authorize') {
            if($this->admin_model->is_LoggedIn()) {
                redirect('admin/dashboard');
            }
        }
        $data = array(
            'data' => $this->admin_model->getRowByRole($uri,'page')
        );

		$this->load->view($uri,$data);
	}
}
