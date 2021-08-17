<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends MX_Controller
{

function __construct() {
		parent::__construct();
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper('download');
		$this->load->helper('text');//calling string helper 
		$this->load->helper('url');
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
		# code...
		//$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	//$data['mpanel_m'] = "Admin";
		//$data['mpanel_f'] = "user_dashboard";
		$data['color'] = "red";
		$data['msg'] ="";
		$data['msg'] = "";	

		//check if have profiles
		$data['profileRes'] = $this->profile->get_where_custom('userid', $this->session->userdata('user_id') );
		
		if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('user_role') == "Admin") {
				$data['mpanel_m'] = "Admin";
				$data['mpanel_f'] = "admin_dashboard"; 
				$this->load->view('Admin/indexa',$data); 
			} else if ($this->session->userdata('user_role') == "Freelancer") { 
				if ($data['profileRes']->num_rows() == 0) {
					//$data['mpanel_m'] = "Profile";
					//$data['mpanel_f'] = "user_dashboard";
					//$data['mpanel_f'] = "createProfile";
					redirect('Profile/complete_registration');
				} else {
					$data['mpanel_m'] = "Admin";
					//$data['middle_f'] = "m_container"; 
					$data['mpanel_f'] = "user_dashboard"; 
				}
				$this->load->view('Admin/indexf',$data); 
			} else { 
				$data['mpanel_m'] = "Admin";
				$data['mpanel_f'] = "user_dashboard"; 
				$this->load->view('Admin/indexu',$data); 
			}
		} else {
			redirect('Home');
		}

		//$this->load->view('Admin/indexa',$data);

}


function dashboard() {


	echo "me here";
}












//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
function get($order_by) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where($id);
return $query;
}

function get_where_email($email) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_email($email);
return $query;
}
function get_all($tb) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_all($tb);
return $query;
}


function get_col_where($tb, $col) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_col_where($tb, $col);
return $query;
}


function get_where_custom($col, $value) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_custom($col, $value);
return $query;
}

function get_where_custom1($tb, $col1, $value1) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_custom1($tb, $col1, $value1);
return $query;
}

function get_where_custom2($tb, $col1, $value1, $col2, $value2) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_custom2($tb, $col1, $value1, $col2, $value2);
return $query;
}

function get_where_custom3($tb, $col1, $value1, $col2, $value2, $col3, $value3) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_custom3($tb, $col1, $value1, $col2, $value2, $col3, $value3) ;
return $query;
}

function get_where_custom4($tb, $col1, $value1, $col2, $value2, $col3, $value3, $col4, $value4) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_custom4($tb, $col1, $value1, $col2, $value2, $col3, $value3, $col4, $value4) ;
return $query;
}


function _insert($data) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_insert($data);
}

function _update($id, $data) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_update($id, $data);
}

function _update2($tb, $col, $value, $data) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_update2($tb, $col, $value, $data);
}

function _delete($id) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_delete($id);
}

function count_where($column, $value) {
$this->load->model('Mdl_admin');
$count = $this->Mdl_admin->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('Mdl_admin');
$max_id = $this->Mdl_admin->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->_custom_query($mysql_query);
return $query;
}


//CODES
function getcode($order_by) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->getcode($order_by);
return $query;
}

function getcode_where($col,$code) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->getcode_where($col,$code);
return $query;
}

function getcode_wherenot($col,$code) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->getcode_wherenot($col,$code);
return $query;
}

function _insertcode($data) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_insertcode($data);
}

function _updatecode($col,$code, $data){
$this->load->model('Mdl_admin');
$this->Mdl_admin->_updatecode($col,$code, $data);
}



//xxxxxxxxxxxxxxxxxxxxxxx MULT TABLE XXXXXXXXXXXXXXXX
function get_tb($tb, $order_by) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_tb($tb, $order_by);
return $query;
}

function _insert_tb($tb,$data) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_insert_tb($tb,$data);
}

function _update_tb($tb, $id, $data) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_update_tb($tb,$id, $data);
}   

function _delete_tb($tb, $id) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_delete_tb($tb, $id);
}

function _delete_where_tb($tb, $col, $value) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_delete_where_tb($tb, $col, $value);
}

function _delete_all_tb($tb) {
$this->load->model('Mdl_admin');
$this->Mdl_admin->_delete_all_tb($tb);
}

function get_where_tb($tb, $id) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_tb($tb, $id);
return $query;
}

function get_where_custom_tb($tb, $col, $value) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_where_custom_tb($tb, $col, $value);
return $query;
}

function count_all_tb($tb) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->count_all_tb($tb);
return $query;
}



/*============================== get sum =================*/

function get_sum_where_custom1($tb, $col, $col1, $value1) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_sum_where_custom1($tb, $col, $col1, $value1);
return $query;
}

function get_sum_where_custom2($tb, $col, $col1, $value1, $col2, $value2) {
$this->load->model('Mdl_admin');
$query = $this->Mdl_admin->get_sum_where_custom2($tb, $col, $col1, $value1, $col2, $value2);
return $query;
}
/*=========================== end sum ====================*/




}