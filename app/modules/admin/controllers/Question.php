<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends MX_Controller {

	public function __construct()
	{
		if($this->session->userdata('type') != 'admin'){
			redirect(base_url('admin'));
		}
		//check admin
		$this->load->model('admin/Question_model');
		$this->load->model('admin/Examination_model');
	}

	public function exam($id)
	{		
		$condition_exam['id'] = $id;
		$data['exam']         = $this->Examination_model->get($condition_exam);
		$condition['exam_id'] = $id;		
		$data['objs']         = $this->Question_model->find($condition,NULL,NULL,NULL,'id');
		$data['id']           = $id;
		$this->load->view('admin/question/list',$data);
	}

	public function edit($id = NULL)
	{
		$where['id'] = $id;
		$obj = $this->Question_model->get($where);
		$data['obj']     = $obj;
		$data['exam_id'] = $obj->exam_id;
		$data['id']      = $id;
		$this->load->view('admin/question/edit',$data);
	}

	public function update($id = NULL)
	{
		$where['id']                       = $id;
		$new_data['question']              = $this->input->post('question');
		$this->Question_model->update($where,$new_data);		
		$this->load->model('exams/Exam_Ans_Model');
		$ans_condition['exam_question_id'] = $id;
		$ans_new_data['correctness']       = 0;
		$this->Exam_Ans_Model->update($ans_condition,$ans_new_data);
		$ans_condition['id']         = $this->input->post('correctness');
		$ans_new_data['correctness'] = 1;
		$this->Exam_Ans_Model->update($ans_condition,$ans_new_data);
		$new_ans = $this->input->post('ans');
		foreach ($new_ans as $key => $value) {
			$new_ans_condition['id'] = $key;
			$new_ans_new_data['answers'] = $value;
			$this->Exam_Ans_Model->update($new_ans_condition,$new_ans_new_data);
		}		
		redirect(base_url('admin/question/'.$id.'/edit'));
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

		$return['data'] = $this->Question_model->get_ajax($lenght,$start,$order_by,$direction,NULL,$condition_like);				
		$sum = $this->Question_model->count_ajax(NULL,$condition_like);		
		
		$return['recordsFiltered']            = $sum;
		$return['recordsTotal']               = $sum;
		$return['draw']                       = $draw;
		echo json_encode($return);
	}
}
