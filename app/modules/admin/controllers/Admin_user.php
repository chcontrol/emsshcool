<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user extends MX_Controller {

	public function __construct()
	{
		if($this->session->userdata('type') != 'admin'){
			redirect(base_url('admin'));
		}
		//check admin
		$this->load->model('users/User_model');
	}
	
	public function index()
	{		
		$data['users'] = $this->User_model->find();		
		$this->load->view('list',$data);
	}

	public function show($id = NULL)
	{
		$this->load->model('history/History_model');
		$this->load->model('users/User_model');
		$data['meta_title']     = 'ดูผลการสอบย้อนหลัง';        
        $where['user_id'] 		= $id;
        $data['objs']     		= $this->History_model->find($where);
		$where_user['id']       = $id;
        $data['user']     		= $this->User_model->get($where_user);
        if($data['objs'] == NULL){
        	$data['objs'] = [];
        }
        $this->load->view('show',$data);
	}

	public function printer($id = NULL)
	{
		$this->load->model('history/History_model');
		$this->load->model('users/User_model');
		$data['meta_title']     = 'ดูผลการสอบย้อนหลัง';        
        $where['user_id'] 		= $id;
        $data['objs']     		= $this->History_model->find($where);
		$where_user['id']       = $id;
        $data['user']     		= $this->User_model->get($where_user);
        if($data['objs'] == NULL){
        	$data['objs'] = [];
        }
        // echo 'test';
        $this->load->view('print',$data);
	}

	public function edit($id = NULL)
	{
		$where['id'] = $id;
		$obj = $this->User_model->get($where);		
		$data['obj'] = $obj;
		$data['id']  = $id;
		$this->load->view('edit',$data);
	}

	public function update($id = NULL)
	{
		$where['id']       = $id;
		$new_data['name']  = $this->input->post('name');
		$new_data['email'] = $this->input->post('email');
		$this->User_model->update($where,$new_data);		
		redirect(base_url('admin/users/'.$id.'/edit'));
	}

	public function delete($id = NULL)
	{
		$where['id'] = $id;
		$this->User_model->update($where);
		redirect(base_url('admin/user-list'));
	}

	public function get()
	{
		$input          = $this->input->get();
		$order_by       = 'created_at';
		$direction      = 'DESC';
		$condition_like = false;
		$lenght         = $input['length'];
		$draw           = $input['draw'];
		$start          = $input['start'];

		$condition_like_search = ['id','username','email'];		
		if(isset($input['columns'][0]['searchable'])&&$input['columns'][0]['searchable']) {
			$order_by  = $input['columns'][$input['order'][0]['column']]['data'];
			$direction = $input['order'][0]['dir'];
		}		
		if(isset($input['search']['value'])) {
			$search = rawurldecode($input['search']['value']);
		}
		if($search!=''&&$condition_like_search[0]!=''){
			$temp = array();
			foreach ($condition_like_search as $value) {
				$temp[$value] = $search;
			}
			$condition_like = $temp;
		}	

		$return['data'] = $this->User_model->get_ajax($lenght,$start,$order_by,$direction,NULL,$condition_like);				
		$sum = $this->User_model->count_ajax(NULL,$condition_like);		
		
		$return['recordsFiltered']            = $sum;
		$return['recordsTotal']               = $sum;
		$return['draw']                       = $draw;
		echo json_encode($return);
	}
}
