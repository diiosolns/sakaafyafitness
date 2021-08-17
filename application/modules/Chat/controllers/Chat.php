<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Chat extends MX_Controller
{

function __construct() {
parent::__construct();
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
	$data['any'] = "";
	$data['middle_m'] = "Chat";
	$data['middle_f'] = "dashboard";
	$this->load->view('Product/index',$data);
}


function myChats() {
	$replayBtn = $this->input->post('replayBtn',true);
	//$people = $this->uri->segment(3);
	if (!$this->uri->segment(3) == "") {
		# code...
		$this->session->set_userdata('people', $this->uri->segment(3));
	}

	if (!$this->session->userData('people') == "") {
		# code...
		$people = $this->session->userData('people');
	} else {
		# code...
		$people = $this->session->userData('user_id',true);
	}
	

	//update replay
	if (!$replayBtn == "") {
		# code...
		$msgid =$replayBtn;
		$chatdata['replay'] = $this->input->post('replay',true);
		$chatdata['status'] = "read";
		$this->_update2('chat', 'id', $msgid, $chatdata);
	}

	$data['peopleid'] = $people ;
	$data['unreadsms'] = $this->get_where_custom3('sender', $people, 'recipient', $this->session->userData('user_id',true), 'status', 'unread');
	//$data['smspeople'] = $this->get_where_custom2_dist('chat', 'sender', 'recipient', $this->session->userData('user_id',true), 'status', 'unread');
	$data['smspeople'] = $this->get_where_custom1_dist('sender', 'recipient', $this->session->userData('user_id',true));

	

	$data['middle_m'] ="Admin";
	//$data['middle_f'] ="m_container";
	$data['mpanel_m'] = "Chat";
	$data['mpanel_f'] = "myChats";
	if ($this->session->userdata('logged_in')) {
		$data['color'] = "blue";
		$data['msg'] ="";
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
		//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
		redirect('Home');
	}

}


function leaveComment() {
	$commentBtn = $this->input->post('commentBtn',true);
	$cdata['profileid'] = $commentBtn;
	$cdata['sender'] = $this->input->post('name',true);
	$cdata['comment'] = $this->input->post('comment',true);
	$cdata['udate'] = mdate('%d-%m-%Y %H:%i:%s');

	$this->_insert_tb('comment', $cdata);

	//send an email
	$profileRes = $this->profile->get_where_custom_tb('profile', 'id', $commentBtn);
	$recepient = $profileRes->row()->email;
	$subject = 'eHuduma User Comment:';
	$message = $cdata['comment'].'<br> ( Sender Name : '.$cdata['sender'].' ) <hr> Services at your fingure tips !';
	$this->emailSender($recepient, $subject, $message);


	// back to profile page 
		$id = $commentBtn;
		$data['profileres'] = $this->profile->get_where_custom('id', $id );
		$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$id, 'status', "Open" );
		$data['timetb'] = $this->appointment->get_where_custom_tb('timetable', 'profileid', $id);
		$data['sideprofileres'] = $data['profileres'] ;
		//$data['sideprofileres'] = $this->get_where_custom3('type', $type, 'category', $category, 'subcategory', $subcategory);
		//profile details
			$data['id'] = $data['profileres']->row()->id;
			$data['profilename'] = $data['profileres']->row()->profilename;
			$data['type'] = $data['profileres']->row()->type;
			$data['category'] = $data['profileres']->row()->category;
			$data['subcategory'] = $data['profileres']->row()->subcategory;
			$data['description'] = $data['profileres']->row()->description;
			$data['phyaddress'] = $data['profileres']->row()->phyaddress;
			$data['phone'] = $data['profileres']->row()->phone;
			$data['altphone'] = $data['profileres']->row()->altphone;
			$data['email'] = $data['profileres']->row()->email;
			$data['img'] = $data['profileres']->row()->img;
			$data['availabletime'] = $data['profileres']->row()->availabletime;
			$data['vistcount'] = $data['profileres']->row()->vistcount;
			$data['recipient'] = $data['profileres']->row()->recipient;
			$data['date'] = $data['profileres']->row()->date;
			$data['udate'] = $data['profileres']->row()->udate;

				$data['msg'] = '<div class="alert alert-success" role="alert"> INFO: Your Comments Has been Posted. Thank You for Your Feedback. Hope this will help improve my Page.</div>';
				$data['middle_m'] ="Profile";
				$data['middle_f'] ="profile";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";
	// end profile page

	//display view	
	$this->load->view('Home/index',$data);

}



function chatMe() {
	$chatBtn = $this->input->post('chatBtn',true);
	$cdata['recipient'] = $this->profile->get_where_custom('id', $chatBtn)->row()->recipient;
	$cdata['sender'] = $this->input->post('name',true);
	$cdata['incomming'] = $this->input->post('sms',true);
	$cdata['udate'] = mdate('%d-%m-%Y %H:%i:%s');

	$this->_insert_tb('chat', $cdata);

	//send an email
	$profileRes = $this->profile->get_where_custom_tb('profile', 'id', $chatBtn);
	$recepient = $profileRes->row()->email;
	$subject = 'eHuduma Chats:';
	$message = $cdata['incomming'].'<br> ( Sender Name : '.$cdata['sender'].' ) <hr> Services at your fingure tips !';
	$this->emailSender($recepient, $subject, $message);


	// back to profile page 
		$id = $chatBtn;
		$data['profileres'] = $this->profile->get_where_custom('id', $id );
		$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$id, 'status', "Open" );
		$data['timetb'] = $this->appointment->get_where_custom_tb('timetable', 'profileid', $id);
		$data['sideprofileres'] = $data['profileres'] ;
		//$data['sideprofileres'] = $this->get_where_custom3('type', $type, 'category', $category, 'subcategory', $subcategory);
		//profile details
			$data['id'] = $data['profileres']->row()->id;
			$data['profilename'] = $data['profileres']->row()->profilename;
			$data['type'] = $data['profileres']->row()->type;
			$data['category'] = $data['profileres']->row()->category;
			$data['subcategory'] = $data['profileres']->row()->subcategory;
			$data['description'] = $data['profileres']->row()->description;
			$data['phyaddress'] = $data['profileres']->row()->phyaddress;
			$data['phone'] = $data['profileres']->row()->phone;
			$data['altphone'] = $data['profileres']->row()->altphone;
			$data['email'] = $data['profileres']->row()->email;
			$data['img'] = $data['profileres']->row()->img;
			$data['availabletime'] = $data['profileres']->row()->availabletime;
			$data['vistcount'] = $data['profileres']->row()->vistcount;
			$data['recipient'] = $data['profileres']->row()->recipient;
			$data['date'] = $data['profileres']->row()->date;
			$data['udate'] = $data['profileres']->row()->udate;

				$data['msg'] = '<div class="alert alert-success" role="alert"> INFO: Your Message Has Been Sent. Soon I Will Revert.</div>';
				$data['middle_m'] ="Profile";
				$data['middle_f'] ="profile";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";
	// end profile page

	//display view	
	$this->load->view('Home/index',$data);

}


function manageComments() {
	$viewBtn = $this->input->post('viewBtn',true);
	$deleteBtn = $this->input->post('deleteBtn',true);
	$data['profileRes'] = $this->profile->get_where_custom('userid', $this->session->userdata('user_id') );

	if (!$viewBtn == "") {
		# code...
		$id = $viewBtn;
		$data['commentRes'] = $this->get_where_custom_tb('comment', 'profileid', $id);

		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
		$data['mpanel_m'] = "Chat";
		$data['mpanel_f'] = "myComments";

	} else if (!$deleteBtn == "") {
		# code...
		$id = $deleteBtn;
		$this->_delete_td('comment', $id);

		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
		$data['mpanel_m'] = "Chat";
		$data['mpanel_f'] = "myProfiles";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
		$data['mpanel_m'] = "Chat";
		$data['mpanel_f'] = "myProfiles";
	}
	 


	if ($this->session->userdata('logged_in')) {
		$data['color'] = "blue";
		$data['msg'] ="";
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
		//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
		redirect('Home');
	}

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



//default codes xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

function get($order_by) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get($order_by);
return $query;
}

function get_dist($col) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_dist($col);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_where_custom($col, $value);
return $query;
}


function get_where_custom_tb($tb, $col, $value) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_where_custom_tb($tb, $col, $value);
return $query;
}

function get_where_custom2($col1, $value1, $col2, $value2) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_where_custom2($col1, $value1, $col2, $value2);
return $query;
}


function get_where_custom1_dist($col, $col1, $value1) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_where_custom1_dist($col, $col1, $value1);
return $query;
}


function get_where_custom3($col1, $value1, $col2, $value2, $col3, $value3) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->get_where_custom3($col1, $value1, $col2, $value2, $col3, $value3);
return $query;
}

function _insert($data) {
$this->load->model('Mdl_chat');
$this->Mdl_chat->_insert($data);
}

function _insert_tb($tb, $data) {
$this->load->model('Mdl_chat');
$this->Mdl_chat->_insert_tb($tb, $data);
}

function _update($id, $data) {
$this->load->model('Mdl_chat');
$this->Mdl_chat->_update($id, $data);
}

function _update_custome($col, $value, $data) {
$this->load->model('Mdl_chat');
$this->Mdl_chat->_update_custome($col, $value, $data);
}

 
function _delete_td($td, $id) {
$this->load->model('Mdl_chat');
$this->Mdl_chat->_delete_td($td, $id);
}

function _delete($id) {
$this->load->model('Mdl_chat');
$this->Mdl_chat->_delete($id);
}

function _delete_custome($col, $value) {
$this->load->model('Mdl_chat');
$this->Mdl_chat->_delete_custome($col, $value);
}

function count_where($column, $value) {
$this->load->model('Mdl_chat');
$count = $this->Mdl_chat->count_where($column, $value);
return $count;
}

function count_all() {
$this->load->model('Mdl_chat');
$count = $this->Mdl_chat->count_all();
return $count;
}



function get_max() {
$this->load->model('Mdl_chat');
$max_id = $this->Mdl_chat->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('Mdl_chat');
$query = $this->Mdl_chat->_custom_query($mysql_query);
return $query;
}

}