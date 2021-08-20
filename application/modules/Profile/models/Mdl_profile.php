<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_profile extends CI_Model {

function __construct() {
parent::__construct();
}

function get_table() {
$table = "profile";
return $table;
}

function get($order_by) {
$table = $this->get_table();
$this->db->order_by($order_by, "DESC");
$query=$this->db->get($table);
return $query;
}

function get_dist($col) {
$table = $this->get_table();
$this->db->distinct();
$this->db->select($col);
$query=$this->db->get($table);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$table = $this->get_table();
$this->db->limit($limit, $offset);
$this->db->order_by($order_by);
$query=$this->db->get($table);
return $query;
}


function get_where($id) {
$table = $this->get_table();
$this->db->where('id', $id);
$query=$this->db->get($table);
return $query;
}


function get_where_custom($col, $value) {
$table = $this->get_table();
$this->db->where($col, $value);
$query=$this->db->get($table);
return $query;
}

function get_where_custom_tb($tb, $col, $value) {
//$table = $this->get_table();
$this->db->where($col, $value);
$query=$this->db->get($tb);
return $query;
}

function get_where_custom2($col1, $value1, $col2, $value2) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2);
$this->db->where($array);
$query=$this->db->get($table);
return $query;
}

function get_where_custom2_tb($tb, $col1, $value1, $col2, $value2) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2);
$this->db->where($array);
$query=$this->db->get($tb);
return $query;
}

function get_where_custom3($col1, $value1, $col2, $value2, $col3, $value3) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2, $col3 => $value3);
$this->db->where($array);
$query=$this->db->get($table);
return $query;
}

function get_where_custom4($col1, $value1, $col2, $value2, $col3, $value3, $col4, $value4) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2, $col3 => $value3, $col4 => $value4);
$this->db->where($array);
$query=$this->db->get($table);
return $query;
}

function get_where_custom3_tb($tb, $col1, $value1, $col2, $value2, $col3, $value3) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2, $col3 => $value3);
$this->db->where($array);
$query=$this->db->get($tb);
return $query;
}

function get_col_where($tb, $col){
$table = $this->get_table($tb);
$this->db->distinct();
$this->db->select($col);
$this->db->order_by($col,"ASC");
$query=$this->db->get($tb);
return $query;
}

function get_col_where2($tb, $col, $col1, $val1){
$table = $this->get_table($tb);
$this->db->distinct();
$this->db->select($col);
$array = array($col1 => $val1);
$this->db->where($array);
$this->db->order_by($col,"ASC");
$query=$this->db->get($tb);
return $query;
}

/*=============  pagination =============*/
function get_where_custom0_limit($limit, $offset) {
$table = $this->get_table();
$this->db->limit($limit, $offset);
$this->db->order_by('id', "DESC");
$query=$this->db->get($table);
return $query;
}

function get_where_custom_limit($col, $value, $limit, $offset) {
$table = $this->get_table();
$this->db->where($col, $value);
$this->db->limit($limit, $offset);
$this->db->order_by('id', "DESC");
$query=$this->db->get($table);
return $query;
}

function get_where_custom2_limit($col1, $value1, $col2, $value2, $limit, $offset) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2);
$this->db->where($array);
$this->db->limit($limit, $offset);
$this->db->order_by('id', "DESC");
$query=$this->db->get($table);
return $query;
}

function get_where_custom3_limit($col1, $value1, $col2, $value2, $col3, $value3, $limit, $offset) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2, $col3 => $value3);
$this->db->where($array);
$this->db->limit($limit, $offset);
$this->db->order_by('id', "DESC");
$query=$this->db->get($table);
return $query;
}
/*==============end pagnation ==============*/

function _insert($data) {
$table = $this->get_table();
$this->db->insert($table, $data);
}

function _insert_tb($tb, $data) {
$this->db->insert($tb, $data);
}

function _update($id, $data) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->update($table, $data);
}

function _update_custome($col, $value, $data) {
$table = $this->get_table();
$this->db->where($col, $value);
$this->db->update($table, $data);
}

function _update_custom2_tb($tb, $col1, $value1, $col2, $value2, $data) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2);
$this->db->where($array);
$this->db->update($tb, $data);
}

function _delete($id) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->delete($table);
}


function _delete_custome($col, $value) {
$table = $this->get_table();
$this->db->where($col, $value);
$this->db->delete($table);
}

function _delete_custome3_tb($tb, $col1, $value1, $col2, $value2, $col3, $value3) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2, $col3 => $value3);
$this->db->where($array);
$this->db->delete($tb);
}

function _delete_custome4_tb($tb, $col1, $value1, $col2, $value2, $col3, $value3, $col4, $value4) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2, $col3 => $value3, $col4 => $value4);
$this->db->where($array);
$this->db->delete($tb);
}

function count_where($column, $value) {
$table = $this->get_table();
$this->db->where($column, $value);
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}

function count_where_custom2_tb($tb, $col1, $value1, $col2, $value2) {
$table = $this->get_table();
$array = array($col1 => $value1, $col2 => $value2);
$this->db->where($array);
$query=$this->db->get($tb);
$num_rows = $query->num_rows();
return $num_rows;
}

function count_all() {
$table = $this->get_table();
$query=$this->db->get($table);
$num_rows = $query->num_rows();
return $num_rows;
}

function get_max() {
$table = $this->get_table();
$this->db->select_max('id');
$query = $this->db->get($table);
$row=$query->row();
$id=$row->id;
return $id;
}

function _custom_query($mysql_query) {
$query = $this->db->query($mysql_query);
return $query;
}

/*=============== LIKE (SEARCH) =========================*/
function get_like_custom($tb, $col1, $value1){
$table = $tb;
$array = array($col1 => $value1);
$this->db->like($array);
$this->db->order_by('id',"desc");
//$this->_reconect(); // reconect to db
$query=$this->db->get($tb);
return $query;
}

function get_like_custom1($tb, $col1, $value1, $col2, $value2){
$table = $tb;
$array = array($col1 => $value1, $col2 => $value2);
$this->db->like($array);
$this->db->order_by('id',"desc");
//$this->_reconect(); // reconect to db
$query=$this->db->get($tb);
return $query;
}

function get_like_custom_limit($tb, $col1, $value1, $limit, $offset) {
$table = $tb;
$array = array($col1 => $value1);
$this->db->like($array);
$this->db->order_by('id',"desc");
$this->db->limit($limit, $offset);
$query=$this->db->get($table);
return $query;
}

function get_like_custom1_limit($tb, $col1, $value1, $col2, $value2, $limit, $offset) {
$table = $tb;
$array = array($col1 => $value1, $col2 => $value2);
$this->db->like($array);
$this->db->order_by('id',"desc");
$this->db->limit($limit, $offset);
$query=$this->db->get($table);
return $query;
}
/*================ END LIKE =============================*/


}