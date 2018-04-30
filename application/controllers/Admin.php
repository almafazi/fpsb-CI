<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('session');
    }

	public function index()
	{
        if(!$this->admin_model->is_LoggedIn()) {
            redirect('authorize');
        }
		redirect('admin/dashboard');
	}

    public function route($page='', $action='', $id='')
	{
        if(!$this->admin_model->is_LoggedIn()) redirect('authorize');

        $admin_url = base_url().'admin/dashboard';

        if($page == 'berita'):
            if($action=='view'):
                $data = array(
                        'admin_url' => $admin_url,
                        'record'    => $this->admin_model->getAll($page)
                    );
                $this->load->view('admin/'.$page.'/'.$action, $data);

            elseif($action=='add'):
                $data = array(
                        'admin_url' => $admin_url
                    );
                    $this->load->view('admin/'.$page.'/'.$action, $data);
            elseif($action=='save'):
                $insert = array(
                    'judul' => $this->input->post('judul'),
                    'konten'=> $this->input->post('konten'),
                    'status'=> $this->input->post('status')
                );
                $this->admin_model->insert($page,$insert);
                echo 'success';

            elseif($action=='edit'):
                $data = array(
                        'admin_url' => $admin_url,
                        'record'    => $this->admin_model->getRowById($id,$page),
                        'id'        => $id
                    );

                $this->load->view('admin/'.$page.'/'.$action, $data);

            elseif($action=='edit_save'):

                 $update = array(
                    'judul' => $this->input->post('judul'),
                    'konten'=> $this->input->post('konten'),
                    'status'=> $this->input->post('status'),
                    'id'    => $this->input->post('id')
                );

                $this->admin_model->update($page,$this->input->post('id'),$update);
                echo 'success';

            elseif ($action=='delete'):
                $this->admin_model->deleteById($page,$id);
                redirect(base_url().'admin/'.$page.'/view');
            endif;
        else:

            if($action=='view'):

                $data = $this->admin_model->getRowByRole($page,'page');
                $data = array(
                    'record' => $data,
                    'admin_url' => $admin_url
                );
                $this->load->view('admin/'.$page, $data);

            elseif ($action=='save'):

                $update = array(
                    'judul' => $this->input->post('judul'),
                    'konten'=> $this->input->post('konten')
                );
                $this->admin_model->updateByRole($page,$update,'page');
                echo 'success';

            endif;
        endif;
	}

    public function dashboard()
	{
        if(!$this->admin_model->is_LoggedIn()) {
            redirect('authorize');
        }

        $admin_url = base_url().'admin/dashboard';

        $data = array(
            'admin_url' => $admin_url
        );
		$this->load->view('admin/index',$data);
	}

    public function login()
    {
        if ($this->admin_model->is_LoggedIn()) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|callback_checkUsername');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_checkPassword');

        if ($this->form_validation->run() === false) {
            $this->load->view('authorize');
        } else {
            $user = $this->admin_model->get_user('username', $this->input->post('username'));

            $newdata = array(
               'user_id'  => $user['id'],
               'logged_in' => TRUE
            );

            $this->session->sess_expire_on_close = TRUE;
            $this->session->sess_expiration = 1800;
            $this->session->set_userdata($newdata);


            redirect('admin/dashboard');
        }
    }

    public function checkUsername($username)
    {
        if (!$this->admin_model->get_user('username', $username)) {
            $this->form_validation->set_message('checkUsername', 'Username Salah.');
            return false;
        }

        return true;
    }

    public function checkPassword($password)
    {
        $user = $this->admin_model->get_user('username',$this->input->post('username'));

        if(!$this->admin_model->checkPassword($user['username'], $password)) {
            $this->form_validation->set_message('checkPassword', 'password salah.');
            return false;
        }

        return true;
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        redirect('authorize');
    }
}
