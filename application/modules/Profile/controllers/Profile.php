<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends MX_Controller
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
		$this->load->model('Mdl_profile');
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
		$data['msg'] ="";

		//all frofile of selected category
		$data['sideprofileres'] = $this->get('id');
		//find selected user
		$selectedID = $this->uri->segment(3);

		if (!$selectedID == "") {
			# code...
			$this->session->set_userdata('selectedid', $selectedID);
			$data['profileres'] = $this->get_where_custom('id',$selectedID );
			$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$selectedID, 'status', "Open" );
		} else {
			$this->session->set_userdata('selectedid', 1);
			$data['profileres'] = $this->get_where_custom('id',$data['sideprofileres']->row()->id );
			$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$data['sideprofileres']->row()->id, 'status', "Open" );
		}

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
		$data['userid'] = $data['profileres']->row()->userid;
		$data['date'] = $data['profileres']->row()->date;
		$data['udate'] = $data['profileres']->row()->udate;
		
		# code...
			$data['middle_m'] ="Profile";
			$data['middle_f'] ="profile";
			$data['bfooter_m'] ="Home";
			$data['bfooter_f'] ="profileSlider";
			$this->load->view('Home/index',$data);
	}


function complete_registration(){
	$data['msg'] = "";	
	if ($this->session->userdata('logged_in')) {
		$this->load->view('Profile/complete_registration',$data);
	} else {
		redirect('Home');
	}
	 
}


function listprofiles(){ 
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['mpanel_f'] = "listprofiles";
	$data['middle_f'] ="listprofiles";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "";
	$data['msg'] ='';
	$cat = $this->uri->segment(3);
	if ($cat== "all") {
		$data['title'] ='Available profiles';
		$data['profileRes'] = $this->profile->get('id');
	} else {
		$data['title'] = '<b>'.$cat.'</b> : Available profiles';
		$data['profileRes'] = $this->profile->get_where_custom('category', $cat);
	}
	
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}

function findprofile(){ 
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "";
	$data['msg'] ='';

	$findBtn = $this->input->post('findBtn',true);
	$type = $this->input->post('type',true);
	$category = $this->input->post('category',true);
	$subcategory = $this->input->post('subcategory',true);
	if (!$findBtn=="") {
		$data['title'] ='Search results for:  <b>'.$type.' -> '.$category.' -> '.$subcategory.'</b>';
		$data['profileRes'] = $this->profile->Mdl_profile->get_where_custom4('type', $type, 'category', $category, 'subcategory', $subcategory, 'status', "Active");
		$data['mpanel_f'] = "listprofiles";
		$data['middle_f'] ="listprofiles";
	} else {
		$data['mpanel_f'] = "findprofile";
		$data['middle_f'] ="findprofile";
	}
	
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}


function payments(){ 
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['mpanel_f'] = "payments";
	$data['middle_f'] ="payments";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "";
	$data['msg'] ='';
	
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}

function paynow(){ 
	$userid = $this->session->userdata('user_id');
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['mpanel_f'] = "paynow";
	$data['middle_f'] ="paynow";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "";
	$data['msg'] ='';

	//check if user is logged in
	if ($this->session->userdata('logged_in')) {

	$period = $this->uri->segment(3);
	if ($period == 1) { $amount = 1500; } else if ($period == 7) { $amount = 8000; } else if ($period == 14) { $amount = 15000; } else if ($period == 30) { $amount = 25000; }
	$today = mdate('%Y-%m-%d');
    $days = "+".($period)." day";
    $expdate = date('Y-m-d',strtotime($days, strtotime($today)));

	$pdata = array(
		'userid' => $userid,
		'invoiceno' => strtoupper(substr(md5(uniqid(mt_rand(), true)) , 0, 6)),
		'controlno' => strtoupper(substr(md5(uniqid(mt_rand(), true)) , 0, 12)),
		'payno' => "92222396",
		'amount' => $amount,
		'period' => $period,
		'paymethod' => "",
		'paid' => "No",
		'receipt' => "Pending",
		'status' => "Pending",
		'expdate' => $expdate,
        'date' => mdate('%Y-%m-%d'),
        'udate' => mdate('%Y-%m-%d %H:%i:%s')
    ); 
    //Update pending to in-progress
    $udata = array(
		'status' => "Cancelled",
        'udate' => mdate('%Y-%m-%d %H:%i:%s')
    ); 
    $this->Mdl_profile->_update_custom2_tb('payment', 'userid', $userid, 'status', "Pending", $udata);
    //Insert new payment
    $this->_insert_tb('payment', $pdata);
    //redirect to show payment methods
    redirect('Profile/showPaymentMethods');
	
	//if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
	} else {
		redirect('Users/login');
		//$this->load->view('Home/index',$data);
	}
}

function showPaymentMethods(){ 
	$userid = $this->session->userdata('user_id');
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['mpanel_f'] = "paynow";
	$data['middle_f'] ="paynow";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "";
	$data['msg'] ='';

	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}




function freelancer(){ 
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['mpanel_f'] = "freelancerlist";
	$data['middle_f'] ="freelancerlist";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "";
	$data['msg'] ='';
	$serviceid = $this->uri->segment(3);
	if ($serviceid==0) {
		$data['profileRes'] = $this->profile->get('id');
	} else {
		$data['profileRes'] = $this->profile->get_where_custom('serviceid', $serviceid);
	}
	
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}

function freelancer2(){ 
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['mpanel_f'] = "freelancerlist";
	$data['middle_f'] ="freelancerlist";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "";
	$data['msg'] ='';
	$service = $this->input->post('service', true);
	$findBtn = $this->input->post('findBtn', true);
	$serviceid = $service;
	$data['profileRes'] = $this->profile->get_where_custom('serviceid', $serviceid);
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}



function get_profile_data_from_post(){
	$data['profilename'] = $this->input->post('pname', true);
	$data['gender'] = $this->input->post('gender', true);
	$data['yob'] = mdate('%Y') - $this->input->post('age', true);
	$data['idno'] = $this->input->post('idno', true);
	$data['type'] = $this->input->post('type', true);
	$data['category'] = $this->input->post('cat', true);
	$data['subcategory'] = $this->input->post('subcat', true);
	$data['userid'] = $this->session->userdata('user_id');
	$data['description'] = $this->input->post('desc', true);;
	$data['country'] = $this->input->post('country', true);
	$data['region'] = $this->input->post('region', true);
	$data['phyaddress'] = $this->input->post('phyaddress', true);
	$data['email'] = $this->input->post('email', true);;
	$data['phone'] = $this->input->post('phone', true);;
	$data['altphone'] = $this->input->post('altphone', true);;
	$data['date'] = mdate('%d-%m-%Y');
	$data['searchprofile'] = $data['profilename']." : ".$data['type']." : ".$data['category']." : ".$data['subcategory']." : ".$data['country']." : ".$data['region']." : ".$data['phyaddress']." : ".$data['email']." : ".$data['phone']." : ".$data['altphone']." : ".$data['description']." : ".$data['date'];

	//new name for an image
	//$new_name = ($this->get_max() +1)."";
	$new_name = ($this->get_max() +1)."_".$this->session->userdata('user_username')."";
	//upload images
		// Crope , resize and upload img 0
		$config0['upload_path']           = './assets/img/profile/0/';
        $config0['allowed_types']        = 'gif|jpg|png';
        $config0['max_size']             = 6048;
        $config0['max_width']            = 3464;
        $config0['max_height']           = 3464;
        $config0['file_name'] = $new_name;
        $field_name0 = "img";
        $this->load->library('upload',$config0);
        $this->upload->do_upload($field_name0);
        $data0 = array('upload_data0' => $this->upload->data());
        $artImage_name = $data0['upload_data0']['file_name'];
		$data0['artimgsms']= $this->upload->display_errors();
		//resizing
		//$image_data = $this->upload->data();
                    /*$config0['image_library'] = 'gd2';
                    $config0['source_image'] = './assets/img/profile/0/'.$artImage_name; //get original image
                    $config0['maintain_ratio'] = TRUE;
                    $config0['width'] = 150;
                    $config0['height'] = 100;
                    $this->load->library('image_lib', $config0);
                    $this->image_lib->resize();*/

		// first image
		/*$config['upload_path']          = './assets/img/profile/1/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 6048;
        $config['max_width']            = 3464;
        $config['max_height']           = 3464;
        $config['file_name'] = $new_name;
        $field_name = "img";
        $this->load->library('upload',$config);
        $this->upload->do_upload($field_name);
        $data1 = array('upload_data' => $this->upload->data());
        $artImage_name = $data1['upload_data']['file_name'];
		$data1['artimgsms']= $this->upload->display_errors();*/
	
	echo $data0['artimgsms'];
	if (!$data0['artimgsms'] == "") {
		$artImage_name = "def.png";
	} 

	//upload PDF files
	$config1['upload_path']   = './uploads/attachments/';
    $config1['allowed_types'] = 'pdf|jpg|png';
    $config1['file_name'] = $new_name."_ID";
    $this->load->library('upload',$config1);
    $this->upload->do_upload('idfile');
    $data1 = array('upload_data' => $this->upload->data());
    $data['idfile'] = $data1['upload_data']['file_name'];

    $config2['upload_path']   = './uploads/attachments/';
    $config2['allowed_types'] = 'pdf|jpg|png';
    $config2['file_name'] = $new_name."_Certificate";
    $this->load->library('upload',$config2);
    $this->upload->do_upload('certificate');
    $data2 = array('upload_data' => $this->upload->data());
    $data['certificate'] = $data2['upload_data']['file_name'];

    $config3['upload_path']   = './uploads/attachments/';
    $config3['allowed_types'] = 'pdf|jpg|png';
    $config3['file_name'] = $new_name."_Resume";
    $this->load->library('upload',$config3);
    $this->upload->do_upload('resume');
    $data3 = array('upload_data' => $this->upload->data());
    $data['resume'] = $data3['upload_data']['file_name'];
	//End PD files upload

	$data['img'] = $artImage_name;
	$data['status'] = "Active";
	$data['date'] = mdate('%d-%m-%Y');
	$data['udate'] = mdate('%d-%m-%Y %H:%i:%s');
	
	//echo $data1['artimgsms'];
	return $data;
}



function get_profile_edit_data_from_post(){
	$data['profilename'] = $this->input->post('pname', true);
	$data['gender'] = $this->input->post('gender', true);
	$data['yob'] = mdate('%Y') - $this->input->post('age', true);
	$data['idno'] = $this->input->post('idno', true);
	$data['type'] = $this->input->post('type', true);
	$data['category'] = $this->input->post('cat', true);
	$data['subcategory'] = $this->input->post('subcat', true);
	$data['userid'] = $this->session->userdata('user_id');
	$data['description'] = $this->input->post('desc', true);;
	$data['country'] = $this->input->post('country', true);
	$data['region'] = $this->input->post('region', true);
	$data['phyaddress'] = $this->input->post('phyaddress', true);
	$data['email'] = $this->input->post('email', true);;
	$data['phone'] = $this->input->post('phone', true);;
	$data['altphone'] = $this->input->post('altphone', true);;
	$data['date'] = mdate('%d-%m-%Y');
	$data['searchprofile'] = $data['profilename']." : ".$data['type']." : ".$data['category']." : ".$data['subcategory']." : ".$data['country']." : ".$data['region']." : ".$data['phyaddress']." : ".$data['email']." : ".$data['phone']." : ".$data['altphone']." : ".$data['description']." : ".$data['date'];

	//new name for an image
	$new_name = ($this->get_max() +1)."_".$this->session->userdata('user_username')."";
	//upload images
		// Crope , resize and upload img 0
		$config0['upload_path']           = './assets/img/profile/0/';
        $config0['allowed_types']        = 'gif|jpg|png';
        $config0['max_size']             = 6048;
        $config0['max_width']            = 3464;
        $config0['max_height']           = 3464;
        $config0['file_name'] = $new_name;
        $field_name0 = "img";
        $this->load->library('upload',$config0);
        $this->upload->do_upload($field_name0);
        $data0 = array('upload_data0' => $this->upload->data());
        $artImage_name = $data0['upload_data0']['file_name'];
		$data0['artimgsms']= $this->upload->display_errors();
		//resizing
		//$image_data = $this->upload->data();
                   /* $config0['image_library'] = 'gd2';
                    $config0['source_image'] = './assets/img/profile/0/'.$artImage_name; //get original image
                    $config0['maintain_ratio'] = TRUE;
                    $config0['width'] = 150;
                    $config0['height'] = 100;
                    $this->load->library('image_lib', $config0);
                    $this->image_lib->resize();*/

		// first image
		/*$config['upload_path']          = './assets/img/profile/1/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 6048;
        $config['max_width']            = 3464;
        $config['max_height']           = 3464;
        $config['file_name'] = $new_name;
        $field_name = "img";
        $this->load->library('upload',$config);
        $this->upload->do_upload($field_name);
        $data1 = array('upload_data' => $this->upload->data());
        $artImage_name = $data1['upload_data']['file_name'];
		$data1['artimgsms']= $this->upload->display_errors();*/
	
	if (!$data0['artimgsms'] == "") {
		$artImage_name = "def.png";
	} 

	//upload PDF files
	$config1['upload_path']   = './uploads/attachments/';
    $config1['allowed_types'] = 'pdf|jpg|png';
    $config1['file_name'] = $new_name."_ID";
    $this->load->library('upload',$config1);
    $this->upload->do_upload('idfile');
    $data1 = array('upload_data' => $this->upload->data());
    $data['idfile'] = $data1['upload_data']['file_name'];

    $config2['upload_path']   = './uploads/attachments/';
    $config2['allowed_types'] = 'pdf|jpg|png';
    $config2['file_name'] = $new_name."_Certificate";
    $this->load->library('upload',$config2);
    $this->upload->do_upload('certificate');
    $data2 = array('upload_data' => $this->upload->data());
    $data['certificate'] = $data2['upload_data']['file_name'];

    $config3['upload_path']   = './uploads/attachments/';
    $config3['allowed_types'] = 'pdf|jpg|png';
    $config3['file_name'] = $new_name."_Resume";
    $this->load->library('upload',$config3);
    $this->upload->do_upload('resume');
    $data3 = array('upload_data' => $this->upload->data());
    $data['resume'] = $data3['upload_data']['file_name'];
	//End PD files upload

	$data['img'] = $artImage_name;
	$data['date'] = mdate('%d-%m-%Y');
	$data['udate'] = mdate('%d-%m-%Y %H:%i:%s');
	
	//echo $data1['artimgsms'];
	return $data;
}




function createProfile(){
	 $regBtn = $this->input->post('regBtn', true);
	 $data['profileRes'] = $this->profile->get_where_custom('userid', $this->session->userdata('user_id') );
	 
	 if (!$regBtn == "") {
	 	# code...
	 	$pdata = $this->get_profile_data_from_post();
	 	//insert data into database
	 	$this->_insert($pdata);

	 	//update Timetable
	 	$tdata['profileid'] = $this->get('id')->row()->id;
	 	$tdata['monday'] = "0600 - 1800";
	 	$tdata['tuesday'] = "0600 - 1800";
	 	$tdata['wednessday'] = "0600 - 1800";
	 	$tdata['thursday'] = "0600 - 1800";
	 	$tdata['friday'] = "0600 - 1800";
	 	$tdata['saturday'] = "0600 - 1800";
	 	$tdata['sunday'] = "0600 - 1800";
	 	$this->_insert_tb('timetable', $tdata);

	 	# code... prevent resubmission
	 	redirect('Profile/createProfile2');

	 	/*$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Profile";
		$data['mpanel_f'] = "createProfile";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";
		if ($this->session->userdata('logged_in')) {
			$data['color'] = "blue";
			$data['msg'] ="Your Profile has been Registered Successifully.!";
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
		} else {
			redirect('Home');
		}*/

	 } else {
	 	# code...
	 	if ($data['profileRes']->num_rows()>0) {
	 		# code...
	 		redirect('Profile/managemyProfiles');
	 	} else {
	 		# code...
	 		$data['middle_m'] ="Admin";
		 	$data['mpanel_m'] = "Profile";
			$data['mpanel_f'] = "createProfile";
			$data['bfooter_m'] ="Home";
			$data['bfooter_f'] ="profileSlider";
	 	}
		if ($this->session->userdata('logged_in')) {
			$data['color'] = "red";
			$data['msg'] ="";
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
		} else {
			//redirect('Home');
		}
	 }		
	 
}


function createProfile2(){
	 $regBtn = $this->input->post('regBtn', true);
	 $data['profileRes'] = $this->profile->get_where_custom('userid', $this->session->userdata('user_id') );
	 
	 # code...
	 	$data['middle_m'] ="Admin";
	 	$data['mpanel_m'] = "Profile";
		$data['mpanel_f'] = "createProfile";
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";
		if ($this->session->userdata('logged_in')) {
			$data['color'] = "blue";
			$data['msg'] ='<div class="alert alert-info alert-dismissable" style="margin-top: 5px;"> <i class="fa fa-check"></i> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <b>Info.</b> You have successfully created your profile. You can edit your profile anytime to include latest updaes.<br> Thank you! </div>';
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
		} else {
			redirect('Home');
		}
	 
}


function profileList() {
	$type = $this->input->post('type', true);
	$category = $this->input->post('category', true);
	$subcategory = $this->input->post('subcategory', true);

	//remove message from session
	$this->session->unset_userdata('msg');
	//store filter data into session
	$this->session->set_userdata('type', $type);
	$this->session->set_userdata('category', $category);
	$this->session->set_userdata('subcategory', $subcategory);

	//for pagination
	$limit_per_page = 24;
    $start_index = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
    $limit = $limit_per_page;
    //$offset = ($start_index);
    $start_index = ($start_index > 0) ? ($start_index - 1) : $start_index ;
    $offset = ($start_index * $limit_per_page);

	//find selected user
	$selectedID = $this->uri->segment(3);
		if ((!$selectedID == "") && !($selectedID == "type") && !($selectedID == "cat")) {
			# code...
			$this->session->set_userdata('selectedid', $selectedID);
			
			//profile of selected category
			$type = str_ireplace("%20"," ",$this->uri->segment(4));
			$category = str_ireplace("%20"," ",$this->uri->segment(5));
			$subcategory = str_ireplace("%20"," ",$this->uri->segment(6));
			if ($subcategory == "N") {
				$subcategory = "N/A";
			}
			$data['profileres'] = $this->get_where_custom3_limit('type', $type, 'category', $category, 'subcategory', $subcategory, $limit, $offset);
			$data['all_profileres'] = $this->get_where_custom3('type', $type, 'category', $category, 'subcategory', $subcategory);

				$data['msg'] ="";
				$data['middle_m'] ="Profile";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

		} elseif (($selectedID == "type")) {
			//profile of selected category
			$this->session->set_userdata('selectedid', $selectedID);
			$type = str_ireplace("%20"," ",$this->uri->segment(4));
			$data['profileres'] = $this->get_where_custom_limit('type', $type, $limit, $offset);
			$data['all_profileres'] = $this->get_where_custom('type', $type);
				$data['msg'] ="";
				$data['middle_m'] ="Profile";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

		} elseif (($selectedID == "cat")) {
			//profile of selected category
			$this->session->set_userdata('selectedid', $selectedID);
			$cat = str_ireplace("%20"," ",$this->uri->segment(4));
			$data['profileres'] = $this->get_where_custom_limit('category', $cat, $limit, $offset);
			$data['all_profileres'] = $this->get_where_custom('category', $cat);
				$data['msg'] ="";
				$data['middle_m'] ="Profile";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

		} else {
			//profile of selected category
			$data['profileres'] = $this->get_where_custom3_limit('type', $type, 'category', $category, 'subcategory', $subcategory, $limit, $offset);
			$data['all_profileres'] = $this->get_where_custom3('type', $type, 'category', $category, 'subcategory', $subcategory);

				$data['msg'] ="";
				$data['middle_m'] ="Profile";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";
	
		
		}

		//for pagination
		if ($type=="") { $seg4 = $cat; } else {	$seg4 = $type;	}
		/*$limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
        $total_records = $data['all_profileres']->num_rows();
        if ($total_records > 0)  {
        	 // get current page records
            $data["profileres"] = $data['profileres'];
            $config['base_url'] = base_url() . 'Profile/profileList/'.$selectedID.'/'.$seg4;
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            // custom paging configuration
            $config['num_links'] = 5;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination ">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span >';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span>';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = '&raquo;';
            $config['next_tag_open'] = '<span>';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = '<<';
            $config['prev_tag_open'] = '<span>';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<a style="background-color: #10C4EF; border-radius: 50%;"><b>';
            $config['cur_tag_close'] = '</b></a>';
 
            $config['num_tag_open'] = '<span >';
            $config['num_tag_close'] = '</span>';

            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();
            
        }
            

		//'''''''/ end pagination

//display view	
	$this->load->view('Home/index',$data);

}


function profileSearchList() {
	$searchBtn = $this->input->post('searchBtn', true);

	//remove message from session
	$this->session->unset_userdata('msg');
	//store filter data into session
	//for pagination
	$limit_per_page = 24;
    $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $limit = $limit_per_page;
    //$offset = ($start_index);
    $start_index = ($start_index > 0) ? ($start_index - 1) : $start_index ;
    $offset = ($start_index * $limit_per_page);

	
	if (!$searchBtn == "") {
		# code...
		$searchkeyword = $this->input->post('searchkeyword', true);
		$region = $this->input->post('region', true);
		
		$this->session->set_userdata('searchkeyword', $searchkeyword);
		$this->session->set_userdata('region', $region);
		$data['profileres'] = $this->get_like_custom1_limit('profile', 'region', $region, 'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->get_like_custom1('profile', 'region', $region, 'searchprofile', $searchkeyword);

   //echo $searchkeyword ;
		$data['msg'] ="";
		$data['middle_m'] ="Profile";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileSearchList"; } else { $data['middle_f'] ="profile_notfound";}
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";

	} else {
		# code...
		$searchkeyword = $this->session->userdata('searchkeyword');
		$region = $this->session->userdata('region');
		
		$data['profileres'] = $this->get_like_custom1_limit('profile', 'region', $region,  'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->get_like_custom1('profile', 'region', $region,  'searchprofile', $searchkeyword);

		$data['msg'] ="";
		$data['middle_m'] ="Profile";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileSearchList"; } else { $data['middle_f'] ="profile_notfound";}
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";
	}
	
	
	//for pagination
		//if ($type=="") { $seg4 = $cat; } else {	$seg4 = $type;	}
		/*$limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
        $total_records = $data['all_profileres']->num_rows();
        if ($total_records > 0)  {
        	 // get current page records
            $data["profileres"] = $data['profileres'];
            //$config['base_url'] = base_url() . 'Profile/profileList/'.$selectedID.'/'.$seg4;
            $config['base_url'] = base_url() . 'Profile/profileSearchList/';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            // custom paging configuration
            $config['num_links'] = 5;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination ">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span >';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span>';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = '&raquo;';
            $config['next_tag_open'] = '<span>';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = '<<';
            $config['prev_tag_open'] = '<span>';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<a style="background-color: #10C4EF; border-radius: 50%;"><b>';
            $config['cur_tag_close'] = '</b></a>';
 
            $config['num_tag_open'] = '<span >';
            $config['num_tag_close'] = '</span>';

            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();  
        }
		//'''''''/ end pagination

	//display view	
	$this->load->view('Home/index',$data);

}



function profileSearchListByRegion() {
	$searchIn = str_ireplace("%20"," ",$this->uri->segment(3));

	//remove message from session
	$this->session->unset_userdata('msg');
	//store filter data into session
	//for pagination
	$limit_per_page = 24;
    $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $limit = $limit_per_page;
    //$offset = ($start_index);
    $start_index = ($start_index > 0) ? ($start_index - 1) : $start_index ;
    $offset = ($start_index * $limit_per_page);

	
	if (!($this->uri->segment(3)) == "") {
		# code...
		$searchkeyword = str_ireplace("%20"," ",$this->uri->segment(3));
		$this->session->set_userdata('searchkeyword', $searchkeyword);
		$data['profileres'] = $this->get_like_custom_limit('profile', 'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->get_like_custom('profile', 'searchprofile', $searchkeyword);

   //echo $searchkeyword ;
		$data['msg'] ="";
		$data['middle_m'] ="Profile";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileSearchList"; } else { $data['middle_f'] ="profile_notfound";}
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";

	} else {
		# code...
		$searchkeyword = $this->session->userdata('searchkeyword');
		
		$data['profileres'] = $this->get_like_custom_limit('profile', 'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->get_like_custom('profile', 'searchprofile', $searchkeyword);

		$data['msg'] ="";
		$data['middle_m'] ="Profile";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileSearchList"; } else { $data['middle_f'] ="profile_notfound";}
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";
	}
	
	
	//for pagination
		//if ($type=="") { $seg4 = $cat; } else {	$seg4 = $type;	}
		/*$limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
        $total_records = $data['all_profileres']->num_rows();
        if ($total_records > 0)  {
        	 // get current page records
            $data["profileres"] = $data['profileres'];
            //$config['base_url'] = base_url() . 'Profile/profileList/'.$selectedID.'/'.$seg4;
            $config['base_url'] = base_url() . 'Profile/profileSearchListByRegion/'.$searchkeyword.'/';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            // custom paging configuration
            $config['num_links'] = 5;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination ">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span >';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span>';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = '&raquo;';
            $config['next_tag_open'] = '<span>';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = '<<';
            $config['prev_tag_open'] = '<span>';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<a style="background-color: #10C4EF; border-radius: 50%;"><b>';
            $config['cur_tag_close'] = '</b></a>';
 
            $config['num_tag_open'] = '<span >';
            $config['num_tag_close'] = '</span>';

            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();  
        }
		//'''''''/ end pagination

	//display view	
	$this->load->view('Home/index',$data);

}


function profileSearchListByCategory() {
	$searchIn = str_ireplace("%20"," ",$this->uri->segment(3));

	//remove message from session
	$this->session->unset_userdata('msg');
	//store filter data into session
	//for pagination
	$limit_per_page = 24;
    $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $limit = $limit_per_page;
    //$offset = ($start_index);
    $start_index = ($start_index > 0) ? ($start_index - 1) : $start_index ;
    $offset = ($start_index * $limit_per_page);

	
	if (!($this->uri->segment(3)) == "") {
		# code...
		$searchkeyword = str_ireplace("%20"," ",$this->uri->segment(3));
		$this->session->set_userdata('searchkeyword', $searchkeyword);
		$data['profileres'] = $this->get_like_custom_limit('profile', 'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->get_like_custom('profile', 'searchprofile', $searchkeyword);

   //echo $searchkeyword ;
		$data['msg'] ="";
		$data['middle_m'] ="Profile";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileSearchList"; } else { $data['middle_f'] ="profile_notfound";}
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";

	} else {
		# code...
		$searchkeyword = $this->session->userdata('searchkeyword');
		
		$data['profileres'] = $this->get_like_custom_limit('profile', 'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->get_like_custom('profile', 'searchprofile', $searchkeyword);

		$data['msg'] ="";
		$data['middle_m'] ="Profile";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileSearchList"; } else { $data['middle_f'] ="profile_notfound";}
		$data['bfooter_m'] ="Home";
		$data['bfooter_f'] ="profileSlider";
	}
	
	
	//for pagination
		//if ($type=="") { $seg4 = $cat; } else {	$seg4 = $type;	}
		/*$limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
        $total_records = $data['all_profileres']->num_rows();
        if ($total_records > 0)  {
        	 // get current page records
            $data["profileres"] = $data['profileres'];
            //$config['base_url'] = base_url() . 'Profile/profileList/'.$selectedID.'/'.$seg4;
            $config['base_url'] = base_url() . 'Profile/profileSearchListByRegion/'.$searchkeyword.'/';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
            // custom paging configuration
            $config['num_links'] = 5;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination ">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<span >';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<span>';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = '&raquo;';
            $config['next_tag_open'] = '<span>';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = '<<';
            $config['prev_tag_open'] = '<span>';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<a style="background-color: #10C4EF; border-radius: 50%;"><b>';
            $config['cur_tag_close'] = '</b></a>';
 
            $config['num_tag_open'] = '<span >';
            $config['num_tag_close'] = '</span>';

            $this->pagination->initialize($config);
                 
            // build paging links
            $data["links"] = $this->pagination->create_links();  
        }
		//'''''''/ end pagination

	//display view	
	$this->load->view('Home/index',$data);

}


function viewSelectedProfile() {

	$viewBtn = $this->input->post('viewBtn', true);

	if (!$viewBtn == "") {
		# code...
		$id = $viewBtn;
		$selectedID = $id;
		$this->session->set_userdata('selectedid', $selectedID);
		$data['profileres'] = $this->get_where_custom('id',$selectedID );
		$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$selectedID, 'status', "Open" );
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
			$data['userid'] = $data['profileres']->row()->userid;
			$data['date'] = $data['profileres']->row()->date;
			$data['udate'] = $data['profileres']->row()->udate;

				$data['msg'] ="";
				$data['middle_m'] ="Profile";
				$data['middle_f'] ="profile";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

	} else {
		# code...
		$id = $this->uri->segment(3);
		$selectedID = $id;
		$this->session->set_userdata('selectedid', $selectedID);
		$data['profileres'] = $this->get_where_custom('id',$selectedID );
		$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$selectedID, 'status', "Open" );
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
			$data['userid'] = $data['profileres']->row()->userid;
			$data['date'] = $data['profileres']->row()->date;
			$data['udate'] = $data['profileres']->row()->udate;

				$data['msg'] ="";
				$data['middle_m'] ="Profile";
				$data['middle_f'] ="profile";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";
	}
	
//display view	
	$this->load->view('Home/index',$data);
}




function viewProfiles() {
	$type = $this->input->post('type', true);
	$category = $this->input->post('category', true);
	$subcategory = $this->input->post('subcategory', true);

	//remove message from session
	$this->session->unset_userdata('msg');

	//store filter data into session
	$this->session->set_userdata('type', $type);
	$this->session->set_userdata('category', $category);
	$this->session->set_userdata('subcategory', $subcategory);



		//find selected user
		$selectedID = $this->uri->segment(3);
		if ((!$selectedID == "") && !($selectedID == "type") && !($selectedID == "cat")) {
			# code...
			//echo 'here-----------';
			$this->session->set_userdata('selectedid', $selectedID);
			$data['profileres'] = $this->get_where_custom('id',$selectedID );
			$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$selectedID, 'status', "Open" );

			//profile of selected category
			$type = str_ireplace("%20"," ",$this->uri->segment(4));
			$category = str_ireplace("%20"," ",$this->uri->segment(5));
			$subcategory = str_ireplace("%20"," ",$this->uri->segment(6));
			if ($subcategory == "N") {
				$subcategory = "N/A";
			}
			$data['sideprofileres'] = $this->get_where_custom3('type', $type, 'category', $category, 'subcategory', $subcategory);

			
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
			$data['userid'] = $data['profileres']->row()->userid;
			$data['date'] = $data['profileres']->row()->date;
			$data['udate'] = $data['profileres']->row()->udate;

				$data['msg'] ="";
				$data['middle_m'] ="Profile";
				$data['middle_f'] ="profile";
				$data['bfooter_m'] ="Home";
				$data['bfooter_f'] ="profileSlider";

		} elseif (($selectedID == "type")) {
			# code...special for footer
			//profile of selected category
			$type = str_ireplace("%20"," ",$this->uri->segment(4));
			$data['sideprofileres'] = $this->get_where_custom('type', $type);
			if ($data['sideprofileres']->num_rows() > 0) {

				$this->session->set_userdata('selectedid', $data['sideprofileres']->row()->id);
				$data['profileres'] = $this->get_where_custom('id',$data['sideprofileres']->row()->id );
				$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$data['sideprofileres']->row()->id, 'status', "Open" );

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
				$data['userid'] = $data['profileres']->row()->userid;
				$data['date'] = $data['profileres']->row()->date;
				$data['udate'] = $data['profileres']->row()->udate;

					$data['msg'] ="";
					$data['middle_m'] ="Profile";
					$data['middle_f'] ="profile";
					$data['bfooter_m'] ="Home";
					$data['bfooter_f'] ="profileSlider";

			} else {
				# code... No profile found
					$data['msg'] ="";
					$data['middle_m'] ="Profile";
					$data['middle_f'] ="profile_notfound";
					$data['bfooter_m'] ="Home";
					$data['bfooter_f'] ="profileSlider";
			}
			# code... end  display selected profiles

		} elseif (($selectedID == "cat")) {
			# code...special for footer
			//profile of selected category
			$cat = str_ireplace("%20"," ",$this->uri->segment(4));
			$data['sideprofileres'] = $this->get_where_custom('category', $cat);
			if ($data['sideprofileres']->num_rows() > 0) {

				$this->session->set_userdata('selectedid', $data['sideprofileres']->row()->id);
				$data['profileres'] = $this->get_where_custom('id',$data['sideprofileres']->row()->id );
				$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$data['sideprofileres']->row()->id, 'status', "Open" );

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
				$data['userid'] = $data['profileres']->row()->userid;
				$data['date'] = $data['profileres']->row()->date;
				$data['udate'] = $data['profileres']->row()->udate;

					$data['msg'] ="";
					$data['middle_m'] ="Profile";
					$data['middle_f'] ="profile";
					$data['bfooter_m'] ="Home";
					$data['bfooter_f'] ="profileSlider";

			} else {
				# code... No profile found
					$data['msg'] ="";
					$data['middle_m'] ="Profile";
					$data['middle_f'] ="profile_notfound";
					$data['bfooter_m'] ="Home";
					$data['bfooter_f'] ="profileSlider";
			}
			# code...end  display selected profiles


		} else {

			//profile of selected category
			$data['sideprofileres'] = $this->get_where_custom3('type', $type, 'category', $category, 'subcategory', $subcategory);

			if ($data['sideprofileres']->num_rows() > 0) {

				$this->session->set_userdata('selectedid', $data['sideprofileres']->row()->id);
				$data['profileres'] = $this->get_where_custom('id',$data['sideprofileres']->row()->id );
				$data['appointmentres'] = $this->appointment->get_where_custom2('profileid',$data['sideprofileres']->row()->id, 'status', "Open" );

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
				$data['userid'] = $data['profileres']->row()->userid;
				$data['date'] = $data['profileres']->row()->date;
				$data['udate'] = $data['profileres']->row()->udate;

					$data['msg'] ="";
					$data['middle_m'] ="Profile";
					$data['middle_f'] ="profile";
					$data['bfooter_m'] ="Home";
					$data['bfooter_f'] ="profileSlider";

			} else {
				# code... No profile found
					$data['msg'] ="";
					$data['middle_m'] ="Profile";
					$data['middle_f'] ="profile_notfound";
					$data['bfooter_m'] ="Home";
					$data['bfooter_f'] ="profileSlider";
			}
			# code... display selected profiles
	
		
		}


	//display view	
	$this->load->view('Home/index',$data);


}

function userProfile() {
	$userid = $this->uri->segment(3);
	$this->session->set_userdata('profile_user_id',$userid);
	$data['profile_user_id'] = $userid;
	$data['profileRes'] = $this->get_where_custom('userid', $this->uri->segment(3));
	$data['postedJobs'] = $this->job->get_where_custom('postedby', $userid)->num_rows();
	$data['inprogressJobs'] = $this->job->get_where_custom2('postedby', $userid, 'progress', "In-progress")->num_rows();
	$data['doneJobs'] = $this->job->get_where_custom2('doneby', $userid, 'progress', "Completed")->num_rows();
	$data['middle_m'] ="Profile";
	$data['mpanel_m'] = "Profile";
	$data['mpanel_f'] = "myProfile";
	$data['middle_f'] = "myProfile";
	$data['bfooter_m'] ="Home";
	$data['bfooter_f'] ="blank";
	$data['color'] = "red";
	$data['msg'] ="";

	if ($this->uri->segment(4)=="all") {
		# code...
		$data['myjobres'] = $this->job->get_where_custom('status', "Open");
	} else if ($this->uri->segment(4)=="posted") {
		# code...
		$data['myjobres'] = $this->job->get_where_custom_limit('postedby', $userid ,100, 1);
	} else if ($this->uri->segment(4)=="like") {
		# code...
		$data['myjobres'] = $this->job->get_where_custom_limit('doneby', $userid ,100, 1);
		//update action table
		$this->updateAction($userid, $this->session->userdata('user_id'), 2, 1, "");
	} else {
		$data['myjobres'] = $this->job->get_where_custom_limit('postedby', $userid ,100, 1);
	}
	//update action table
	$doneby = $this->session->userdata('user_id');
	if ($doneby=="") { $doneby = 0; } 
	$this->updateAction($userid, $doneby, 1, 1, "");
	
	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
		//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}

function updateAction($userid, $doneby, $action, $value, $remark) {
	$data['userid'] = $userid;
	$data['doneby'] = $doneby;
	$data['action'] = $action;
	$data['value'] = $value;
	$data['remark'] = $remark;
	$data['date'] = mdate('%d-%m-%Y');
	$data['udate'] = mdate('%d-%m-%Y %H:%i:%s');
	$this->Mdl_profile->_delete_custome3_tb('action', 'userid', $userid, 'doneby', $doneby, 'action', $action);
	$this->_insert_tb('action', $data);
}

function feedback() {
	$profileid = $this->input->post('profileid',true);
	$fdata['userid'] = $this->input->post('commentBtn',true);
	$fdata['senderid'] = $this->session->userdata('user_id');
	if($fdata['senderid']=="") { $fdata['senderid']=0; }
	$fdata['toid'] = $this->input->post('commentBtn',true);
	$fdata['comment'] = $this->input->post('comment',true);
	$fdata['type'] = "Comment";
	$fdata['status'] = "Active";
	$data['date'] = mdate('%d-%m-%Y');
	$data['udate'] = mdate('%d-%m-%Y %H:%i:%s');
	$this->_insert_tb('comment', $fdata);

	//redirect to profile
	redirect('Profile/userProfile/'.$fdata['userid']);

	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
		//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
		$this->load->view('Home/index',$data);
	}
}

function managemyProfiles() {
	$userid = $this->session->userdata('user_id');
	$deleteBtn = $this->input->post('deleteBtn', true);
	$editBtn = $this->input->post('editBtn', true);
	$modifyBtn = $this->input->post('modifyBtn', true);
	$data['profileRes'] = $this->get_where_custom('userid', $userid);
	$data['myjobres'] = $this->job->get_where_custom_limit('postedby', $userid ,100, 1);
	$data['postedJobs'] = $this->job->get_where_custom('postedby', $userid)->num_rows();
	$data['inprogressJobs'] = $this->job->get_where_custom2('postedby', $userid, 'progress', "In-progress")->num_rows();
	$data['doneJobs'] = $this->job->get_where_custom2('doneby', $userid, 'progress', "Completed")->num_rows();

	if (!$deleteBtn == "") {
		# code...
		$id = $deleteBtn;
		$this->_delete($id);

		$data['profileRes'] = $this->get_where_custom('userid', $this->session->userdata('user_id'));

		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Profile";
		$data['mpanel_f'] = "myProfile";
		$data['color'] = "red";
		$data['msg'] ="";

	} else if (!$editBtn == '') {
		# code...
		$id = $editBtn;
		$data['editRes'] = $this->get_where_custom('id', $id);

		$data['middle_m'] = "Admin";
		$data['middle_f'] = "m_container";
	 	$data['mpanel_m'] = "Profile";
	 	$data['mpanel_f'] = "complete_registration_edit";
		//$data['mpanel_f'] = "editProfile";
		$data['color'] = "red";
		$data['msg'] ="";

	} elseif (!$modifyBtn == "") {
		# code...
		$id = $modifyBtn;
		//collect data from form
		$edata = $this->get_profile_edit_data_from_post();
		$this->_update($id, $edata);

		$data['profileRes'] = $this->get_where_custom('userid', $this->session->userdata('user_id'));

		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Profile";
		$data['mpanel_f'] = "myProfile";
		$data['color'] = "blue";
		$data['msg'] ="The Profile Has Been Modified Successifully. !";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Profile";
		$data['mpanel_f'] = "myProfile";
		$data['color'] = "red";
		$data['msg'] ="";
	}

	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else  {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexf',$data); }
		//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
		//redirect('Home');
	}
	
}


function manageProfiles() {
	$deleteBtn = $this->input->post('deleteBtn', true);
	$data['profileRes'] = $this->get('id');


	if (!$deleteBtn == "") {
		# code...
		$id = $deleteBtn;
		$this->_delete($id);

		$data['profileRes'] = $this->get('id');

		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Profile";
		$data['mpanel_f'] = "manageProfiles";
		$data['color'] = "red";
		$data['msg'] ="";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Profile";
		$data['mpanel_f'] = "manageProfiles";
		$data['color'] = "red";
		$data['msg'] ="";
	}

	if ($this->session->userdata('logged_in')) {
		if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
		//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else {  $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
		//redirect('Home');
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








/*==================  end huduma ================*/







//default codes xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

function get($order_by) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get($order_by);
return $query;
}

function get_dist($col) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_dist($col);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom($col, $value);
return $query;
}

function get_col_where($tb, $col) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_col_where($tb, $col);
return $query;
}

function get_col_where2($tb, $col, $col1, $val1) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_col_where2($tb, $col, $col1, $val1);
return $query;
}

function get_where_custom_tb($tb, $col, $value) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom_tb($tb, $col, $value);
return $query;
}

function get_where_custom2($col1, $value1, $col2, $value2) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom2($col1, $value1, $col2, $value2);
return $query;
}

function get_where_custom3($col1, $value1, $col2, $value2, $col3, $value3) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom3($col1, $value1, $col2, $value2, $col3, $value3);
return $query;
}

/*=============  pagination =============*/
function get_where_custom0_limit($limit, $offset) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom0_limit($limit, $offset);
return $query;
}

function get_where_custom_limit($col, $value, $limit, $offset) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom_limit($col, $value, $limit, $offset);
return $query;
}

function get_where_custom2_limit($col1, $value1, $col2, $value2, $limit, $offset) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom2_limit($col1, $value1, $col2, $value2, $limit, $offset);
return $query;
}

function get_where_custom3_limit($col1, $value1, $col2, $value2, $col3, $value3, $limit, $offset) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_where_custom3_limit($col1, $value1, $col2, $value2, $col3, $value3, $limit, $offset);
return $query;
}
/*================ end pagination ============*/

function _insert($data) {
$this->load->model('Mdl_profile');
$this->Mdl_profile->_insert($data);
}

function _insert_tb($tb, $data) {
$this->load->model('Mdl_profile');
$this->Mdl_profile->_insert_tb($tb, $data);
}

function _update($id, $data) {
$this->load->model('Mdl_profile');
$this->Mdl_profile->_update($id, $data);
}

function _update_custome($col, $value, $data) {
$this->load->model('Mdl_profile');
$this->Mdl_profile->_update_custome($col, $value, $data);
}

function _delete($id) {
$this->load->model('Mdl_profile');
$this->Mdl_profile->_delete($id);
}

function _delete_custome($col, $value) {
$this->load->model('Mdl_profile');
$this->Mdl_profile->_delete_custome($col, $value);
}

function count_where($column, $value) {
$this->load->model('Mdl_profile');
$count = $this->Mdl_profile->count_where($column, $value);
return $count;
}

function count_all() {
$this->load->model('Mdl_profile');
$count = $this->Mdl_profile->count_all();
return $count;
}



function get_max() {
$this->load->model('Mdl_profile');
$max_id = $this->Mdl_profile->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->_custom_query($mysql_query);
return $query;
}

/*=============== LIKE (SEARCH) =========================*/
function get_like_custom($tb, $col1, $value1) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_like_custom($tb, $col1, $value1);
return $query;
}

function get_like_custom1($tb, $col1, $value1, $col2, $value2) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_like_custom1($tb, $col1, $value1, $col2, $value2);
return $query;
}

function get_like_custom_limit($tb, $col1, $value1,  $limit, $offset) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_like_custom_limit($tb, $col1, $value1, $limit, $offset);
return $query;
}

function get_like_custom1_limit($tb, $col1, $value1, $col2, $value2, $limit, $offset) {
$this->load->model('Mdl_profile');
$query = $this->Mdl_profile->get_like_custom1_limit($tb, $col1, $value1, $col2, $value2, $limit, $offset);
return $query;
}
/*================ END LIKE =============================*/


}