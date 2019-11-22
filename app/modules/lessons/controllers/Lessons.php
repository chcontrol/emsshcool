<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lessons extends MX_Controller {

	public function Lessons()
	{		
		if($this->session->userdata('user_id') == ''){
            redirect(base_url());
        }		
	}
	public function index()
	{
		$this->load->view('lessons');
	}

	public function lesson($lesson = NULL)
	{
		$check = check_pretest($lesson);		
		if(!$check){
			redirect(base_url('pretest/'.$lesson));	
		}
		if($lesson==1){
			$data['meta_title'] = 'อาสาฉุกเฉินชุมชน (อฉช.)';
		}else if($lesson == 2){
			$data['meta_title'] = 'อาการเจ็บป่วยฉุกเฉิน';
		}else if($lesson == 3){
			$data['meta_title'] = 'ขั้นตอนการแจ้งเหตุ 1669';
		}else if($lesson == 4){
			$data['meta_title'] = 'ระบบปฏิบัติการการแพทย์ฉุกเฉิน';
		}else if($lesson == 5){
			$data['meta_title'] = 'การช่วยฟื้นคืนชีพขั้นพื้นฐาน CPR';
		}else if($lesson == 6){
			$data['meta_title'] = 'ภาวะภัยพิบัต';
		}
		$data['type'] = 'lesson';
		$this->load->view('lesson-'.$lesson,$data);
	}

	public function ems_rally()
	{
		$data['type'] = 'media';
		$this->load->view('lesson-4-2',$data);
	}

	public function addition_contents()
	{
		$this->load->view('addition-contents');
	}

	public function addition_content($content)
	{
		$this->load->view('addition-contents-'.$content);
	}

	public function media($lesson = NULL)
	{
		$data['type'] = 'media';
		$this->load->view('media-'.$lesson,$data);
	}
}
