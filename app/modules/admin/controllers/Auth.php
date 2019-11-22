<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

	public function login()
    {
        if($this->input->post('submit')){
            $this->load->model('admin/Admin_model');
            $condition                 = array('username' => $this->input->post('username'), 'password' => md5($this->input->post('password')));
			$user                      = $this->Admin_model->get($condition);
            if($user){
                $session['admin_id']       = $user->id;
                $session['admin_username'] = $user->username;
                $session['type']           = 'admin';
                $this->session->set_userdata($session);
                redirect(base_url('admin/user-list'));
            }else{
                redirect(base_url('admin'));
            }
        }else{
            $this->load->view('admin/login');
        }        
    }

    public function logout()
    {
        $this->session->sess_destroy();
		redirect(base_url('admin'));
    }
}
