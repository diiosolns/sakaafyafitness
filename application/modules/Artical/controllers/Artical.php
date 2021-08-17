<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Artical extends MX_Controller
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
	echo "Artical";
}


function blog() {
	//update likes
	$id =  $this->uri->segment(3);
	$thisarticalres = $this->get_where_custom_tb('artical', 'id', $id);
	if ((!($id == "")) && (!($this->session->userdata('liked') == $id))) {
		# code...
		$this->session->set_userdata('liked', $id); //store in session
		$adata['likecount'] = $thisarticalres->row()->likecount +1;
		$this->_update_tb('artical', $id, $adata);
	}

	if ((!($id == ""))){
		$data['visible_blog_res'] = $this->get_where_custom_tb('artical', 'id', $id);
	} else {
		$data['visible_blog_res'] = $this->get_where_custom_tb('artical', 'status', 'NEW');
	}

	//reselect  articals from db after update
	$data['artical_newRes'] = $this->get_where_custom_tb('artical', 'status', 'NEW');
	$data['artical_oldRes'] = $this->get_where_custom_tb('artical', 'status', 'OLD');
	$data['articalres'] = $this->get_tb('artical', 'id');
	$data['relatedRes'] = $this->get_where_custom_tb('artical', 'status', 'OLD');
	
	# code...
	$data['middle_m'] = "Artical";
	$data['middle_f'] = "blog";
	$data['bfooter_m'] = "Home";
	$data['bfooter_f'] = "blank";
	$this->load->view('Home/index',$data);
}


function newArtical() {
	$articalBtn = $this->input->post('articalBtn', true);

	if (!$articalBtn == "") {
		# code...
		$adata['heading'] = $this->input->post('heading', true);
		$adata['body'] = $this->input->post('body', true);
		$adata['date'] = mdate('%Y-%m-%d %H:%i:%s');
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['registeredby'] = $this->session->userdata('user_name');
		$adata['status'] = "Pending";
		$this->_insert($adata);

		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "newArtical";
		$data['color'] = "Blue";
		$data['msg'] ="This Artical has been Saved Successifully !";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "newArtical";
		$data['color'] = "red";
		$data['msg'] ="";
	}
	
	# code...
		if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
		} else {
			//redirect('Home');
		}
}


function manageArticals() {
	$newBtn = $this->input->post('newBtn', true);
	$oldBtn = $this->input->post('oldBtn', true);
	$deleteBtn = $this->input->post('deleteBtn', true);
	$editBtn = $this->input->post('editBtn', true);
	$modifyBtn = $this->input->post('modifyBtn', true);
	$data['articalRes'] = $this->get('id'); 


	if (!$newBtn == "") {
		# code...
		$id = $newBtn;
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['status'] = "NEW";
		$this->_update($id, $adata);

		$data['articalRes'] = $this->get('id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageArticals";
		$data['color'] = "Blue";
		$data['msg'] ="";

	} elseif (!$oldBtn == "") {
		# code...
		$id = $oldBtn;
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['status'] = "OLD";
		$this->_update($id, $adata);

		$data['articalRes'] = $this->get('id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageArticals";
		$data['color'] = "Blue";
		$data['msg'] ="";

	} elseif (!$deleteBtn == "") {
		# code...
		$id = $deleteBtn;
		$this->_delete($id);

		$data['articalRes'] = $this->get('id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageArticals";
		$data['color'] = "Blue";
		$data['msg'] ="";

	} elseif (!$editBtn == "") {
		# code...
		$id = $editBtn ;
		$data['articalRes'] = $this->get_where_custom('id', $id); 

		//$data['articalRes'] = $this->get('id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "editArtical";
		$data['color'] = "Blue";
		$data['msg'] ="";

	}elseif (!$modifyBtn == "") {
		# code...
		$id = $modifyBtn;
		$adata['heading'] = $this->input->post('heading', true);
		$adata['body'] = $this->input->post('body', true);
		$adata['date'] = mdate('%Y-%m-%d %H:%i:%s');
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['registeredby'] = $this->session->userdata('user_name');
		$adata['status'] = "Pending";
		$this->_update($id, $adata);

		$data['articalRes'] = $this->get('id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageArticals";
		$data['color'] = "Blue";
		$data['msg'] ="This Artical has been Modified Successifully !";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageArticals";
		$data['color'] = "Blue";
		$data['msg'] ="";

	}
	

	if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
			//redirect('Home');
	}

}

function blogUploads() {
	$data['mpanel_m'] = "Artical";
	$data['mpanel_f'] = "uploads";
	$data['uploadsRes'] = $this->get_where_custom_tb('uploads', 'purpose', "Blogs");
	$data['color'] = "Blue";
	$data['msg'] ="";

	if ($this->session->userdata('logged_in')) {
	    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
	  } else {
	    $this->load->view('Users/login',$data);
	  }
}

function submitUploads() {
	$upbtn = $this->input->post('upbtn',true);
	if (!$upbtn=="") {
		# code...
		$up_data['title'] = $this->input->post('title',true);
		$up_data['name'] = $this->input->post('file_name',true)."ehuduma_blog_".mdate('%Y%m%d%H%i%s');
		$up_data['type'] = "Image";
		$up_data['purpose'] = "Blogs";
		$up_data['date'] = mdate('%Y-%m-%d %H:%i:%s');
		$up_data['udate'] = mdate('%Y-%m-%d');
		/*upload file*/
		$config0['upload_path']           = './uploads/blogs/';
        $config0['allowed_types']        = 'gif|jpg|png';
        $config0['max_size']             = 6048;
        $config0['max_width']            = 3464;
        $config0['max_height']           = 3464;
        $config0['file_name'] = $up_data['name'];
        $field_name0 = "file_name";
        $this->load->library('upload',$config0);
        $this->upload->do_upload($field_name0);
        $data0 = array('upload_data0' => $this->upload->data());
        $artImage_name = $data0['upload_data0']['file_name'];
		$data0['artimgsms']= $this->upload->display_errors();
		/*end upload file*/

		/*insert into db*/
		$up_data['name'] = $artImage_name;
		$this->_insert_tb('uploads', $up_data);
		/*end insert*/
		$data['color'] = "Blue";
		$data['msg'] ="Your file has been uploaded!";
	} else {
		$data['color'] = "Blue";
		$data['msg'] ="";
	}
	$data['mpanel_m'] = "Artical";
	$data['mpanel_f'] = "uploads";
	$data['uploadsRes'] = $this->get_where_custom_tb('uploads', 'purpose', "Blogs");

	if ($this->session->userdata('logged_in')) {
	    if ($this->session->userdata('user_role') == "Admin") { $this->load->view('Admin/indexa',$data); } else if ($this->session->userdata('user_role') == "Freelancer") { $this->load->view('Admin/indexf',$data); } else if ($this->session->userdata('user_role') == "User") { $this->load->view('Admin/indexu',$data); } else {  $this->load->view('Admin/indexu',$data); }
	  } else {
	    $this->load->view('Users/login',$data);
	  }
}

function removeUploads(){
	$id =  $this->uri->segment(3);
	$this->_delete_tb('uploads',$id);
	redirect('Artical/blogUploads');
}















function hudumaNews() {
	//select articals from db
	$data['news_newRes'] = $this->get_where_custom_tb('news', 'status', 'NEW');
	$data['news_oldRes'] = $this->get_where_custom_tb('news', 'status', 'OLD');
	

	# code...
	$data['middle_m'] = "Artical";
	$data['middle_f'] = "news";
	$data['bfooter_m'] = "Home";
	$data['bfooter_f'] = "profileSlider";
	$this->load->view('Home/index',$data);
}


function postDeal() {
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
		$this->_insert_tb('news', $adata);

		//go to view  page
		redirect('Artical/hudumaNews');

	} else {
		# code...
		redirect('Artical/hudumaNews');
	}
	

}


function newNews() {
	$newsBtn = $this->input->post('newsBtn', true);

	if (!$newsBtn == "") {
		# code...
		$adata['heading'] = $this->input->post('heading', true);
		$adata['body'] = $this->input->post('body', true);
		$adata['date'] = mdate('%Y-%m-%d %H:%i:%s');
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['registeredby'] = $this->session->userdata('user_name');
		$adata['status'] = "NEW";
		$this->_insert_tb('news', $adata);
		
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "newNews";
		$data['color'] = "Blue";
		$data['msg'] ="This News has been Saved Successifully !";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "newNews";
		$data['color'] = "red";
		$data['msg'] ="";
	}
	
	# code...
		if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
		} else {
			//redirect('Home');
		}
}






function manageNews() {
	$newBtn = $this->input->post('newBtn', true);
	$oldBtn = $this->input->post('oldBtn', true);
	$deleteBtn = $this->input->post('deleteBtn', true);
	$editBtn = $this->input->post('editBtn', true);
	$modifyBtn = $this->input->post('modifyBtn', true);
	$data['newsRes'] = $this->get_tb('news', 'id'); 


	if (!$newBtn == "") {
		# code...
		$id = $newBtn;
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['status'] = "NEW";
		$this->_update_tb('news', $id, $adata);

		$data['newsRes'] = $this->get_tb('news', 'id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageNews";
		$data['color'] = "Blue";
		$data['msg'] ="";

	} elseif (!$oldBtn == "") {
		# code...
		$id = $oldBtn;
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['status'] = "OLD";
		$this->_update_tb('news', $id, $adata);

		$data['newsRes'] = $this->get_tb('news', 'id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageNews";
		$data['color'] = "Blue";
		$data['msg'] ="";

	} elseif (!$deleteBtn == "") {
		# code...
		$id = $deleteBtn;
		$this->_delete_tb('news', $id);

		$data['newsRes'] = $this->get_tb('news', 'id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageNews";
		$data['color'] = "Blue";
		$data['msg'] ="";

	} elseif (!$editBtn == "") {
		# code...
		$id = $editBtn ;
		$data['newsRes'] = $this->get_where_custom_tb('news', 'id', $id); 

		//$data['articalRes'] = $this->get('id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "editNews";
		$data['color'] = "Blue";
		$data['msg'] ="";

	}elseif (!$modifyBtn == "") {
		# code...
		$id = $modifyBtn;
		$adata['heading'] = $this->input->post('heading', true);
		$adata['body'] = $this->input->post('body', true);
		$adata['date'] = mdate('%Y-%m-%d %H:%i:%s');
		$adata['udate'] = mdate('%Y-%m-%d');
		$adata['registeredby'] = $this->session->userdata('user_name');
		$adata['status'] = "NEW";
		$this->_update_tb('news', $id, $adata);

		$data['newsRes'] = $this->get_tb('news', 'id'); 
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageNews";
		$data['color'] = "Blue";
		$data['msg'] ="This Artical has been Modified Successifully !";

	} else {
		# code...
		$data['middle_m'] ="Admin";
		//$data['middle_f'] ="m_container";
	 	$data['mpanel_m'] = "Artical";
		$data['mpanel_f'] = "manageNews";
		$data['color'] = "Blue";
		$data['msg'] ="";

	}
	

	if ($this->session->userdata('logged_in')) {
			if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); }
			//if ($this->session->userdata('user_role') == "admin") { if ($this->session->userdata('user_role') == "Admin") {$data['middle_f'] = "adminm_container"; $this->load->view('Admin/indexa',$data); } else { $data['middle_f'] = "m_container"; $this->load->view('Admin/indexu',$data); } } else { $this->load->view('Production/index',$data); }
	} else {
			//redirect('Home');
	}

}




//DOWNLOAD LUKU ORDERS MULT EXCLE SHEETS
function downProductExcel($prodres){
//load our new PHPExcel library
$this->load->library('excel');	
//Dashboard (sheet 1)
$this->excel->setActiveSheetIndex(0);

//ORDERS SHEET
$h1 = "MY-BAKERY AVAILABLE PRODUCTS REPORT";
$h2 = "(Bakery Daily Produts Details - ".mdate('%Y/ %m/ %d').")";
// items (seet 2)
/*$this->excel->createSheet();
$this->excel->setActiveSheetIndex(1);*/
//Format second sheet
$this->excel->getActiveSheet()->setTitle('Products Report');
$this->excel->getActiveSheet()->getStyle('A1:I1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F4B083');
$this->excel->getActiveSheet()->getStyle('A2:I2')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('F4B083');
$this->excel->getActiveSheet()->setCellValue('A1', strtoupper($h1));
$this->excel->getActiveSheet()->setCellValue('A2', strtoupper($h2));
$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(16);
$this->excel->getActiveSheet()->getStyle('A2')->getFont()->setSize(16);
$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
$this->excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
$this->excel->getActiveSheet()->getStyle('A4:I4')->getFont()->setBold(true);
$this->excel->getActiveSheet()->mergeCells('A1:I1');
$this->excel->getActiveSheet()->mergeCells('A2:I2');
$this->excel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$this->excel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
//set aligment to center for that merged cell (A1 to D1)
$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$this->excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//set sheet title
$this->excel->getActiveSheet()->getStyle('A4:I4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setARGB('699CF1');
$this->excel->getActiveSheet()->setCellValue('A4', 'PRODUCT NAME');
$this->excel->getActiveSheet()->setCellValue('B4', 'PRODUCT TYPE');
$this->excel->getActiveSheet()->setCellValue('C4', 'QUANTITY');
$this->excel->getActiveSheet()->setCellValue('D4', 'UNIT PRICE (Tshs)');
$this->excel->getActiveSheet()->setCellValue('E4', 'TOTAL PRICE (Tshs)');
$this->excel->getActiveSheet()->setCellValue('F4', 'REGISTERED BY');
$this->excel->getActiveSheet()->setCellValue('G4', 'REMARKS');
$this->excel->getActiveSheet()->setCellValue('H4', 'DATE MODIFIED');
$this->excel->getActiveSheet()->setCellValue('I4', 'APPROVAL');
//Print data from db
$count = 5;
$index = 1;
foreach ($prodres->result() as $row){
	$this->excel->getActiveSheet()->setCellValue('A'.$count, $row->name);
	$this->excel->getActiveSheet()->setCellValue('B'.$count, $row->type);
	$this->excel->getActiveSheet()->setCellValue('C'.$count, $row->qnty);
	$this->excel->getActiveSheet()->setCellValue('D'.$count, $row->unitprice);
	$this->excel->getActiveSheet()->setCellValue('E'.$count, $row->totalprice);
	$this->excel->getActiveSheet()->setCellValue('F'.$count, $this->users->get_where_custom('id', $row->userid)->row()->name);
	$this->excel->getActiveSheet()->setCellValue('G'.$count, $row->remarks);
	$this->excel->getActiveSheet()->setCellValue('H'.$count, $row->udate);
	$this->excel->getActiveSheet()->setCellValue('I'.$count, $row->approval);
$count++;
$index ++;
}


$filename='Products_Report.xls'; //save our workbook as this file name
header('Content-Type: application/vnd.ms-excel'); //mime type
header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
header('Cache-Control: max-age=0'); //no cache
            
//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
//if you want to save it as .XLSX Excel 2007 format
$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
//force user to download the Excel file without writing it to server's HD
$objWriter->save('php://output');

}







//default codes xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

function get($order_by) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->get($order_by);
return $query;
}

function get_tb($tb, $order_by) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->get_tb($tb, $order_by);
return $query;
}

function get_dist($col) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->get_dist($col);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->get_where_custom($col, $value);
return $query;
}

function get_where_custom_tb($tb, $col, $value) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->get_where_custom_tb($tb, $col, $value);
return $query;
}

function get_where_custom2($col1, $value1, $col2, $value2) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_luku->get_where_custom2($col1, $value1, $col2, $value2);
return $query;
}

function _insert($data) {
$this->load->model('Mdl_artical');
$this->Mdl_artical->_insert($data);
}

function _insert_tb($tb, $data) {
$this->load->model('Mdl_profile');
$this->Mdl_profile->_insert_tb($tb, $data);
}

function _update($id, $data) {
$this->load->model('Mdl_artical');
$this->Mdl_artical->_update($id, $data);
}


function _update_tb($tb, $id, $data) {
$this->load->model('Mdl_artical');
$this->Mdl_artical->_update_tb($tb, $id, $data);
}

function _update_custome($col, $value, $data) {
$this->load->model('Mdl_artical');
$this->Mdl_artical->_update_custome($col, $value, $data);
}

function _delete($id) {
$this->load->model('Mdl_artical');
$this->Mdl_artical->_delete($id);
}

function _delete_tb($tb, $id) {
$this->load->model('Mdl_artical');
$this->Mdl_artical->_delete_tb($tb, $id);
}

function _delete_custome($col, $value) {
$this->load->model('Mdl_artical');
$this->Mdl_artical->_delete_custome($col, $value);
}

function count_where($column, $value) {
$this->load->model('Mdl_artical');
$count = $this->Mdl_artical->count_where($column, $value);
return $count;
}

function count_all() {
$this->load->model('Mdl_artical');
$count = $this->Mdl_artical->count_all();
return $count;
}



function get_max() {
$this->load->model('Mdl_artical');
$max_id = $this->Mdl_artical->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_artical->_custom_query($mysql_query);
return $query;
}


/*============================== get sum =================*/

function get_sum_where_custom1($tb, $col, $col1, $value1) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_luku->get_sum_where_custom1($tb, $col, $col1, $value1);
return $query;
}

function get_sum_where_custom2($tb, $col, $col1, $value1, $col2, $value2) {
$this->load->model('Mdl_artical');
$query = $this->Mdl_luku->get_sum_where_custom1($tb, $col, $col1, $value1, $col2, $value2);
return $query;
}
/*=========================== end sum ====================*/

}