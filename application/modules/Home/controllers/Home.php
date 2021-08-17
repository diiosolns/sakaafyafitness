<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{

	function __construct(){

		parent::__construct();
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper('download');
		$this->load->helper('text');//calling string helper 
		$this->load->helper('url');
		$this->load->model('Mdl_home');
		//My Modules
		$this->load->module('Profile');
		$this->load->module('Appointment');
		$this->load->module('Artical');
		$this->load->module('Admin');
		$this->load->module('Chat');
		$this->load->module('Home');
		$this->load->module('Users');
	}


	function switchLang($language = "") {
        
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        
        redirect('Home');
        
    }

    function font(){ 
    	$data['loginErr'] ="";
		$this->load->view('Home/font',$data);
	}
    

	function index(){ 
		$data['loginErr'] ="";
		$data['subscribe_msg'] ="";
		$data['color'] ="";
		$this->session->set_userdata('liked', "empty");

		$data['middle_m'] ="Home";
		$data['middle_f'] ="home";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="bfooter";
		
		$this->load->view('Home/index',$data);
	
	}

	function subscribe(){ 
		$data['loginErr'] ="";
		$this->session->set_userdata('liked', "empty");

		$data['middle_m'] ="Home";
		$data['middle_f'] ="home";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="bfooter";

		$sdata['email'] = $this->input->post('email', true);
		$sdata['verificationcode'] = substr(md5(uniqid(mt_rand(), true)) , 0, 4);
		$sdata['verified'] = 0;
		$sdata['date'] = mdate('%Y-%m-%d');
		$sdata['udate'] = mdate('%Y-%m-%d %H:%i:%s');
		$check = $this->Mdl_home->get_where_custom_tb('subscriber', 'email', $sdata['email']);
		if ($check->num_rows() > 0) {
			$data['color'] ="red";
			$data['subscribe_msg'] ="You already subscribed to our news letter. Thank you!";
		} else {
			$this->Mdl_home->_insert_tb('subscriber', $sdata);
			$data['color'] ="blue";
			$data['subscribe_msg'] ="You have subscribed to our news letter. Thank you!";
		}
		
		$this->load->view('Home/index',$data);
	
	}



	function aboutUs(){ 
		$data['loginErr'] ="";
		$data['middle_m'] ="Home";
		$data['middle_f'] ="aboutUs";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="blank";
		/*$data['bfooter_f'] ="profileSlider";*/
		
		$this->load->view('Home/index',$data);
	}

	
	function contactUs(){ 
		$data['loginErr'] ="";
		$data['msg'] = "";
		$data['color'] = "blue";
		$btnContactUs = $this->input->post('btnContactUs',true);

		if (!$btnContactUs == "") {
			# code...
			$name = $this->input->post('name',true);
			$email = $this->input->post('email',true);
			$subject = $this->input->post('subject',true);
			$message = $this->input->post('message',true);

			//prepare and send an email
			$recepient = "ehuduma@uwezomedia.com";
			//$recepient = "francediio@gmail.com";
			$subject = $subject;
			$message = $message.'<br> ( Sender Name : '.$name.' ) <br> ( Sender Email: '.$email.' )';
			$this->emailSender($recepient, $subject, $message);

			//success meassage
			$data['msg'] = "Thank You For Giving Your Feedback.!";
			$data['color'] = "blue";
		}

		$data['middle_m'] ="Home";
		$data['middle_f'] ="contactUs";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="blank";
		/*$data['bfooter_f'] ="profileSlider";*/
		
		$this->load->view('Home/index',$data);	
	}


	function FAQ(){ 
		$data['loginErr'] ="";
		$data['middle_m'] ="Home";
		$data['middle_f'] ="faq";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="blank";
		/*$data['bfooter_f'] ="profileSlider";*/
		
		$this->load->view('Home/index',$data);
	}


	function ourServices(){ 
		$data['loginErr'] ="";
		$data['middle_m'] ="Home";
		$data['middle_f'] ="services";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="blank";
		/*$data['bfooter_f'] ="profileSlider";*/
		
		$this->load->view('Home/index',$data);
	}


	function searchResults() {
		$searchBtn = $this->input->post('searchBtn', true);
		$data['searchKey']  = "";

		if (!$searchBtn == "") {
			# code...
			$search = $this->input->post('search', true);
			$data['searchKey'] = $search;

			//find re;lated links.. to display
		}

		$data['middle_m'] ="Home";
		$data['middle_f'] ="searchResults";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="blank";
		
		$this->load->view('Home/index',$data);

	}


	function ourPrivacy(){ 
		$data['loginErr'] ="";
		$data['middle_m'] ="Home";
		$data['middle_f'] ="privacy";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="blank";
		$this->load->view('Home/index',$data);
	}

	function ourTerms(){ 
		$data['loginErr'] ="";
		$data['middle_m'] ="Home";
		$data['middle_f'] ="terms";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="blank";
		$this->load->view('Home/index',$data);
	}

	function job(){ 
		$data['loginErr'] ="";
		$data['msg'] ="";
		$data['coor'] ="";
		$this->load->view('Job/job',$data);
	}







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
          'smtp_host' => 'ssl://secure238.inmotionhosting.com', 
          'smtp_port' => 465,
          'smtp_user' => 'ehuduma@uwezomedia.com', // change it to yours
          'smtp_pass' => 'Hoja@255.com', // change it to yours
          'mailtype' => 'html',
          'charset' => 'iso-8859-1',
          'wordwrap' => TRUE
        );

          $message = $messagetxt;
          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('ehuduma@uwezomedia.com','eHuduma'); // change it to yours
          $this->email->to($recepient);// change it to yours
          $this->email->subject($subject);
          $this->email->message($message);
        if($this->email->send()){
            $sent=true;
            return $sent;
         }
         else{
            //show_error($this->email->print_debugger());
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




	//getting data from login form
	public function get_login_username($loginUser){
		$loginID=(int)ellipsize($loginUser,strlen($loginUser)-5,0,"");

		return $loginID;	
	}

	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
		public function login() {
		$btn = $this->input->post('loginBtn',true);
		
		if ($btn == "home") {
			# code...
			redirect('Home');
		} else {
			# code...
		//}

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
					//$data['login_error_msg'] = 'Please, Input correct information.';
					
			$data['loginErr']="Please, Input correct information";
			//$this->load->view('Home/login',$data);
			echo $data['loginErr'];
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$oneTimePwrd = $this->input->post('onetimepwrd');
			$rmb_me = $this->input->post('rmb_me');


			if ($this->Mdl_home->resolve_user_login($username, $password)==0) {
				$user_id = $this->Mdl_home->get_user_id_from_username($username);
					$user    = $this->Mdl_home->get_user($user_id);
					
					if ($user->email_verified == 1) {
						# code...
						$newdata = array('user_id' =>(int)$user->id,
										  'user_name'=> (string)$user->name,
										  'user_username'=> (string)$user->username,
										  'user_pwrd'=> (string)$user->password,
										  'user_date'=> (string)$user->date,
										  'user_role'=> (string)$user->role,
										  'user_img'=> (string)$user->userimg,
										  'user_email_verified'=> (string)$user->email_verified,
										  'user_online'=> (string)$user->online,
										  'logged_in'=> (bool)true
										 );
						$this->session->set_userdata($newdata);
						//update online status
						$onlinedata['online'] = 1;
						$this->users->_update($user->id,$onlinedata);
						//goto dashboard page
						redirect('Admin');
					} else {
						# code...
						$this->session->set_userdata('user_email', $username);
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


		}  //xxxxxxxxxxxxxxxxxxx END EXPIRED CHECK


		
			
			} //END if Home button not clicked..........	
		}
		
	
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		//$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			//update online status
			$onlinedata['online'] = 0;
			$id = $this->session->userdata('user_id');
			$this->users->_update($id,$onlinedata);
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$data['loginErr'] = '';					
			redirect('Home');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}


	public function notLoggedin(){

			$data['module']="Home";
			$data['view_file']="not_loggedin";
			$this->load->view('index',$data);
	}










	function search(){
		$search = $this->input->post('search', true);
		$searchBtn = $this->input->post('searchBtn', true);

		$data['searchtxt'] = $search;

		if ($this->session->userdata('logged_in')) {
			$data['color'] = "";
			$data['err'] = "SORRY: No Result Found";
			$data['middle_m'] = "Home";
			$data['middle_f'] = "search";
		if ($this->session->userdata('user_role') == "admin") { $this->load->view('Admin/index',$data); } else if ($this->session->userdata('user_role') == "store"){ $this->load->view('Inventory/index',$data); } else if ($this->session->userdata('user_role') == "baker"){ $this->load->view('Production/index',$data); } else if ($this->session->userdata('user_role') == "seller"){ $this->load->view('Sales/index',$data); } else { $this->load->view('index',$data); }
		} else {
			$this->load->view('Home/loginerr',$data);
		}
	}

	function lock(){
		$data['any'] = "";
		$pwrd = $this->input->post('pwrd', true);
		$unlockBtn = $this->input->post('unlockBtn', true);

		if ($unlockBtn == "ok") {
			# code... 
			if ($pwrd == $this->session->userdata('user_pwrd')) {
				# code...unlock user
				//goto dashboard page
				redirect('Home/welcome');
			} else {
				# code...
				$data['other'] = "";
				if ($this->session->userdata('logged_in')) {
					$data['color'] = "red";
					$data['err'] = "Invalid Password. Try Again.!";
					$this->load->view('Home/lock',$data);
				} else {
					$this->load->view('Home/loginerr',$data);
				}
			}
			
		} else {
			# code...
			$data['other'] = "";
			if ($this->session->userdata('logged_in')) {
				$data['color'] = "";
				$data['err'] = "";
				$this->load->view('Home/lock',$data);
			} else {
				$this->load->view('Home/loginerr',$data);
			}
		}
		
	}	




	function sysConfig(){
		$queryBtn = $this->input->post('queryBtn', true);
		$configBtn = $this->input->post('configBtn', true);
		$pkey = $this->input->post('pkey', true);
		$exdate = $this->input->post('exdate', true);
		$ver = $this->input->post('ver', true);

			//find MAC address
			ob_start();
			system('ipconfig/all');
			$mac = ob_get_contents();
			ob_clean();
			$name = "Physical";
			$pmac = strpos($mac, $name);
			$macAdr = substr($mac, ($pmac + 36), 17);

			$ipname = $name = "IPv4"; 
			$ippos = strpos($mac, $ipname);
			$ip = substr($mac, ($ippos + 36), 15);
			//end find MAC

		if ($queryBtn == "query") {
			# code...
			$data['err'] = "Product Key : ".$macAdr;
			if ($this->session->userdata('logged_in')) {
				$data['color'] = "";
				$data['middle_m'] = "Home";
				$data['middle_f'] = "suport";
				$this->load->view('Home/index',$data);
			} else {
				$data['any'] = "";
				$this->load->view('Home/loginerr',$data);
			}

		} else if ($configBtn == "config") {
			# code...update system info table $pkey
			if ($pkey == $macAdr) {
				# code...
				$sdata['pkey'] = $macAdr;
				$sdata['version'] = $ver;
				$sdata['exdate'] = $exdate;
				$sdata['registered'] = "YES";
				$sdata['udate'] = mdate('%y-%m-%d %H:%i:%s');
				$id = 1;
				$this->_update('sysconfig', 'id', $id, $sdata);

				if ($this->session->userdata('logged_in')) {
					$data['color'] = "green";
					$data['err'] = "Product Registered Successifuly";
					$data['middle_m'] = "Home";
					$data['middle_f'] = "suport";
					$this->load->view('Home/index',$data);
				} else {
					$data['any'] = "";
					$this->load->view('Home/loginerr',$data);
				}

			} else {
				# code...
				if ($this->session->userdata('logged_in')) {
					$data['color'] = "red";
					$data['err'] = "Invalid Product Key";
					$data['middle_m'] = "Home";
					$data['middle_f'] = "suport";
					$this->load->view('Home/index',$data);
				} else {
					$data['any'] = "";
					$this->load->view('Home/loginerr',$data);
				}
			}
			
		} else {

			if ($this->session->userdata('logged_in')) {
				$data['color'] = "";
				$data['err'] = "";
				$data['middle_m'] = "Home";
				$data['middle_f'] = "suport";
				$this->load->view('Home/index',$data);
			} else {
				$data['any'] = "";
				$this->load->view('Home/loginerr',$data);
			}
		}
		

			
	} // syss cofig unction mends here




//db functions


function _update($tb, $col, $value, $data) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_update2($tb, $col, $value, $data);
}

function get_where_custom1($tb, $col1, $value1) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_custom1($tb, $col1, $value1);
return $query;
}


}