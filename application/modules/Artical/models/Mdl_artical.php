<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_artical extends CI_Model {

function __construct() {
parent::__construct();
}

function get_table() {
$table = "artical";
return $table;
}

function get($order_by) {
$table = $this->get_table();
$this->db->order_by($order_by, 'DESC');
$query=$this->db->get($table);
return $query;
}

function get_tb($tb, $order_by) {
$this->db->order_by($order_by);
$query=$this->db->get($tb);
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
$this->db->where($col, $value);
$this->db->order_by('id',"desc");
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


function _update_tb($tb, $id, $data) {
$this->db->where('id', $id);
$this->db->update($tb, $data);
}

function _update_custome($col, $value, $data) {
$table = $this->get_table();
$this->db->where($col, $value);
$this->db->update($table, $data);
}

function _delete($id) {
$table = $this->get_table();
$this->db->where('id', $id);
$this->db->delete($table);
}


function _delete_tb($tb, $id) {
$this->db->where('id', $id);
$this->db->delete($tb);
}


function _delete_custome($col, $value) {
$table = $this->get_table();
$this->db->where($col, $value);
$this->db->delete($table);
}

function count_where($column, $value) {
$table = $this->get_table();
$this->db->where($column, $value);
$query=$this->db->get($table);
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


/*================== get sum ======================*/
function get_sum_where_custom1($tb, $col, $col1, $value1){
$table = $this->get_table($tb);
$this->db->select_sum($col);
$array = array($col1 => $value1);
$this->db->where($array);
$query=$this->db->get($tb);
return $query;
}

function get_sum_where_custom2($tb, $col, $col1, $value1, $col2, $value2){
$table = $this->get_table($tb);
$this->db->select_sum($col);
$array = array($col1 => $value1, $col2 => $value2);
$this->db->where($array);
$query=$this->db->get($tb);
return $query;
}
/*=================== end sum =======================*/

}