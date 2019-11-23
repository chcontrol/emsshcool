<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends MX_Controller {

    public function pretest($exam_id)
    {        
        $this->load->model('exams/Exam_Question_Model');
        $where['exam_id'] = $exam_id;
        $order_by = 'id ASC';
        $exams = $this->Exam_Question_Model->find($where, NULL, NULL, NULL, $order_by);
        if($exams){            
            $data['exams']     = $exams;
            $data['exam_id']   = $exam_id;
            $data['type']      = 'pre';
            $data['exam_type'] = 1;
            $this->load->view('exams', $data);
        }else{
            show_404();
        }
    }

    public function posttest($exam_id)
    {
        $get_exam_id = $exam_id;
        if($exam_id == 4){
            //กรณีแบบทดสอบก่อนเรียน - หลังเรียน ข้อสอบเป็นคนละชุดกัน>>>  $get_exam_id = 5;
            $get_exam_id = 4;
        }
        $this->load->model('exams/Exam_Question_Model');
        $where['exam_id'] = $get_exam_id;
        $order_by = 'id ASC';
        $exams = $this->Exam_Question_Model->find($where, NULL, NULL, NULL, $order_by);
        if($exams){            
            $data['exams']      = $exams;
            $data['exam_id']    = $get_exam_id;
            $data['type']       = 'post';
            $data['exam_type']  = 2;
            $this->load->view('exams', $data);
        }else{
            show_404();
        }    
    }

    public function get_ans($question_id)
    {
        $this->load->model('exams/Exam_Ans_Model');
        $where['exam_question_id'] = $question_id;
        $objs = $this->Exam_Ans_Model->find($where, NULL, NULL, NULL, 'id ASC');
        return $objs;
    }

    public function submit()
    {
        // check score
        $this->check_score();
        // update exam
        $this->load->model('exams/Exam_Result_Model');
        $data['user_id'] = $this->session->userdata('user_id');
        $data['score']   = $this->check_score();
        $data['status']  = $this->input->post('exam_type');
        $data['exam_id'] = $this->input->post('exam_id');                
        if($data['exam_id'] == 5){
            $data['exam_id'] = 4;
        }
        $this->Exam_Result_Model->insert($data);
        // update user info    
        redirect(base_url('history'));
    }

    private function check_score()
    {
        $questions = $this->input->post('questions');        
        $this->load->model('exams/Exam_Ans_Model');
        $score = 0;
        foreach ($questions as $key => $value) {
            $where['exam_question_id'] = $key;
            $where['id'] = $value;
            $where['correctness'] = 1;
            $existing = $this->Exam_Ans_Model->existing($where);            
            if($existing){
                $score++;
            }            
        }
        return $score;
    }

    public function check_pretest($exam_id = NULL)
    {        
        $user_id = $this->session->userdata('user_id');
        $this->load->model('exams/Exam_Result_Model');
        $where['exam_id'] = $exam_id;
        $where['user_id'] = $user_id;
        $where['status']  = 1;
        $return = $this->Exam_Result_Model->existing($where);        
        return $return;
    }
}
