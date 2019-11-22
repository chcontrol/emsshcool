<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends MX_Controller {

	public function History()
	{
		if($this->session->userdata('user_id') == ''){
            redirect(base_url());
        }
	}
	
	public function index()
	{
		$data['meta_title'] = 'ดูผลการสอบย้อนหลัง';
        $user_id = $this->session->userdata('user_id');        
        $this->load->model('History_model');
        $where['user_id'] = $this->session->userdata('user_id');
        $data['objs'] = $this->History_model->find($where);
        if($data['objs'] == NULL){
        	$data['objs'] = [];
        }
        $this->load->view('history',$data);
	}
}
