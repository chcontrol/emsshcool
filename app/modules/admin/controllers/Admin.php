<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

	public function Admin()
	{
		if($this->session->userdata('type') != 'admin'){
			redirect(base_url('admin'));
		}
		//check admin
		$this->load->model('admin/Admin_model');
	}
	
	public function index()
	{		
		$data['users'] = $this->Admin_model->find();		
		$this->load->view('admin/admin/list',$data);
	}

	public function create()
	{
		$this->load->view('admin/admin/create');
	}

	public function insert()
	{
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');
		if($password == $password2){
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($password);
			$obj = $this->Admin_model->insert($data);
			redirect(base_url('admin/admin-list'));
		}else{
			$this->session->set_flashdata('error', 'รหัสผ่านไม่ตรงกัน');
			redirect(base_url('admin/admin/create'));
		}
	}

	public function edit($id = NULL)
	{
		$where['id'] = $id;
		$obj = $this->Admin_model->get($where);
		$data['obj'] = $obj;
		$data['id']  = $id;
		$this->load->view('admin/admin/edit',$data);
	}

	public function update($id = NULL)
	{
		$where['id']       = $id;
		$new_data['name']  = $this->input->post('name');
		$new_data['email'] = $this->input->post('email');
		$this->Admin_model->update($where,$new_data);		
		redirect(base_url('admin/admins/'.$id.'/edit'));
	}

	public function delete($id = NULL)
	{
		$where['id'] = $id;
		$this->Admin_model->delete($where);
		redirect(base_url('admin/admin-list'));
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

		$condition_like_search = ['id','username'];		
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

		$return['data'] = $this->Admin_model->get_ajax($lenght,$start,$order_by,$direction,NULL,$condition_like);				
		$sum = $this->Admin_model->count_ajax(NULL,$condition_like);		
		
		$return['recordsFiltered']            = $sum;
		$return['recordsTotal']               = $sum;
		$return['draw']                       = $draw;
		echo json_encode($return);
	}

	public function change_password()
	{
		$type = $this->input->post('type');
		if($type == 'admin'){
			$password = $this->input->post('password');
			$password2 = $this->input->post('password2');
			$id = $this->input->post('id');
			if($password == $password2){
				$data['password']     = md5($password);			
				$where['id']          = $id;
				$new_data['password'] = $data['password'];
				$obj                  = $this->Admin_model->update($where,$new_data);
				redirect(base_url('admin/admin-list'));
			}else{
				$this->session->set_flashdata('error', 'รหัสผ่านไม่ตรงกัน');
				redirect(base_url('admin/admins/'.$id.'/edit'));
			}
		}
	}
}
