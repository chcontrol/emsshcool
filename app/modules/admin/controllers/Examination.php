<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examination extends MX_Controller {

	public function Examination()
	{
		if($this->session->userdata('type') != 'admin'){
			redirect(base_url('admin'));
		}
		//check admin
		$this->load->model('admin/Examination_model');
	}
	
	public function index()
	{		
		$data['users'] = $this->Examination_model->find();		
		$this->load->view('admin/exam/list',$data);
	}

	public function edit($id = NULL)
	{
		$where['id'] = $id;
		$obj = $this->Examination_model->get($where);
		$data['obj'] = $obj;
		$data['id']  = $id;
		$this->load->view('admin/exam/edit',$data);
	}

	public function update($id = NULL)
	{
		$where['id']       = $id;
		$new_data['name']  = $this->input->post('name');		
		$this->Examination_model->update($where,$new_data);		
		redirect(base_url('admin/exam-list'));
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

		$condition_like_search = ['id','name'];		
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

		$return['data'] = $this->Examination_model->get_ajax($lenght,$start,$order_by,$direction,NULL,$condition_like);		
		$sum = $this->Examination_model->count_ajax();		
		
		$return['recordsFiltered']            = $sum;
		$return['recordsTotal']               = $sum;
		$return['draw']                       = $draw;
		echo json_encode($return);
	}
}
