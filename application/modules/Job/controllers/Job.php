<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Job extends MX_Controller
{

function __construct() {
parent::__construct();
        $this->load->library('pagination'); //for pagination
        //$this->load->helper('url'); //load url helper

		$this->load->helper('number');
		$this->load->helper('date');
		$this->load->helper('download');
		$this->load->helper('text');
		//My Modules
    $this->load->model('Mdl_job');
		$this->load->module('Profile');
		$this->load->module('Appointment');
		$this->load->module('Artical');
		$this->load->module('Admin');
		$this->load->module('Chat');
		$this->load->module('Home');
		$this->load->module('Users');
		$this->load->module('Job');
}


function index(){ 
	$data['middle_m'] ="";
	$data['mpanel_m'] = "";
	$data['mpanel_f'] = "";
	$data['bfooter_m'] ="";
	$data['bfooter_f'] ="";
	$data['color'] = "";
	$data['msg'] ='';
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
	} else {
		redirect('Home');
	}
}

function jobview(){
  $jobid = $this->uri->segment(3);
  $data['jobRes'] = $this->Mdl_job->get_where_custom_tb('job', 'jobid', $jobid);
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";
  $data['color'] = "";
  $data['msg'] ='';
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Users/login',$data);
  }
}

function post(){ 
  $data['middle_m'] ="Job";
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "job";
  $data['middle_f'] ="job";
  $data['bfooter_m'] ="Home";
  $data['bfooter_f'] ="blank";
  $data['color'] = "";
  $data['msg'] ='';
  //$data['msg'] ='<div style="text-align: center;" class="alert alert-success alert-dismissible"> <button type="button" class="close" data-dismiss="alert">&times;</button>  <strong>Info!</strong> Your job has been posted, we\'ll contact you for validation. <br> Thank you!  </div>';
  $asignee = $this->uri->segment(3);
  $asignee = ($asignee == "") ? 1 : $asignee;
  $this->session->set_userdata('asignee', $asignee);
  $this->load->view('Job/job',$data);
  /*$serviceid = $this->uri->segment(3);
  $data['jobRes'] = $this->job->get_where_custom('serviceid', $serviceid);
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }*/
}


function submitjob(){ 
  if ($this->session->userdata('logged_in')) {
    $userid = $this->session->userdata('user_id');
    $asignee = $this->session->userdata('asignee');
    $asignee = ($asignee == "") ? 1 : $asignee;
    $ref = $this->get_where_custom_tb('ref','tbl', "job")->row()->ref+1;
    $rdata['ref'] = $ref;
    $this->Mdl_job->_update_custom_tb('ref', 'tbl', "job", $rdata);
    $jobid = "PRJ".str_pad( "$ref", 8, "0", STR_PAD_LEFT );
    $jdata['jobid'] = $jobid;
    $jdata['jobtitle'] = $this->input->post('jobtitle', true);
    $jdata['serviceid'] = $this->input->post('serviceid', true);
    $jdata['cat'] = $this->get_where_custom_tb('services','id', $jdata['serviceid'])->row()->service;
    $jdata['description'] = $this->input->post('description', true);
    $jdata['budget'] = $this->input->post('budget', true);
    $jdata['totalcost'] = 100000;
    $jdata['paystatus'] = "Pending";
    //$jdata['filename'] = $this->input->post('filename', true);
    $jdata['img'] = "def.png";
    $jdata['remarks'] =  "";
    $jdata['skills'] = $this->input->post('skills', true);
    $jdata['additional1'] = "";
    $jdata['additional2'] = "";
    $jdata['postedby'] = $userid;
    $jdata['assignedto'] = $asignee;
    $jdata['acceptedby'] = "";
    $jdata['doneby'] = "";
    $jdata['closedby'] = "";
    $jdata['progress'] = "Pending";
    $jdata['status'] = "Open";
    $jdata['postedon'] = mdate('%d/%m/%Y %H:%i:%s');
    $jdata['paidon'] = "";
    $jdata['acceptedon'] = "";
    $jdata['closedon'] = "";
    $jdata['date'] = mdate('%d/%m/%Y');
    $jdata['udate'] = mdate('%Y-%m-%d');
    //----------Upload attached file-------
        $new_name = $jobid;
        $config0['upload_path']           = './uploads/job/';
        $config0['allowed_types']        = 'gif|jpg|png|pdf|csv|xlsx|ppt|doc|txt|sql';
        $config0['max_size']             = 0;
        $config0['max_width']            = 0;
        $config0['max_height']           = 0;
        $config0['file_name'] = $new_name;
        $field_name0 = "filename";
        $this->load->library('upload',$config0);
        $this->upload->do_upload($field_name0);
        $data0 = array('upload_data0' => $this->upload->data());
        $filename = $data0['upload_data0']['file_name'];
        $data0['msg']= $this->upload->display_errors();
        if (!$data0['msg'] == "") {
          $filename = "def.png";
        } 
        $jdata['filename'] = $filename;
    //---------end file upload ------------
    //insert job into job table
    $this->_insert_tb('job', $jdata);

    $data['middle_m'] ="Job";
    $data['mpanel_m'] = "Job";
    $data['mpanel_f'] = "myjobs";
    $data['middle_f'] ="myjobs";
    $data['color'] = "blue";
    $data['msg'] ='<div style="text-align: center;" class="alert alert-success alert-dismissible"> <button type="button" class="close" data-dismiss="alert">&times;</button>  <strong>Info!</strong> Your job has been posted, we\'ll contact you shortly for validation. <br> Thank you!  </div>';
    //$data['msg'] ="Your job has been posted. We'll contact you shortly for verification.";

  $data['jobRes'] = $this->job->get_where_custom('postedby', $userid);
  //if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    //$this->load->view('Home/index',$data);
    redirect('Users/login');
  }
}

/*$jdata['jobid'] = $this->input->post('jobid', true);
$jdata['jobtitle'] = $this->input->post('jobtitle', true);
$jdata['serviceid'] = $this->input->post('serviceid', true);
$jdata['cat'] = $this->input->post('cat', true);
$jdata['description'] = $this->input->post('description', true);
$jdata['budget'] = $this->input->post('budget', true);
$jdata['totalcost'] = $this->input->post('totalcost', true);
$jdata['paystatus'] = $this->input->post('paystatus', true);
$jdata['filename'] = $this->input->post('filename', true);
$jdata['img'] = $this->input->post('img', true);
$jdata['remarks'] = $this->input->post('remarks', true);
$jdata['skills'] = $this->input->post('skills', true);
$jdata['additional1'] = $this->input->post('additional1', true);
$jdata['additional2'] = $this->input->post('additional2', true);
$jdata['postedby'] = $this->input->post('postedby', true);
$jdata['assignedto'] = $this->input->post('assignedto', true);
$jdata['acceptedby'] = $this->input->post('acceptedby', true);
$jdata['doneby'] = $this->input->post('doneby', true);
$jdata['closedby'] = $this->input->post('closedby', true);
$jdata['progress'] = $this->input->post('progress', true);
$jdata['status'] = $this->input->post('status', true);
$jdata['postedon'] = $this->input->post('postedon', true);
$jdata['paidon'] = $this->input->post('paidon', true);
$jdata['acceptedon'] = $this->input->post('acceptedon', true);
$jdata['closedon'] = $this->input->post('closedon', true);
$jdata['date'] = mdate('%d/%m/%Y');
$jdata['udate'] = mdate('%Y-%m-%d');*/

function freelancer(){ 
	$data['middle_m'] ="";
	$data['mpanel_m'] = "";
	$data['mpanel_f'] = "";
	$data['bfooter_m'] ="";
	$data['bfooter_f'] ="";
	$data['color'] = "";
	$data['msg'] ='';
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
	} else {
		redirect('Home');
	}
}

function findjob(){ 
  $data['middle_m'] ="Job";
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";
  $data['middle_f'] ="joblist";
  $data['bfooter_m'] ="Home";
  $data['bfooter_f'] ="blank";
  $data['color'] = "";
  $data['msg'] ='';
  $serviceid = $this->uri->segment(3);
  if ($serviceid == 0) {
    $data['jobRes'] = $this->job->get_where_custom('status', "Open");
  } else {
    $data['jobRes'] = $this->job->get_where_custom2('serviceid', $serviceid,'status', "Open");
  }
  
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
}

function job_view(){ 
  $data['middle_m'] ="Job";
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";
  $data['middle_f'] ="joblist";
  $data['bfooter_m'] ="Home";
  $data['bfooter_f'] ="blank";
  $data['color'] = "";
  $data['msg'] ='';
  $jobid = $this->uri->segment(3);
  $data['jobRes'] = $this->job->get_where_custom('jobid', $jobid);
  $data['jobid'] = $jobid;
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
}


function myjobs(){ 
  $userid = $this->session->userdata('user_id');
  $data['middle_m'] ="Job";
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "myjobs";
  $data['middle_f'] ="myjobs";
  $data['bfooter_m'] ="Home";
  $data['bfooter_f'] ="blank";
  $data['color'] = "";
  $data['msg'] ='';
  $refid = $this->uri->segment(3);
  if ($refid == 0) { //Posted by me
    $data['jobRes'] = $this->job->get_where_custom2('postedby',$userid,'status', "Open");
  } else if ($refid == 1) { //Assigned to me
    $data['jobRes'] = $this->job->get_where_custom2('assignedto', $userid,'status', "Open");
  } else if ($refid == 2) { //Accepted by me
    $data['jobRes'] = $this->job->get_where_custom2('acceptedby ', $userid,'status', "Open");
  } else if ($refid == 3) { //Done by me
    $data['jobRes'] = $this->job->get_where_custom2('doneby', $userid,'status', "Closed");
  } else if ($refid == 4) { //Done by me
    $data['jobRes'] = $this->job->get_where_custom2('closedby', $userid,'status', "Closed");
  } else if ($refid == 5) { //in-progress
    $data['jobRes'] = $this->job->get_where_custom2('postedby', $userid,'status', "Inprogress");
  } else if ($refid == 6) { //completed
    $data['jobRes'] = $this->job->get_where_custom2('postedby', $userid,'status', "Closed");
  } else if ($refid == 7) { // revised
    $data['jobRes'] = $this->job->get_where_custom2('postedby', $userid,'status', "Revised");
  }
  
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
}

function mybids() {
  $userid = $this->session->userdata('user_id');
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "mybid";
  $data['msg'] = "";
  $data['color'] = "";
  $data['bidRes'] = $this->Mdl_job->get_where_custom_tb('bid', 'bidder', $userid);
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
}

function jobbid() {
  if ($this->session->userdata('logged_in')) {
  $userid = $this->session->userdata('user_id');
  $bidBtn = $this->input->post('bidBtn', true);
  if (!$bidBtn == "") {
    # code...
    $bdata['jobid'] = $bidBtn;
    $bdata['bidder'] =  $userid;
    $bdata['amount'] = $this->input->post('amount', true);
    $bdata['duration'] = $this->input->post('duration', true);
    $bdata['remarks'] = $this->input->post('remarks', true);
    $bdata['date'] = mdate('%d/%m/%Y');
    $bdata['udate'] = mdate('%Y-%m-%d %H:%i:%s');
    //insert bid into DB
    $bidres = $this->Mdl_job->get_where_custom2_tb('bid','jobid', $bdata['jobid'], 'bidder', $userid);
    if ($bidres->num_rows()>0) {
      # code...
      $data['mpanel_m'] = "Job";
      $data['mpanel_f'] = "mybid";
      $data['bidRes'] = $this->Mdl_job->get_where_custom_tb('bid', 'bidder', $userid);
      $data['color'] = "red";
      $data['msg'] =  '<div class="alert alert-danger alert-dismissible"> <button type="button" class="close" data-dismiss="alert">&times;</button>  <strong>Warning!</strong> You arleady have a bid to this project. </div>';
    } else {
      # code...
      $this->_insert_tb('bid', $bdata);
      $data['mpanel_m'] = "Job";
      $data['mpanel_f'] = "mybid";
      $data['bidRes'] = $this->Mdl_job->get_where_custom_tb('bid', 'bidder', $userid);
      $data['msg'] =  '<div class="alert alert-success alert-dismissible"> <button type="button" class="close" data-dismiss="alert">&times;</button>  <strong>Info!</strong> Your bid has been placed, we will contact you for validation! </div>';
      $data['color'] = "blue";
    }
    
  } else {
    # code...
    $data['msg'] = "";
    $data['color'] = "";
  }

  //if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $data['msg'] = "";
    $data['color'] = "";
    $this->load->view('Users/login',$data);
  }
}


function accept_job() {
  $jobid = $this->uri->segment(3);
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";

  $jdata['totalcost'] = $this->input->post('amount',true);
  $jdata['timeline'] = $this->input->post('timeline',true);
  $jdata['acceptedby'] = $this->session->userdata('user_id');
  $jdata['bidstatus'] = "Closed";
  $jdata['progress'] = "In-Progress";
  $jdata['acceptedon'] = mdate('%d/%m/%Y %H:%i:%s');
  $jdata['udate'] = mdate('%Y-%m-%d');
  $this->Mdl_job->_update_custom_tb('job', 'jobid', $jobid, $jdata);

  $data['color'] = "";
  $data['msg'] ='<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Done!</strong> This project has been accepted for implementation.</div>';
  $data['jobRes'] = $this->job->get_where_custom('jobid', $jobid);
  $data['jobid'] = $jobid;
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
  //send an email
  //end email sending
}

function paid_job() {
  $jobid = $this->uri->segment(3);
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";

  $jdata['paidamount'] = $this->input->post('amount',true);
  $jdata['commission'] = $this->input->post('commission',true);
  $jdata['payupdatedby'] = $this->session->userdata('user_id');
  $jdata['paystatus'] = "Done";
  $jdata['paidon'] = mdate('%d/%m/%Y %H:%i:%s');
  $jdata['udate'] = mdate('%Y-%m-%d');
  $this->Mdl_job->_update_custom_tb('job', 'jobid', $jobid, $jdata);

  $data['color'] = "";
  $data['msg'] ='<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Done!</strong> This project has been marked as paid. Continue to close the project.</div>';
  $data['jobRes'] = $this->job->get_where_custom('jobid', $jobid);
  $data['jobid'] = $jobid;
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
  //send an email
  //end email sending
}

function close_job() {
  $jobid = $this->uri->segment(3);
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";

  $jdata['doneby'] = $this->session->userdata('user_id');
  $jdata['closedby'] = $this->session->userdata('user_id');
  $jdata['progress'] = "Completed";
  $jdata['status'] = "Closed";
  $jdata['closedon'] = mdate('%d/%m/%Y %H:%i:%s');
  $jdata['udate'] = mdate('%Y-%m-%d');
  $this->Mdl_job->_update_custom_tb('job', 'jobid', $jobid, $jdata);

  $data['color'] = "";
  $data['msg'] ='<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Done!</strong> This project has been marked as closed. Congratulation for completing this project on time </div>';
  $data['jobRes'] = $this->job->get_where_custom('jobid', $jobid);
  $data['jobid'] = $jobid;
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
  //send an email
  //end email sending
}

function close_bid() {
  $jobid = $this->uri->segment(3);
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";
  $jdata['bidstatus'] = "Closed";
  $jdata['udate'] = mdate('%Y-%m-%d');
  $this->Mdl_job->_update_custom_tb('job', 'jobid', $jobid, $jdata);
  $data['color'] = "";
  $data['msg'] ='<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Done!</strong> Bidding to this project has been closed. Accept it for implementation.</div>';
  $data['jobRes'] = $this->job->get_where_custom('jobid', $jobid);
  $data['jobid'] = $jobid;
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
  //send an email
  //end email sending
}

function cancel_job() {
  $jobid = $this->uri->segment(3);
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "joblist";

  $jdata['cancelledby'] = $this->session->userdata('user_id');
  $jdata['remarks'] = $this->input->post('remarks',true);
  $jdata['paystatus'] = "Cancelled";
  $jdata['progress'] = "Cancelled";
  $jdata['bidstatus'] = "Closed";
  $jdata['status'] = "Cancelled";
  $jdata['cancelledon'] = mdate('%d/%m/%Y %H:%i:%s');
  $jdata['udate'] = mdate('%Y-%m-%d');
  $this->Mdl_job->_update_custom_tb('job', 'jobid', $jobid, $jdata);

  $data['color'] = "";
  $data['msg'] ='<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning!</strong> This project has been marked as cancelled. Project owner has been notified to post another job.</div>';
  $data['jobRes'] = $this->job->get_where_custom('jobid', $jobid);
  $data['jobid'] = $jobid;
  if ($this->session->userdata('logged_in')) {
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    $this->load->view('Home/index',$data);
  }
  //send an email
  //end email sending
}


function jobedit() {
  $id = $this->uri->segment(3);
  $data['color'] = "";
  $data['msg'] = "";
  $data['jobRes'] = $this->job->get_where_custom('id', $id)->row();
  $this->load->view('Job/job_e',$data);
}

function modifyjob() {
  if ($this->session->userdata('logged_in')) {
    $userid = $this->session->userdata('user_id');
    $jobid = $this->input->post('jobBtn', true);
    $jdata['jobtitle'] = $this->input->post('jobtitle', true);
    $jdata['serviceid'] = $this->input->post('serviceid', true);
    $jdata['cat'] = $this->get_where_custom_tb('services','id', $jdata['serviceid'])->row()->service;
    $jdata['description'] = $this->input->post('description', true);
    $jdata['budget'] = $this->input->post('budget', true);
    $jdata['totalcost'] = 100000;
    $jdata['img'] = "def.png";
    $jdata['skills'] = $this->input->post('skills', true);
    $jdata['udate'] = mdate('%Y-%m-%d');
    //----------Upload attached file-------
        $new_name = $jobid;
        $config0['upload_path']           = './uploads/job/';
        $config0['allowed_types']        = 'gif|jpg|png|pdf|csv|xlsx|ppt|doc|txt|sql';
        $config0['max_size']             = 0;
        $config0['max_width']            = 0;
        $config0['max_height']           = 0;
        $config0['file_name'] = $new_name;
        $field_name0 = "filename";
        $this->load->library('upload',$config0);
        $this->upload->do_upload($field_name0);
        $data0 = array('upload_data0' => $this->upload->data());
        $filename = $data0['upload_data0']['file_name'];
        $data0['msg']= $this->upload->display_errors();
        if (!$data0['msg'] == "") {
          $filename = "def.png";
        } 
        $jdata['filename'] = $filename;
    //---------end file upload ------------
    //insert job into job table
    $this->Mdl_job->_update_custom_tb('job', 'jobid', $jobid, $jdata);

    $data['middle_m'] ="Job";
    $data['mpanel_m'] = "Job";
    $data['mpanel_f'] = "myjobs";
    $data['middle_f'] ="myjobs";
    $data['color'] = "blue";
    $data['jobid'] = $jobid;
    $data['msg'] ='<div style="text-align: center;" class="alert alert-success alert-dismissible"> <button type="button" class="close" data-dismiss="alert">&times;</button>  <strong>Info!</strong> Your job has been updated, we\'ll contact you shortly for validation. <br> Thank you!  </div>';
  $data['jobRes'] = $this->job->get_where_custom('postedby', $userid);
    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
  } else {
    redirect('Users/login');
  }
}

/*
id  
jobid 
jobtitle  
serviceid 
cat 
description 
budget  
totalcost 
paystatus 
filename  
img 
remarks 
skills  
additional1 
additional2 
postedby  
assignedto  
acceptedby  
doneby  
closedby  
status  
postedon  
paidon  
acceptedon  
closedon  
date  
udate 
*/

/*ADMIN ONLY*/
function manage_jobs() {
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "manage_jobs";
  $data['color'] = "";
  $data['msg'] ='';
  
  $keyword = $this->uri->segment(3);
  if ($keyword=="inprogress") {
    $keyword = "In-Progress";
    $data['jobRes'] = $this->job->get_where_custom2('progress', $keyword, 'status', "Open");
  } else if ($keyword=="accepted") {
    $keyword = "In-Progress";
    $data['jobRes'] = $this->job->get_where_custom2('progress', $keyword, 'status', "Open");
  } else if ($keyword=="pending") {
    $keyword = "Pending";
    $data['jobRes'] = $this->job->get_where_custom2('progress', $keyword, 'status', "Open");
  } else {
    $data['jobRes'] = $this->job->get_where_custom('status', "Open");
  }

  if ($this->session->userdata('logged_in')) {
      if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
    } else {
      $this->load->view('Home/index',$data);
  }
}

function historical_jobs() {
  $data['mpanel_m'] = "Job";
  $data['mpanel_f'] = "historical_jobs";
  $data['color'] = "";
  $data['msg'] ='';

  $keyword = $this->uri->segment(3);
  if ($keyword=="cancelled") {
    $keyword = "Cancelled";
    $data['jobRes'] = $this->job->get_where_custom2('progress', $keyword, 'status', "Cancelled");
  } else if ($keyword=="pendingpayment") {
    $keyword = "Pending";
    $data['jobRes'] = $this->job->get_where_custom('paystatus', $keyword);
  } else if ($keyword=="completed") {
    $keyword = "Completed";
    $data['jobRes'] = $this->job->get_where_custom2('progress', $keyword, 'status', "Closed");
  } else {
    $data['jobRes'] = $this->job->get_where_custom('status', "Closed");
  }
  if ($this->session->userdata('logged_in')) {
      if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
    } else {
      $this->load->view('Home/index',$data);
  }
}

/*ADMIN ONLY*/



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

/*==================  end huduma ================*/


//default codes xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

function get($order_by) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get($order_by);
return $query;
}

function get_dist($col) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_dist($col);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom($col, $value);
return $query;
}

function get_col_where($tb, $col) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_col_where($tb, $col);
return $query;
}

function get_col_where2($tb, $col, $col1, $val1) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_col_where2($tb, $col, $col1, $val1);
return $query;
}

function get_where_custom_tb($tb, $col, $value) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom_tb($tb, $col, $value);
return $query;
}

function get_where_custom2($col1, $value1, $col2, $value2) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom2($col1, $value1, $col2, $value2);
return $query;
}

function get_where_custom3($col1, $value1, $col2, $value2, $col3, $value3) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom3($col1, $value1, $col2, $value2, $col3, $value3);
return $query;
}

/*=============  pagination =============*/
function get_where_custom0_limit($limit, $offset) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom0_limit($limit, $offset);
return $query;
}

function get_where_custom_limit($col, $value, $limit, $offset) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom_limit($col, $value, $limit, $offset);
return $query;
}

function get_where_custom2_limit($col1, $value1, $col2, $value2, $limit, $offset) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom2_limit($col1, $value1, $col2, $value2, $limit, $offset);
return $query;
}

function get_where_custom3_limit($col1, $value1, $col2, $value2, $col3, $value3, $limit, $offset) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_where_custom3_limit($col1, $value1, $col2, $value2, $col3, $value3, $limit, $offset);
return $query;
}
/*================ end pagination ============*/

function _insert($data) {
$this->load->model('Mdl_job');
$this->Mdl_job->_insert($data);
}

function _insert_tb($tb, $data) {
$this->load->model('Mdl_job');
$this->Mdl_job->_insert_tb($tb, $data);
}

function _update($id, $data) {
$this->load->model('Mdl_job');
$this->Mdl_job->_update($id, $data);
}

function _update_custom($col, $value, $data) {
$this->load->model('Mdl_job');
$this->Mdl_job->_update_custome($col, $value, $data);
}

function _delete($id) {
$this->load->model('Mdl_job');
$this->Mdl_job->_delete($id);
}

function _delete_custome($col, $value) {
$this->load->model('Mdl_job');
$this->Mdl_job->_delete_custome($col, $value);
}

function count_where($column, $value) {
$this->load->model('Mdl_job');
$count = $this->Mdl_job->count_where($column, $value);
return $count;
}

function count_all() {
$this->load->model('Mdl_job');
$count = $this->Mdl_job->count_all();
return $count;
}



function get_max() {
$this->load->model('Mdl_job');
$max_id = $this->Mdl_job->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->_custom_query($mysql_query);
return $query;
}

/*=============== LIKE (SEARCH) =========================*/
function get_like_custom($tb, $col1, $value1) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_like_custom($tb, $col1, $value1);
return $query;
}

function get_like_custom1($tb, $col1, $value1, $col2, $value2) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_like_custom1($tb, $col1, $value1, $col2, $value2);
return $query;
}

function get_like_custom_limit($tb, $col1, $value1,  $limit, $offset) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_like_custom_limit($tb, $col1, $value1, $limit, $offset);
return $query;
}

function get_like_custom1_limit($tb, $col1, $value1, $col2, $value2, $limit, $offset) {
$this->load->model('Mdl_job');
$query = $this->Mdl_job->get_like_custom1_limit($tb, $col1, $value1, $col2, $value2, $limit, $offset);
return $query;
}
/*================ END LIKE =============================*/


}