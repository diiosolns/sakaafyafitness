<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

class Api extends REST_Controller {

function __construct() {
		parent::__construct();
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper('download');
		$this->load->helper('text');//calling string helper 
		$this->load->helper('url');
		$this->load->model('Mdl_api');
		//My Modules
		$this->load->module('Profile');
		$this->load->module('Appointment');
		$this->load->module('Artical');
		$this->load->module('Admin');
		$this->load->module('Chat');
		$this->load->module('Home');
		$this->load->module('Users');
}


public function index_get(){
	# code...
	$this->response($this->db->get('users')->result());
	//echo "WARNING ! eHuduma api: Access Danied";	
}

/*====================== EHUDUMA DATA ================*/

//http://localhost/huduma/Api/lmtusers
//http://localhost/huduma/Api/lmtprofile
//http://localhost/huduma/Api/lmtappointment
//http://localhost/huduma/Api/lmtartical
//http://localhost/huduma/Api/lmtchat
//http://localhost/huduma/Api/lmtcomment
//http://localhost/huduma/Api/lmtnews
//http://localhost/huduma/Api/lmttimetable
//http://localhost/huduma/Api/oneprofile2?userid=1
//http://localhost/huduma/assets/img/profile/0/def.png

function user_get(){
    $table= 'users';
    $id = $this->get('id');
        $users = $this->Mdl_api->get_where_tb($table, $id)->result();
        if($users){
            $this->response($users, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
    }

function cpwrd_get() {
    $table = 'users';
    $userid = $this->get('id');
    $username = $this->get('username');
    $pwrd = $this->get('password');
    $date = mdate('%Y-%m-%d');
   
    $data = array('password'=>$pwrd); 
    $res = $this->Mdl_mysms->_update2($table, 'username', $username, $data);
    if($data){
        $this->response($data, 200);
    }else{
        $this->response(NULL, 404);
    }
         
}

function login_get() {
    $table = 'users';
    /*$userid = $this->get('id');*/
    $username = $this->get('username');
    $pwrd = $this->get('password');
    $chckres = $this->Mdl_api->get_where_custom_tb($table, 'username', $username);
    if ($chckres->num_rows() > 0) {
        # code...
        if ($pwrd == $chckres->row()->password) {
            # code...
            //$feedback = $chckres->row()->id;
            $feedback = $chckres->result();
        } else {$feedback = "Failed";}
        
    } else {
        $feedback = "Failed";
    }
   
    if($feedback){
        $this->response($feedback, 200);
    }else{
        $this->response(NULL, 404);
    }
         
}

function userreg_get() {
    $table = 'users';
    /*$userid = $this->get('id');*/
    //$country = $this->get('country');
    $name = str_ireplace("%20"," ",$this->get('name'));
    $username = $this->get('username');
    $email = $this->get('email');
    $phone = $this->get('phone');
    $pwrd = $this->get('pwrd');
    $type = $this->get('type');
    $img = $this->get('img');
    $online = $this->get('online');
    $date = mdate('%Y-%m-%d');
    $udate = mdate('%Y-%m-%d %H:%i:%s');
    $data = array('name'=>$name,'username'=>$username, 'type'=>$type, 'email'=>$email,  'phone'=>$phone,   'password'=>$pwrd,  'online'=>$online, 'date'=>$date, 'udate'=>$udate); 
    $chckres = $this->Mdl_api->get_where_custom_tb($table, 'username', $username);
    if ($chckres->num_rows() > 0) {
        # code...
        $feedback = "Exist";
    } else {
        $res = $this->Mdl_api->_insert_tb($table, $data);
        $userres = $this->Mdl_api->get_where_custom_tb($table, 'username', $username);
        /*$feedback = "Done";*/
        $feedback = $userres->result();
    }
   
    if($feedback){
        $this->response($feedback, 200);
    }else{
        $this->response(NULL, 404);
    }
         
}

function profilereg_get() {
    $table = 'profile';
    //$id  = $this->get('id');  
	$profilename  =  str_ireplace("%20"," ",$this->get('profilename'));
	$type  = $this->get('type');  
	$category  = str_ireplace("%20"," ",$this->get('category')); 
	$subcategory = str_ireplace("%20"," ",$this->get('subcategory'));
	$description = str_ireplace("%20"," ",$this->get('description'));
	$country = $this->get('country'); 
	$region  = str_ireplace("%20"," ",$this->get('region')); 
	$phyaddress = str_ireplace("%20"," ",$this->get('phyaddress')); 
	$phone  = $this->get ('phone');  
	$altphone  = $this->get('altphone');  
	$email = $this->get('email') ; 
	$img  = $this->get('img') ; 
	$availabletime  = $this->get('availabletime');  
	$vistcount = $this->get('vistcount');  
	$userid  = $this->get('userid') ; 
	/*$date  = $this->get('date') ;
	$udate  = $this->get ('udate') ; */
	$searchprofile  = str_ireplace("%20"," ",$this->get('searchprofile'));
    $date = mdate('%Y-%m-%d');
    $udate =  mdate('%Y-%m-%d %H:%i:%s');
    $data = array('profilename' =>$profilename ,	'type' =>$type ,'category' =>$category ,	'subcategory' =>$subcategory,'description' =>$description,	'country' =>$country,'region' =>$region , 'phyaddress' =>$phyaddress,'phone' =>$phone ,	'altphone' =>$altphone ,'email'=>$email,  'img' => $img ,'availabletime'=> $availabletime  ,	'vistcount' =>$vistcount, 'userid'=>$userid,  'date' =>$date ,'udate' => $udate,'searchprofile'  =>$searchprofile ); 
    $chckres = $this->Mdl_api->get_where_custom_tb('users', 'id', $userid);
    if ($chckres->num_rows() < 1) {
        # code...
        $feedback = "Not User";
    } else {
        $res = $this->Mdl_api->_insert_tb($table, $data);
        $pres = $this->Mdl_api->get_where_custom_tb($table, 'userid', $userid);
        $feedback = "Done";
        /*$feedback = $pres->result();*/
    }
   
    if($feedback){
        $this->response($feedback, 200);
    }else{
        $this->response(NULL, 404);
    }
         
}

/*====get limit ======*/
function lmtusers_get(){
    $table= 'users';
    $limit = 20;
    $offset = 0;
    $order_by = 'id';
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

function lmtprofile_get(){
    $table= 'profile';
    $limit = 20;
    $offset1 = $this->get('offset');;
    $order_by = 'id';
    $pcount = $this->Mdl_api->count_all_tb($table);
    $deff = $pcount - ($limit*$offset1);
    $offset = ($deff > 0) ? $deff : 0 ;
    //$offset = $pcount -  ($limit*$offset1)
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            $this->response(0, 404);
        }
 }

 function lmtappointment_get(){
    $table= 'appointment';
    $limit = 20;
    $offset = 0;
    $order_by = 'id';
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            $this->response(0, 404);
        }
 }

 function lmtartical_get(){
    $table= 'artical';
    $limit = 20;
    $offset = 0;
    $order_by = 'id';
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            $this->response(0, 404);
        }
 }

  function lmtchat_get(){
    $table= 'chat';
    $limit = 20;
    $offset = 0;
    $order_by = 'id';
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            $this->response(0, 404);
        }
 }

  function lmtcomment_get(){
    $table= 'comment';
    $limit = 20;
    $offset = 0;
    $order_by = 'id';
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            $this->response(0, 404);
        }
 }

  function lmtnews_get(){
    $table= 'news';
    $limit = 20;
    $offset = 0;
    $order_by = 'id';
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            $this->response(0, 404);
        }
 }

  function lmttimetable_get(){
    $table= 'timetable';
    $limit = 20;
    $offset = 0;
    $order_by = 'id';
    	$res = $this->Mdl_api->get_with_limit_tb( $table, $limit, $offset, $order_by)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            $this->response(0, 404);
        }
 }
/* ======end get limit=====*/

/*==========single user =======*/
function oneuser_get(){
    $table= 'users';
    $col = "id";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val);
        $feedback = ($res->num_rows() > 0) ? $res->result() : "empty" ;
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($feedback){
            $this->response($feedback, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

function oneprofile1_get(){
    $table= 'profile';
    $col = "userid";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

 function oneprofile2_get(){
    $table= 'profile';
    $col = "id";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

 function oneappointment1_get(){
    $table= 'appointment';
    $col = "userid";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

 function oneappointment2_get(){
    $table= 'appointment';
    $col = "id";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

 function oneartical_get(){
    $table= 'artical';
    $col = "id";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

  function onechat1_get(){
    $table= 'chat';
    $col = "userid";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

   function onechat2_get(){
    $table= 'chat';
    $col = "id";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

  function onecomment1_get(){
    $table= 'comment';
    $col = "userid";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

  function onecomment2_get(){
    $table= 'comment';
    $col = "userid";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

  function onenews_get(){
    $table= 'news';
    $col = "id";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

  function onetimetable1_get(){
    $table= 'timetable';
    $col = "profileid";
    $val = $this->get('profileid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

 function onetimetable2_get(){
    $table= 'timetable';
    $col = "id";
    $val = $this->get('userid');
    	$res = $this->Mdl_api->get_where_custom1($table, $col, $val)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }
/*==========end single user====*/

/*=========Profiles========*/
function pcol_get(){
    $table= 'profile';
    $col = $this->get('col');
    	$res = $this->Mdl_api->get_col_where($table, $col)->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

//http://localhost/huduma/Api/filterprofile?region=Mwanza&cat=Butcher
 //http://localhost/huduma/Api/filterprofile2?cat=Translator
function filterprofile1_get(){
    $table= 'profile';
    $limit = $this->get('limit');
    $offset = $this->get('offset');
    $order_by = 'id';
    $col1 = "category";
    $val1 = str_ireplace("%20"," ",$this->get('cat'));
    $col2 = "region";
    $val2 = str_ireplace("%20"," ",$this->get('region'));
         if ($val2 == "all") {
                $res = $this->Mdl_api->get_like_custom_limit($table, $col1, $val1,  $limit, $offset);
            } else {
               $res = $this->Mdl_api->get_like_custom1_limit($table, $col1, $val1, $col2, $val2, $limit, $offset);
            }
    	//$res = $this->Mdl_api->get_like_custom1_limit($table, $col1, $val1, $col2, $val2, $limit, $offset);
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        $feedback = ($res->num_rows() > 0) ? $res->result() : "empty" ;
        if($res){
            $this->response($feedback, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

 function filterprofile2_get(){
    $table= 'profile';
    $limit = $this->get('limit');
    $offset = $this->get('offset');
    $order_by = 'id';
    $col1 = "category";
    $val1 = str_ireplace("%20"," ",$this->get('cat'));

    	$res = $this->Mdl_api->get_like_custom_limit($table, $col1, $val1, $limit, $offset)->result();
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($res){
            $this->response($res, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }

 function userprofiles_get(){
    $table= 'profile';
    $col = "userid";
    $val = $this->get('userid');
        $res = $this->Mdl_api->get_where_custom1($table, $col, $val);
        $feedback = ($res->num_rows() > 0) ? $res->result() : "empty" ;
        //$res = $this->Mdl_api->get_where_tb($table, 'id')->result();
        if($feedback){
            $this->response($feedback, 200);
        }else{
            //$this->response(NULL, 404);
            $this->response(0, 404);
        }
 }


/*=========end profiles====*/

/*====================== END DATA ================*/





function dashboard() {

}

function getHomePage_get() {
	$data['loginErr'] ="";
	$this->session->set_userdata('liked', "empty");
	//$data['bfooter_f'] ="profileSlider";
	$data['middle_m'] ="Api";
	$data['middle_f'] ="homeSearch";
	$this->load->view('Api/index',$data);
}

function getHelpPage_get() {
	$data['loginErr'] ="";
	$data['middle_m'] ="Api";
	$data['middle_f'] ="faq";
	$this->load->view('Api/index',$data);
}

function getAboutPage_get() {
	$data['loginErr'] ="";
	$data['middle_m'] ="Api";
	$data['middle_f'] ="aboutUs";
	$this->load->view('Api/index',$data);
}

function getContactPage_get() {
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
			$this->home->emailSender($recepient, $subject, $message);

			//success meassage
			$data['msg'] = "Thank You For Giving Your Feedback.!";
			$data['color'] = "blue";
		}

		$data['middle_m'] ="Api";
		$data['middle_f'] ="contactUs";
		$this->load->view('Api/index',$data);
}

function getDealsPage_get() {
	$data['news_newRes'] = $this->artical->get_where_custom_tb('news', 'status', 'NEW');
	$data['news_oldRes'] = $this->artical->get_where_custom_tb('news', 'status', 'OLD');
	# code...
	$data['middle_m'] = "Api";
	$data['middle_f'] = "news";
	$this->load->view('Api/index',$data);
}

function postDeal_get() {
	$postBtn = $this->input->post('postBtn', true);

	if (!$postBtn == "") {
		# code...
		$adata['heading'] = $this->input->post('heading', true);
		$adata['body'] = $this->input->post('body', true);
		$adata['registeredby'] = $this->input->post('name', true);
		$adata['phone'] = $this->input->post('phone', true);
		$adata['email'] = $this->input->post('email', true);
		$adata['date'] = mdate('%Y-%m-%d %H:%i:%s');
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['status'] = "NEW";
		$this->Mdl_api->_insert_tb('news', $adata);

		//go to view  page
		redirect('Api/getDealsPage');

	} else {
		# code...
		redirect('Api/getDealsPage');
	}
	

}

function getArticalPage_get() {
	//select articals from db
	$data['artical_newRes'] = $this->artical->get_where_custom_tb('artical', 'status', 'NEW');
	$data['artical_oldRes'] = $this->artical->get_where_custom_tb('artical', 'status', 'OLD');
	$data['articalres'] = $this->artical->get_tb('artical', 'id');
	//update likes
	$id =  $this->uri->segment(3);
	$thisarticalres = $this->artical->get_where_custom_tb('artical', 'id', $id);
	if ((!($id == "")) && (!($this->session->userdata('liked') == $id))) {
		# code...
		$this->session->set_userdata('liked', $id); //store in session
		$adata['likecount'] = $thisarticalres->row()->likecount +1;
		$this->Mdl_api->_update_tb('artical', $id, $adata);
	}

	//reselect  articals from db after update
	$data['artical_newRes'] = $this->artical->get_where_custom_tb('artical', 'status', 'NEW');
	$data['artical_oldRes'] = $this->artical->get_where_custom_tb('artical', 'status', 'OLD');
	$data['articalres'] = $this->artical->get_tb('artical', 'id');

	# code...
	$data['middle_m'] = "Api";
	$data['middle_f'] = "articalPage";
	$this->load->view('Api/index',$data);
}


function getProfileList_get() {
	//$cat = "PROFESSIONAL";
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
    /*$start_index = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;*/
    $start_index = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    $limit = $limit_per_page;
    //$offset = ($start_index);
    $start_index = ($start_index > 0) ? ($start_index - 1) : $start_index ;
    $offset = ($start_index * $limit_per_page);
	//echo $start_index;echo "<br>";
	//find selected user
	$selectedID = $this->uri->segment(3);
	//$selectedID = "type";
		if ((!$selectedID == "") && !($selectedID == "type") && !($selectedID == "cat") && !($selectedID == "all")) {
			# code...
			$this->session->set_userdata('selectedid', $selectedID);
			
			//profile of selected category
			$type = str_ireplace("%20"," ",$this->uri->segment(4));
			$category = str_ireplace("%20"," ",$this->uri->segment(5));
			$subcategory = str_ireplace("%20"," ",$this->uri->segment(6));
			if ($subcategory == "N") {
				$subcategory = "N/A";
			}
			$data['profileres'] = $this->profile->get_where_custom3_limit('type', $type, 'category', $category, 'subcategory', $subcategory, $limit, $offset);
			$data['all_profileres'] = $this->profile->get_where_custom3('type', $type, 'category', $category, 'subcategory', $subcategory);

				$data['msg'] ="";
				$data['middle_m'] ="Api";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}

		} elseif (($selectedID == "type")) {
			//profile of selected category
			//$cat = "";
			//$type = "PROFESSIONAL";
			$this->session->set_userdata('selectedid', $selectedID);
			//$type = str_ireplace("%20"," ",$this->uri->segment(4));
			$data['profileres'] = $this->profile->get_where_custom_limit('type', $type, $limit, $offset);
			$data['all_profileres'] = $this->profile->get_where_custom('type', $type);
				$data['msg'] ="";
				$data['middle_m'] ="Api";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}

		} elseif (($selectedID == "cat")) {
			//echo "here...";
			//profile of selected category
			$this->session->set_userdata('selectedid', $selectedID);
			$cat = str_ireplace("%20"," ",$this->uri->segment(4));
			$data['profileres'] = $this->profile->get_where_custom_limit('category', $cat, $limit, $offset);
			$data['all_profileres'] = $this->profile->get_where_custom('category', $cat);
				$data['msg'] ="";
				$data['middle_m'] ="Api";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}

		} elseif (($selectedID == "all")) {
			//echo $offset;
			//profile of selected category
			$cat = "";
			$data['profileres'] = $this->profile->get_where_custom0_limit($limit, $offset);
			$data['all_profileres'] = $this->profile->get('id');

				$data['msg'] ="";
				$data['middle_m'] ="Api";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}

		} else {
			//profile of selected category
			//$data['profileres'] = $this->profile->get_where_custom3_limit('type', $type, 'category', $category, 'subcategory', $subcategory, $limit, $offset);
			$cat = "all";
			$data['profileres'] = $this->profile->get_where_custom0_limit($limit, $offset);
			$data['all_profileres'] = $this->profile->get('id');

				$data['msg'] ="";
				$data['middle_m'] ="Api";
				if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}

		
		}

		//for pagination
		if ($type=="") { $seg4 = $cat; } else {	$seg4 = $type;	}
		/*$limit_per_page = 1;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
        $total_records = $data['all_profileres']->num_rows();
        if ($total_records > 0)  {
        	 // get current page records
            $data["profileres"] = $data['profileres'];
            $config['base_url'] = base_url() . 'Api/getProfileList/'.$selectedID.'/'.$seg4;
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
        
	//display view	
	$this->load->view('Api/index',$data);
}


function getProfileSearchList_get() {
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
		$this->session->set_userdata('searchkeyword', $searchkeyword);
		$data['profileres'] = $this->Mdl_api->get_like_custom_limit('profile', 'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->Mdl_api->get_like_custom('profile', 'searchprofile', $searchkeyword);

   //echo $searchkeyword ;
		$data['msg'] ="";
	    $data['middle_m'] ="Api";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}

	} else {
		# code...
		$searchkeyword = $this->session->userdata('searchkeyword');
		
		$data['profileres'] = $this->Mdl_api->get_like_custom_limit('profile', 'searchprofile', $searchkeyword,  $limit, $offset);
		$data['all_profileres'] = $this->Mdl_api->get_like_custom('profile', 'searchprofile', $searchkeyword);

		 //echo $searchkeyword ;
		$data['msg'] ="";
	    $data['middle_m'] ="Api";
		if ($data['profileres']->num_rows() > 0) { $data['middle_f'] ="profileList"; } else { $data['middle_f'] ="profile_notfound";}

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
            $config['base_url'] = base_url() . 'Api/getProfileSearchList/';
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
	$this->load->view('Api/index',$data);

}


function getSelectedProfile_get() {

	$viewBtn = $this->input->post('viewBtn', true);
	$reloadBtn = $this->input->post('reloadBtn', true);

	if (!$viewBtn == "") {
		# code...
		$id = $viewBtn;
		$selectedID = $id;
		$this->session->set_userdata('selectedid', $selectedID);
		$data['profileres'] = $this->profile->get_where_custom('id',$selectedID );
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
				$data['middle_m'] ="Api";
				$data['middle_f'] ="profile";

	} else if (!$reloadBtn == "") { 
		# code...
		redirect('Api/getProfileList');
	} else {
		$id = $this->uri->segment(3);
		$selectedID = $id;
		$this->session->set_userdata('selectedid', $selectedID);
		$data['profileres'] = $this->profile->get_where_custom('id',$selectedID );
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
				$data['middle_m'] ="Api";
				$data['middle_f'] ="profile";

	}
	
//display view	
	$this->load->view('Api/index',$data);
}


function getMakeAppointment_get() {

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




}