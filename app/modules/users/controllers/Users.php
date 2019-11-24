<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/autoload.php';

class Users extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function login()
	{
		if($this->input->post('submit')){			
			$condition = array('email' => $this->input->post('email'), 'password' => md5($this->input->post('password')));			
			$user = $this->User_model->get($condition);
			if($user !== NULL){
				$this->session->set_userdata(array(				
					'user_id'  => $user->id,
					'fb_id'    => $user->fb_id,
					'fb_name'  => $user->name,
					'fb_email' => $user->email					
				));
				redirect(base_url('sections'));
			}else{
				// email pass is wrong	
				$this->session->set_flashdata('error', 'อีเมล์ หรือ รหัสผ่านผิด');
				redirect(base_url('login'));
			}
		}else{
			$fb = new Facebook\Facebook([
				'app_id' => FACEBOOK_APP,
				'app_secret' => FACEBOOK_SECERT,
				'default_graph_version' => FACEBOOK_VERSION,
			]);
			$helper = $fb->getRedirectLoginHelper();
			$permission = ['email'];
			$login_url = $helper->getLoginUrl(base_url('graph'), $permission);
			$data['login_url'] = $login_url;
			$this->load->view('login',$data);
		}		
	}


	public function sign_up()
	{		
		if($this->input->post('submit')){			
			$data['email'] = $this->input->post('email');
			$data['name']  = $this->input->post('name');					
			$data['class_room']  = $this->input->post('class_room');					
			$data['room_no']  = $this->input->post('room_no');					
			$data['school']  = $this->input->post('school');					
			$data['password'] = md5($this->input->post('password'));
			$user = $this->User_model->get(array('email' => $data['email']));
			if($user !== NULL){
		// 		echo 'สมัครแล้ว';
			}else{
				$id = $this->User_model->insert($data);			
				$this->session->set_userdata(array(				
					'user_id'  => $id,
					'fb_name'  => $data['name'],
					'fb_email' => $data['email'],
					'pretest'  => 0
				));
			}				
			redirect(base_url('sections'));
		}else{
			$this->session->set_userdata(array(
					'fb_id'    => '',
					'fb_name'  => '',
					'fb_email' => ''
				));
			$this->load->view('sign-up');
		}		
	}	

    public function graph()
	{
		$fb = new Facebook\Facebook([
		  	'app_id' => FACEBOOK_APP,
	  		'app_secret' => FACEBOOK_SECERT,
	  		'default_graph_version' => FACEBOOK_VERSION,
		]);
		$helper = $fb->getRedirectLoginHelper();				
		try{
		  	$accessToken = $helper->getAccessToken();
		  	if(isset($accessToken)){
			  	if(! $accessToken->isLongLived()){
			  		try {
				    	$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
				  	}catch(Facebook\Exceptions\FacebookSDKException $e){
				    	//echo "Error getting long-lived access token: " . $helper->getMessage();
				    	//exit;
				  	}
				}
			}
		}catch(Facebook\Exceptions\FacebookResponseException $e){
		  	//echo 'Graph returned an error: ' . $e->getMessage();
		  	//exit;
		}catch(Facebook\Exceptions\FacebookSDKException $e){
		  	//echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  	//exit;
		}

		if(isset($accessToken)){
			try{
			  	$response = $fb->get('/me?fields=id,name,email', $accessToken);
			}catch(Facebook\Exceptions\FacebookResponseException $e){
			  	//echo 'Graph returned an error: ' . $e->getMessage();
			  	//exit;
			}catch(Facebook\Exceptions\FacebookSDKException $e){
			  	//echo 'Facebook SDK returned an error: ' . $e->getMessage();
			  	//exit;
			}
			if(isset($response)){
				$fb_user = $response->getGraphUser();												
				// check user in system
				if(!isset($fb_user['email'])){
					$this->session->set_flashdata('error', 'ไม่สามารถถึง email มาได้กรุณาสมัครผ่านระบบธรรมดา');					
					redirect(base_url('signup'));

				}else{						
					$user = $this->User_model->get(array('email' => $fb_user['email']));												
					$avatar        = 'https://graph.facebook.com/'.$fb_user['id'].'/picture?height=100&width=100';
					if($user === NULL){						
						$data['name']  = $fb_user['name'];
						$data['fb_id'] = $fb_user['id'];
						$data['email'] = $fb_user['email'];
						$id            = $this->User_model->insert($data);										
						$this->session->set_userdata(array(
							'user_id'  => $id,
							'fb_id'    => $fb_user['id'],
							'fb_name'  => $fb_user['name'],
							'fb_email' => $fb_user['email'],
							'avatar'   => $avatar,
							'pretest'  => 0				
						));	
					}else{
						$this->session->set_userdata(array(
							'user_id'  => $user->id,
							'fb_id'    => $user->fb_id,
							'fb_name'  => $user->name,
							'fb_email' => $user->email,
							'avatar'   => $avatar,
							'pretest'  => $user->pretest
						));
					}					
					redirect(base_url('sections'));				
				}							
			}
		}else{
			redirect(base_url('/?graph=false'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function update()
	{
		$this->load->model('users/User_model');
		$where['id']       = $this->session->userdata('user_id');
		$new_data['name']  = $this->input->post('name');
		$new_data['email'] = $this->input->post('email');
		$new_data['class_room'] = $this->input->post('class_room');
		$new_data['room_no'] = $this->input->post('room_no');
		$new_data['school'] = $this->input->post('school');
		$this->User_model->update($where,$new_data);
		redirect(base_url('users/edit'));
	}

	public function edit()
	{
		$this->load->model('users/User_model');
		$where['id'] = $this->session->userdata('user_id');
		$data['obj'] = $this->User_model->get($where);
		$this->load->view('users/edit',$data);
	}

	public function forgot_password()
	{
		$this->load->view('users/forgot-password');
	}

	public function change_password()
	{
		$this->load->model('users/User_model');
		$type = $this->input->post('type');
		if($type == 'logged'){
			$password = $this->input->post('password');
			$password2 = $this->input->post('password2');
			if($password == $password2){
				$data['password'] = md5($password);			
				$where['id'] = $this->session->userdata('user_id');
				$new_data['password'] = $data['password'];
				$obj = $this->User_model->update($where,$new_data);
				redirect(base_url('users/edit'));
			}else{
				$this->session->set_flashdata('error', 'รหัสผ่านไม่ตรงกัน');
				redirect(base_url('users/edit'));
			}
		}else if($type == 'send_mail'){
			$this->load->helper('string');
			$password = random_string('alnum',6);
			$where['email'] = $this->input->post('email');
			$obj = $this->User_model->get($where);
			$data['password'] = md5($password);
			$this->User_model->update($where,$data);
			// send mail
			$smtp_user     = '';
			$smtp_password =  '';
			$this->load->library('email');
			$config['protocol']     = 'smtp';
			$config['smtp_host']    = 'ssl://smtp.gmail.com';
			$config['smtp_port']    = '465';
			$config['smtp_timeout'] = '7';
			$config['smtp_user']    = 'itoon.sit@gmail.com';
			$config['smtp_pass']    = 'JP2coiHM!';
			$config['charset']      = 'utf-8';
			$config['newline']      = "\r\n";
			$config['mailtype']     = 'text'; // or html
			$config['validation']   = TRUE; // bool whether to validate email or not      
			$this->email->initialize($config);

			$this->email->from($smtp_user,'การแพทย์ฉุกเฉิน');
			$this->email->to($where['email']);

			$this->email->subject('จากบทเรียนสื่อประสม การแพทย์ฉุกเฉิน');
			$this->email->message('ได้ทำการเปลี่ยน รหัสผ่านของคุณคือ: '.$password);  

			$this->email->send();
			// end send mail
			redirect(base_url('login'));
		}else if($type == 'admin'){
			$password = $this->input->post('password');
			$password2 = $this->input->post('password2');
			$id = $this->input->post('id');
			if($password == $password2){
				$data['password']     = md5($password);			
				$where['id']          = $id;
				$new_data['password'] = $data['password'];
				$obj                  = $this->User_model->update($where,$new_data);
				redirect(base_url('admin/users/'.$id));
			}else{
				$this->session->set_flashdata('error', 'รหัสผ่านไม่ตรงกัน');
				redirect(base_url('admin/users/'.$id));
			}
		}
	}	
}

?>