<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Mdl_home class.
 * 
 * @extends CI_Model
 */
class Mdl_home extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		
	}
	
	
	/**
	 * resolve_user_login function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */

	public function resolve_user_login($username, $password) {
		
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('username', $username);
		$dbPassword=(string)$this->db->get()->row('password');
		/*
		$hash = $this->db->get()->row('ownerPassword');
		return $this->verify_password_hash($password, $hash);
		*/
		return strcmp($dbPassword,$password);
		
	}

	public function get_user_id_from_username($username) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('username', $username);

		return $this->db->get()->row('id');
		
	}

	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}




//end (below not yet used-----use in future)
	
	/**
	 * hash_password function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($password) {
		
		return password_hash($password, PASSWORD_BCRYPT);
		
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}





function get($tb,$order_by) {
//$table = $this->get_table();
$this->db->order_by($order_by, "DESC");
$query=$this->db->get($tb);
return $query;
}



function _update($tb, $col, $value, $data) {
	$table = $this->get_table();
	$this->db->where($col, $value);
	$this->db->update($tb, $data);
}

function get_where_custom1($tb, $col1, $value1){
$table = $this->get_table($tb);
$array = array($col1 => $value1);
$this->db->where($array);
$this->db->order_by('id',"desc");
$query=$this->db->get($tb);
return $query;
}

function _insert_tb($tb, $data) {
$this->db->insert($tb, $data);
}

function get_where_custom_tb($tb, $col, $value) {
$this->db->where($col, $value);
$this->db->order_by('id', "DESC");
$query=$this->db->get($tb);
return $query;
}


	
}
