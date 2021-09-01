<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users extends MX_Controller
{

function __construct() {
	parent::__construct();
	$this->load->library(array('session'));
	$this->load->helper('number');
	$this->load->helper('date');
	$this->load->helper('download');
	$this->load->helper('text');
	//My Modules
	$this->load->module('Profile');
	$this->load->module('Appointment');
	$this->load->module('Artical');
	$this->load->module('Admin');
	$this->load->module('Chat');
	$this->load->module('Home');
	$this->load->module('Users');
}


function index(){
	echo phpversion();
	echo "ACCESS FORBIDDEN";
}

function login(){
	$data['color'] = "blue";
	$data['msg'] = "";
	$this->load->view('Users/login',$data);
}

function signup(){
	$data['color'] = "blue";
	$data['msg'] = "";
	$this->load->view('Users/signup',$data);
}


function userReg(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('name', 'Full name', 'trim|required|alpha_numeric_spaces|min_length[5]|max_length[50]');
	$this->form_validation->set_rules('phone', 'Phone number', 'trim|required|numeric');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
	$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

if ($this->form_validation->run() == FALSE) {
	$data['color'] = "red";
	$data['msg'] = "<br>Oops! Invalid input, please enter valid data";
	$this->load->view('Users/signup',$data);
} else {
	$today = mdate('%Y-%m-%d');
    $days = "+5 day";
    $expdate = date('Y-m-d',strtotime($days, strtotime($today)));

	$udata['name'] = $this->input->post('name', true);
	$udata['username'] = $this->input->post('email', true);
	$udata['email'] = $this->input->post('email', true);
	$udata['phone'] = $this->input->post('phone', true);
	$udata['type'] = $this->input->post('type', true);
	$udata['role'] = $this->input->post('type', true);
	$udata['email_verified'] = 0;
	$udata['email_verification_tocken'] = md5(uniqid($udata['email'], true));
	$udata['password'] = $this->input->post('password', true);
	$cpwrd = $this->input->post('cpassword', true);
	$udata['expdate'] = $expdate;
	$udata['date'] = mdate('%d-%m-%Y');
	$udata['udate'] = mdate('%d-%m-%Y %H:%i:%s');
	$usernameVer    = $this->get_where_custom('username', $udata['username']);
	$unique_email_ver    = $this->get_where_custom('email', $udata['email']);
	$unique_phone_ver    = $this->get_where_custom('phone', $udata['phone']);

	if ($udata['password'] == $cpwrd) {
		# code...
		if (($unique_email_ver->num_rows() == 0) && ($unique_phone_ver->num_rows() == 0) && ($usernameVer->num_rows() == 0)) {
			# code...
			$this->_insert($udata);
			/*$data['color'] = "green";
			$data['response'] = "Registration Complete.!";
			$user    = $this->get_where_custom('username', $udata['username'])->row() ;
			$newdata = array('user_id' =>(int)$user->id,
							'user_name'=> (string)$user->name,
							'user_username'=> (string)$user->username,
							'user_pwrd'=> (string)$user->password,
							'user_date'=> (string)$user->date,
							'user_role'=> (string)$user->role,
							'user_img'=> (string)$user->userimg,
							'user_online'=> (string)$user->online,
							'logged_in'=> (bool)true
							);
			$this->session->set_userdata($newdata);
			//update online status
			$onlinedata['online'] = 1;
			$this->users->_update($user->id,$onlinedata);*/
			
			//=========NOTIFICATIONS==============
			$email_data['email_verification_link'] = base_url('Users/verify')."/".$udata['email_verification_tocken'];
			$email_data['name'] = $udata['name'];
			$email_data['email'] = $udata['email'];
			$recepient = $udata['email'];
			$to = $udata['phone'];
			$subject = "eHuduma E-mail Verification";
			$messagetxt = "Umefanikiwa kutengeneza akaunti ya eHuduma. Tafadhari kamilisha usajili wa profaili ya shughuli yako kama ni mjasiliamali au mtaalamu.<br> Asante na karibu sana! ";
			$mailContent = $this->load->view('Users/email_verification_notification', $email_data, true);
			$this->emailSender($recepient, $subject, $mailContent);
			//$this->Home->smsSender($to,$message);
			//========= END NOTIFICATIONS =======
			//redirect('Admin');
			$this->session->set_userdata('user_email', $recepient);
			redirect('Users/email_address_not_verified');
			
		} else {
			$data['color'] = "red";
			$data['msg'] = "<br>Oops! This e-mail/ phone number is arleady used. Please use another e-mail and phone number";
			//=========NOTIFICATIONS==============
			/*$recepient = $udata['email'];
			$to = $udata['phone'];
			$subject = $udata['name'].", Karibu eHuduma";
			$messagetxt = $data['response'];
			$message = $data['response'];
			$this->home->emailSender($recepient, $subject, $messagetxt);*/
			//$this->Home->smsSender($to,$message);
			//========= END NOTIFICATIONS =======
			$this->load->view('Users/signup',$data);
		}
		

	} else {
		# code...
		$data['color'] = "red";
		$data['msg'] = "<br>Oops! Password does not match.";
		$this->load->view('Users/signup',$data);
	}
}
	//echo $data['response'];
}

function signin() {
	// load form helper and validation library
	$this->load->helper('form');
	$this->load->library('form_validation');	
	// set validation rules
	$this->form_validation->set_rules('username', 'username', 'required');
	$this->form_validation->set_rules('password', 'Password', 'required');
		
	if ($this->form_validation->run() == false) {		
		// validation not ok, send validation errors to the view	
		$data['loginErr']="Please, Input correct information";
		$this->load->view('Users/login',$data);
		//echo $data['loginErr'];	
	} else {	
		// set variables from the form
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$oneTimePwrd = $this->input->post('onetimepwrd');
		$rmb_me = $this->input->post('rmb_me');

		$user_email_res = $this->get_where_custom('email', $username);
		$user_phone_res = $this->get_where_custom('phone', $username);
		if ($user_email_res->num_rows()<=0) {
			$user = $user_phone_res;
		} else {
			$user = $user_email_res;
		}
		
		if (($user->num_rows()>0) && ($user->row()->password == $password)) {
				if ($user->row()->email_verified >= 0) {
					$newdata = array('user_id' =>(int)$user->row()->id,
							'user_name'=> (string)$user->row()->name,
							'user_username'=> (string)$user->row()->username,
							'user_phone'=> (string)$user->row()->phone,
							'user_email'=> (string)$user->row()->email,
							'user_pwrd'=> (string)$user->row()->password,
							'user_date'=> (string)$user->row()->date,
							'user_role'=> (string)$user->row()->role,
							'user_expdate'=> (string)$user->row()->expdate,
							'user_img'=> (string)$user->row()->userimg,
							'user_email_verified'=> (string)$user->row()->email_verified,
							'user_online'=> (string)$user->row()->online,
							'logged_in'=> (bool)true
						);
					$this->session->set_userdata($newdata);
					//update online status
					$onlinedata['online'] = 1;
					$this->users->_update($user->row()->id,$onlinedata);
					//goto dashboard page
					redirect('Admin');
				} else {
					# code...
					$this->session->set_userdata('user_email', $user->row()->email);
					redirect('Users/email_address_not_verified');
				}
		}else{
			// login failed
			$data['loginErr'] = 'Incorrect Username or Password. Try again.!';					
			//echo $data['loginErr'];
			$data['color'] = "red";
			$data['msg'] = "<br>".$data['loginErr'];
			$this->load->view('Users/login',$data);
		}
	} 
}


function addUser(){
	redirect('Users/signup');
}


function addUser_admin_only(){
	$saveBtn = $this->input->post('saveBtn', true);
	$udata['name'] = $this->input->post('name', true);
	$udata['username'] = $this->input->post('username', true);
	$udata['email'] = $this->input->post('email', true);
	$udata['phone'] = $this->input->post('phone', true);
	$udata['role'] = $this->input->post('role', true);
	$udata['password'] = $this->input->post('password', true);
	$cpwrd = $this->input->post('cpassword', true);
	$udata['date'] = mdate('%d-%m-%Y');
	$udata['udate'] = mdate('%d-%m-%Y %H:%i:%s');

	if (!$saveBtn == "") {
		# code...
		if ($udata['password'] == $cpwrd) {
			# code...
			$this->_insert($udata);
			$data['middle_m'] ="Admin";
	 		$data['mpanel_m'] = "Users";
	 		$data['mpanel_f'] = "addUser";
			$data['color'] = "green";
			$data['msg'] = '<div class="alert alert-success"><strong>Success!</strong> User Registration Completed Successifully.! User Default Password to login into Added User ccount to Confirm.</div>';
		} else {
			# code...
			$data['middle_m'] ="Admin";
	 		$data['mpanel_m'] = "Users";
	 		$data['mpanel_f'] = "addUser";
			$data['color'] = "red";
			$data['msg'] = '<div class="alert alert-danger"><strong>Success!</strong> Registration Failed. Password Does not Match.</div>';
		}
	} else {
		# code...
		$data['middle_m'] ="Admin";
	 	$data['mpanel_m'] = "Users";
	 	$data['mpanel_f'] = "addUser";
	 	$data['msg'] = "";
	}
	

	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
	} else {
		redirect('Home');
	}

}




function changePassword(){
	$id = $this->session->userdata('user_id');
	$data['userres'] = $this->get_where($id);
	$changeBtn = $this->input->post('changeBtn',true);

	$udata['password'] = $this->input->post('password',true);
	$udata['udate'] = mdate('%Y-%m-%d %H:%i:%s');
	$confpwrd = $this->input->post('password2',true);
	$cpword = $this->input->post('cpword',true);

	if ($changeBtn == "ok") {
		# code...
		if ($cpword == $data['userres']->row()->password) {
		# code...
		if ($udata['password'] == $confpwrd) {
			# code...
			//update password
			$this->_update($id, $udata);

			if ($this->session->userdata('logged_in')) {
				$data['color'] = "";
				$data['err'] = '<div class="alert alert-success alert-dismissable"> <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <b>Info!</b> Password Has Been Changed Successifully ! Use new Password During Login</div>';
				$data['middle_m'] ="Admin";
				$data['middle_f'] ="m_container";
			 	$data['mpanel_m'] = "Users";
				$data['mpanel_f'] = "changePwrd";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";
				if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); }  else { $this->load->view('Admin/indexu',$data); }
				//if ($this->session->userdata('user_role') == "admin") { $this->load->view('Admin/index',$data); } else if ($this->session->userdata('user_role') == "store"){ $this->load->view('Inventory/index',$data); } else if ($this->session->userdata('user_role') == "baker"){ $this->load->view('Production/index',$data); } else if ($this->session->userdata('user_role') == "seller"){ $this->load->view('Sales/index',$data); } else { $this->load->view('index',$data); }
			} else {
				redirect('Home');
			}

		} else {
			# code...
			//password does not match
			if ($this->session->userdata('logged_in')) {
				$data['color'] = "";
				$data['err'] = '<div class="alert alert-danger alert-dismissable"> <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <b>Alert!</b> Password Change Failed ! Passwords Does no Match. Try Again </div>';
				$data['middle_m'] ="Admin";
				$data['middle_f'] ="m_container";
			 	$data['mpanel_m'] = "Users";
				$data['mpanel_f'] = "changePwrd";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

				if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); }  else { $this->load->view('Admin/indexu',$data); }
				//if ($this->session->userdata('user_role') == "admin") { $this->load->view('Admin/index',$data); } else if ($this->session->userdata('user_role') == "store"){ $this->load->view('Inventory/index',$data); } else if ($this->session->userdata('user_role') == "baker"){ $this->load->view('Production/index',$data); } else if ($this->session->userdata('user_role') == "seller"){ $this->load->view('Sales/index',$data); } else { $this->load->view('index',$data); }
			} else {
				redirect('Home');
			}
		}
		
	} else {
		# code...
		//The current password is incorrect
		if ($this->session->userdata('logged_in')) {
				$data['color'] = "";
				$data['err'] = '<div class="alert alert-danger alert-dismissable"> <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <b>Alert!</b> Password Change Failed ! The Current Password is Incorrect. Try Again </div>';
				$data['middle_m'] ="Admin";
				$data['middle_f'] ="m_container";
			 	$data['mpanel_m'] = "Users";
				$data['mpanel_f'] = "changePwrd";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

				if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); }  else { $this->load->view('Admin/indexu',$data); }
				//if ($this->session->userdata('user_role') == "admin") { $this->load->view('Admin/index',$data); } else if ($this->session->userdata('user_role') == "store"){ $this->load->view('Inventory/index',$data); } else if ($this->session->userdata('user_role') == "baker"){ $this->load->view('Production/index',$data); } else if ($this->session->userdata('user_role') == "seller"){ $this->load->view('Sales/index',$data); } else { $this->load->view('index',$data); }
			} else {
				redirect('Home');
			}
	}
	} else {
		# code...
		if ($this->session->userdata('logged_in')) {
				$data['color'] = "";
				$data['err'] = "";
				$data['middle_m'] ="Admin";
				$data['middle_f'] ="m_container";
			 	$data['mpanel_m'] = "Users";
				$data['mpanel_f'] = "changePwrd";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

				//$this->load->view('Admin/index',$data);
				if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); }  else { $this->load->view('Admin/indexu',$data); }
				//if ($this->session->userdata('user_role') == "admin") { $this->load->view('Admin/index',$data); } else if ($this->session->userdata('user_role') == "store"){ $this->load->view('Inventory/index',$data); } else if ($this->session->userdata('user_role') == "baker"){ $this->load->view('Production/index',$data); } else if ($this->session->userdata('user_role') == "seller"){ $this->load->view('Sales/index',$data); } else { $this->load->view('index',$data); }
			} else {
				redirect('Home');
			}
	}

}



function manageUsers() {
	$deleteBtn = $this->input->post('deleteBtn', true);
	$role = $this->uri->segment(3);
	if (!($role == "")) {
		if ($role == "verified") {
			# code...
			$data['userRes'] = $this->get_where_custom2('role', "User", 'email_verified', 1);
		} else if ($role == "unverified") {
			# code...
			$data['userRes'] = $this->get_where_custom2('role', "User", 'email_verified', 0);
		} else {
			$data['userRes'] = $this->get_where_custom('role', $role);
		}
	} else {
		$data['userRes'] = $this->get('id');
	}

	if (!$deleteBtn == "") {
		# code...
		$id = $deleteBtn;
		$this->_delete($id);

		$data['userRes'] = $this->get('id');
		$data['middle_m'] ="Admin";
		$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Users";
		$data['mpanel_f'] = "manageUsers";
		$data['color'] = "red";
		$data['msg'] ="";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Users";
		$data['mpanel_f'] = "manageUsers";
		$data['color'] = "red";
		$data['msg'] ="";
	}

	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
		//if ($this->session->userdata('user_role') == "admin") { $this->load->view('Admin/index',$data); } else { $this->load->view('Production/index',$data); }
	} else {
		//redirect('Home');
	}
	
}

function verifyUserAccount(){
	$udata['email_verified'] = 1;
	$udata['udate'] = mdate('%d-%m-%Y %H:%i:%s');
	$this->users->_update($this->uri->segment(3),$udata);

	$data['userRes'] = $this->get_where_custom2('role', "User", 'email_verified', 0);
	$data['middle_m'] ="Admin";
	$data['middle_f'] ="m_container";
	$data['mpanel_m'] = "Users";
	$data['mpanel_f'] = "manageUsers";
	$data['color'] = "blue";
	$data['msg'] ="Info: User account verification completed!";

	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
		//if ($this->session->userdata('user_role') == "admin") { $this->load->view('Admin/index',$data); } else { $this->load->view('Production/index',$data); }
	} else {
		//redirect('Home');
	}
}



/*Email verification*/
function email_address_not_verified() {
	$data['color'] = "blue";
	$data['msg'] = "";
	//$this->load->view('Users/email_verification_notification',$data);
	$this->load->view('Users/email_address_not_verified',$data);

	//=========NOTIFICATIONS==============
		$user = $this->get_where_custom('email', $this->session->userdata('user_email'));
		$email_data['email_verification_link'] = base_url('Users/verify')."/".$user->row()->email_verification_tocken;
		$email_data['name'] = $user->row()->name;
		$email_data['email'] = $user->row()->email;
		$recepient = $user->row()->email;
		$to = $user->row()->phone;
		$subject = "eHuduma E-mail Verification";
		$mailContent = $this->load->view('Users/email_verification_notification', $email_data, true);
		$this->emailSender($recepient, $subject, $mailContent);
	//========= END NOTIFICATIONS =======

}

function verify() {
	$email_verification_tocken = $this->uri->segment(3);
	//$udata['email_verification_tocken'] 

	//read user by using tocken
	//update user tb (email_verified to 1)
	//create auto profile
	//show create profile is Freelancer
	//Goto dashboard if Employer

	//echo $this->getToken(50);
	//$email = "diiosolns@gmail.com";
	//echo md5(uniqid($email, true));
	//$email_data['email_verification_link'] = base_url('Users/verify')."/".$email;
	//$email_data['name'] = "Tunu";
	//$email_data['email'] = "diiosolns@gmail.com";
	//$this->load->view('Users/email_verification_notification', $email_data);

	$user = $this->get_where_custom('email_verification_tocken', $email_verification_tocken);
	if ($user->num_rows() > 0) {
		# code...
		//Update email verification col
		$udata['email_verified'] = 1;
		$udata['online'] = 1;
		$udata['udate'] = mdate('%d-%m-%Y %H:%i:%s');
		$this->users->_update($user->row()->id,$udata);
		//put user details in session
		$user_data = array('user_id' =>(int)$user->row()->id,
						'user_name'=> (string)$user->row()->name,
						'user_username'=> (string)$user->row()->username,
						'user_pwrd'=> (string)$user->row()->password,
						'user_date'=> (string)$user->row()->date,
						'user_role'=> (string)$user->row()->role,
						'user_img'=> (string)$user->row()->userimg,
						'user_online'=> (string)$user->row()->online,
						'logged_in'=> (bool)true
						);
		$this->session->set_userdata($user_data);
		//success
		$this->load->view('Users/email_verification_success');	
	} else {
		# code...
		//failure
		$this->load->view('Users/email_verification_fail');	
	}
	
}

function verified_user() {
	$role = $this->session->userdata('user_role');
	if ($role == "Freelancer") {
		# code...
		redirect('Profile/complete_registration');
	} else if ($role == "User") {
		# code...
		redirect('Admin');
	} else {
		# code...
		redirect('Home');
	}
}

function getToken($length){
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet);

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[random_int(0, $max-1)];
    }

    return $token;
}
/*Email verification*/




//NOTIFICATIONS
//================== NOTIFICATIONS ===============
function emailSender($recepient, $subject, $messagetxt){
        $snet=false;
       /* $config = Array(
         'protocol' => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com', 
          'smtp_port' => 465,
          'smtp_user' => 'sic.info17@gmail.com', // change it to yours
          'smtp_pass' => 'System.123', // change it to yours
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        );*/
        
         $config = Array(
         'protocol' => 'smtp',
          'smtp_host' => 'ssl://mail.ehuduma.com',
          /*'smtp_host' => 'ssl://secure238.inmotionhosting.com', */
          'smtp_port' => 465,
          'smtp_user' => 'message@ehuduma.com', // change it to yours
          'smtp_pass' => 'ehuduma@123', // change it to yours
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        );

          $message = $messagetxt;
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('message@ehuduma.com','eHuduma'); // change it to yours
          $this->email->to($recepient);// change it to yours
          $this->email->subject($subject);
          $this->email->message($message);
        if($this->email->send()){
            $sent=true;
            return $sent;
         }
         else{
            show_error($this->email->print_debugger());
        }
}


public function smsSender($to,$message){
  # code...
  $phone=$to;
  $textSMS=$message;

    $url='api.infobip.com/sms/1/text/single';

    $send='{  
      "from":"SIC",
      "to":"'.$phone.'",
      "text":"'.$textSMS.'"
    }';

    $sms = curl_init($url);
    curl_setopt( $sms, CURLOPT_POST, 1);
    curl_setopt( $sms, CURLOPT_POSTFIELDS, $send);
    curl_setopt( $sms, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $sms, CURLOPT_HTTPHEADER,array (
    'Authorization: Basic RGlvbkFkbWluOiNGcmFuazE2QCM=',
    'Content-Type: application/json',
    'accept: application/json',
    ));
    curl_setopt( $sms, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($sms);
    //echo $response;
  
}
//========================X===X==================






/*====================== END HUDUMA FUNCTIONS ==============*/




//default codes

function get($order_by) {
$this->load->model('Mdl_users');
$query = $this->Mdl_users->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('Mdl_users');
$query = $this->Mdl_users->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('Mdl_users');
$query = $this->Mdl_users->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('Mdl_users');
$query = $this->Mdl_users->get_where_custom($col, $value);
return $query;
}

function get_where_custom2($col1, $value1, $col2, $value2) {
$this->load->model('Mdl_users');
$query = $this->Mdl_users->get_where_custom2($col1, $value1, $col2, $value2);
return $query;
}

function _insert($data) {
$this->load->model('Mdl_users');
$this->Mdl_users->_insert($data);
}

function _update($id, $data) {
$this->load->model('Mdl_users');
$this->Mdl_users->_update($id, $data);
}

function _delete($id) {
$this->load->model('Mdl_users');
$this->Mdl_users->_delete($id);
}

function count_where($column, $value) {
$this->load->model('Mdl_users');
$count = $this->Mdl_users->count_where($column, $value);
return $count;
}

function count_all() {
$this->load->model('Mdl_users');
$count = $this->Mdl_users->count_all();
return $count;
}



function get_max() {
$this->load->model('Mdl_users');
$max_id = $this->Mdl_users->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('Mdl_users');
$query = $this->Mdl_users->_custom_query($mysql_query);
return $query;
}

}