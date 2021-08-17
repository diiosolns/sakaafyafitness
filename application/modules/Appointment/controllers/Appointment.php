<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Appointment extends MX_Controller
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


/*function index(){
	echo "Appointment";
}
*/


function makeAppointment() {

	$profileBtn = $this->input->post('profileBtn', true);
	$adata['requestername'] = $this->input->post('requestername', true);
	$adata['requesteremail'] = $this->input->post('requesteremail', true);
	$adata['requesterphone'] = $this->input->post('requesterphone', true);
	$adata['purpose'] = $this->input->post('purpose', true);
	$adata['date'] = $this->input->post('date', true);
	$adata['sttime'] = $this->input->post('sttime', true);
	$adata['entime'] = $this->input->post('entime', true);
	$adata['description'] = $this->input->post('description', true);
	$adata['profileid'] = $this->session->userdata('selectedid');
	$adata['userid'] = $this->profile->get_where_custom('id',$adata['profileid'])->row()->userid;
	$adata['udate'] = mdate('%Y-%m-%d %H:%i:%s');
	//update appointment table
	$this->_insert($adata);

	//submission message
	$data['msg'] = "Your appointment has been made successifully.!";
	$this->session->set_userdata('msg', $data['msg'] );

	//redirect to profile
	redirect('Profile');
}


function availableAppointments() {

	$delBtn = $this->input->post('delBtn', true);
	$approveBtn = $this->input->post('approveBtn', true);
	$closeBtn = $this->input->post('closeBtn', true);
	$rejectBtn = $this->input->post('rejectBtn', true);

	//read all appointments form db
	$id = $this->session->userdata('user_id');
	$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$id, 'status', "Open" );


	$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Appointment";
		$data['mpanel_f'] = "myAppointments";
		if ($this->session->userdata('logged_in')) {
			$data['color'] = "blue";
			$data['msg'] ="";
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
		} else {
			redirect('Home');
		}
}



function profileTimetable() {
	$viewBtn = $this->input->post('viewBtn', true);
	$editBtn = $this->input->post('editBtn', true);
	$modifyBtn = $this->input->post('modifyBtn', true);

	$data['profileRes'] = $this->profile->get_where_custom('userid', $this->session->userdata('user_id') );

	if (!$viewBtn == "") {
		# code...
		$id = $viewBtn;
		$data['timetb'] = $this->get_where_custom_tb('timetable', 'profileid', $id);

		$profile = $this->profile->get_where_custom('id', $id);
		$data['profileName'] = $profile->row()->profilename;
		$data['color'] = "blue";
		$data['msg'] ="";
		$data['mpanel_f'] = "timetable";

	} else if(!$editBtn == "") {
		# code...
		$id = $editBtn;
		$this->session->set_userdata('profile_id', $id );
		$data['timetb'] = $this->get_where_custom_tb('timetable', 'profileid', $id);

		$profile = $this->profile->get_where_custom('id', $id);
		$data['profileName'] = $profile->row()->profilename;
		$data['color'] = "blue";
		$data['msg'] ="";
		$data['mpanel_f'] = "editTimetable";

	} else if(!$modifyBtn == "") {
		# code...
		$id = $this->session->userdata('profile_id');
		$data['timetb'] = $this->get_where_custom_tb('timetable', 'profileid', $id);
		$tdata['monday'] = $this->input->post('monfrom', true).' - '.$this->input->post('monto', true);
		$tdata['tuesday'] = $this->input->post('tuesfrom', true).' - '.$this->input->post('tuesto', true);
		$tdata['wednessday'] = $this->input->post('wednessfrom', true).' - '.$this->input->post('wednessto', true);
		$tdata['thursday'] = $this->input->post('thursfrom', true).' - '.$this->input->post('thursto', true);
		$tdata['friday'] = $this->input->post('frifrom', true).' - '.$this->input->post('frito', true);
		$tdata['saturday'] = $this->input->post('saturfrom', true).' - '.$this->input->post('saturto', true);
		$tdata['sunday'] = $this->input->post('sunfrom', true).' - '.$this->input->post('sunto', true);
		$this->_update_tb('timetable', 'profileid', $id, $tdata);

		$profile = $this->profile->get_where_custom('id', $id);
		$data['profileName'] = $profile->row()->profilename;
		$data['color'] = "blue";
		$data['msg'] ="Your Profile Timetable  has been Updated Successifully ";
		$data['mpanel_f'] = "profileTimetable";

	} else {

		$data['color'] = "blue";
		$data['msg'] ="";
		$data['mpanel_f'] = "profileTimetable";

	}
	

		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Appointment";
		//$data['mpanel_f'] = "profileTimetable";
		if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
		} else {
			redirect('Home');
		}

}




//default codes xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

function get($order_by) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->get($order_by);
return $query;
}

function get_dist($col) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->get_dist($col);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->get_where_custom($col, $value);
return $query;
}

function get_where_custom2($col1, $value1, $col2, $value2) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->get_where_custom2($col1, $value1, $col2, $value2);
return $query;
}

function get_where_custom_tb($tb, $col, $value) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->get_where_custom_tb($tb, $col, $value);
return $query;
}

function _insert($data) {
$this->load->model('Mdl_appointment');
$this->Mdl_appointment->_insert($data);
}

function _update($id, $data) {
$this->load->model('Mdl_appointment');
$this->Mdl_appointment->_update($id, $data);
}

function _update_custome($col, $value, $data) {
$this->load->model('Mdl_appointment');
$this->Mdl_appointment->_update_custome($col, $value, $data);
}

function _update_tb($tb, $col, $value, $data) {
$this->load->model('Mdl_appointment');
$this->Mdl_appointment->_update_tb($tb, $col, $value, $data);
}

function _delete($id) {
$this->load->model('Mdl_appointment');
$this->Mdl_appointment->_delete($id);
}

function _delete_custome($col, $value) {
$this->load->model('Mdl_appointment');
$this->Mdl_appointment->_delete_custome($col, $value);
}

function count_where($column, $value) {
$this->load->model('Mdl_appointment');
$count = $this->Mdl_appointment->count_where($column, $value);
return $count;
}

function count_all() {
$this->load->model('Mdl_appointment');
$count = $this->Mdl_appointment->count_all();
return $count;
}



function get_max() {
$this->load->model('Mdl_appointment');
$max_id = $this->Mdl_appointment->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('Mdl_appointment');
$query = $this->Mdl_appointment->_custom_query($mysql_query);
return $query;
}

}