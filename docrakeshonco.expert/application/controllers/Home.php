<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Home_model');
		$this->load->library('form_validation');
		$this->load->model('Home_model');
		//$this->load->library('session');
		$this->load->library(array('session', 'email'));
		$this->load->helper('cookie');
		$this->load->helper('url', 'form', 'string', 'file', 'directory');
		// For Error Reporting
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}

	public function index(){
	    date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$data = array();
		
		//echo "In"; exit;
		
		$this->load->view('index', $data);
		
	}
	public function specialty(){
		$data = array();
		
		$this->load->view('specialty', $data);
	}
	public function blogs_list(){
		$data = array();
		
		$this->load->view('blogs_list', $data);
	}
	public function world_no_tobacco_day(){
		$data = array();
		
		$this->load->view('world_no_tobacco_day', $data);
	}
	public function news_list(){
		$data = array();
		
		$this->load->view('news_list', $data);
	}
	public function cancer_screening_campaign(){
		$data = array();
		
		$this->load->view('cancer_screening_campaign', $data);
	}
	public function contact_us(){
		$data = array();
		
		$this->load->view('contact_us', $data);
	}
	public function childhood_cancer_awareness_and_prevention(){
		$data = array();
		
		$this->load->view('childhood_cancer_awareness_and_prevention', $data);
	}
	public function the_long_battle_of_childhood_cancer(){
    	$data = array();
    	
    	$this->load->view('the_long_battle_of_childhood_cancer', $data);
}
	public function matched_unrelated_donor_mud_and_haplo_identical_stem_cell_transplant(){
    	$data = array();
    	
    	$this->load->view('matched_unrelated_donor_mud_and_haplo_identical_stem_cell_transplant', $data);
}
	public function stem_cell_donation(){
    	$data = array();
    	
    	$this->load->view('stem_cell_donation', $data);
	}
	
	
	
	public function leadformsubmission(){
	//	echo "<pre>"; print_r($_POST); exit;
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$this->load->helper('string');			
		$enquiry_code = random_string('nozero',10);

        //Validation
        $this->form_validation->set_rules('dw_code','','trim|required');
        $this->form_validation->set_rules('dw_ce_name','Please Enter Name','trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('dw_ce_emial','Please Enter Email Address','trim|required|valid_email');
        $this->form_validation->set_rules('dw_ce_contact','Please Enter Mobile Number','trim|required|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('dw_ce_subject','Please Enter Location','trim|required');
        $this->form_validation->set_rules('dw_ce_message','Please Enter Message','trim|required|min_length[10]|max_length[500]');
        
        if($this->form_validation->run()==False){
              //echo "bad"; exit;
			$message = array('error' => "Validation Erroer");
			echo json_encode($message);
		}
		else{
		   // echo "Good"; exit;
		    $add_enquiry = array('dw_code' => $this->input->post('dw_code'), 
              'dw_ce_name' => $this->input->post('dw_ce_name'), 
              'dw_ce_emial' => $this->input->post('dw_ce_emial'),
              'dw_ce_contact' => $this->input->post('dw_ce_contact'), 
              'dw_ce_subject' => $this->input->post('dw_ce_subject'), 
              'dw_ce_message' => $this->input->post('dw_ce_message'), 
			  'dw_ce_enqcode' => $enquiry_code,
			  'dw_ce_created_on'=>$objDate->format('Y-m-d H:i:s'));
			//echo "<pre>"; print_r($add_enquiry); exit;
		    $insert_enquiry = $this->Home_model->insertData('db', 'dw_contact_enquiry', $add_enquiry);
            echo base_url()."success/contact-enquiry/".$enquiry_code."-".$objDate->format('Y-m-d'); exit;
		}
	}
	public function bookappointment(){
		$data = array();
		$tableA = 'dw_themes_settings';
		$tableB = 'dw_websitelist';
		$key1 = 'dw_code';
		$key2 = 'dw_code';
		$tableC = 'dw_themes';
		$key3 = 'dw_theme_id ';
		$key4 = 'dw_theme_id ';
		$tableD = 'dw_website_settings';
		$key5 = 'dw_code';
		$key6 = 'dw_code';
		$tableE = 'social_media_settings';
		$key7 = 'dw_code';
		$key8 = 'dw_code';
		$tableF = 'dw_website_contact_information';
		$key9 = 'dw_code';
		$key10 = 'dw_code';
		$tableG = '';
		$key11 = '';
		$key12 = '';
		$getdata = '';
		$where = 'A.dw_code = "'.Doccode.'"';
		$data['websiteinfo'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata, $where, '', '', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
        //echo "<pre>"; print_r($data); exit;
		//$data['websiteinfo'][0]['dw_theme_id'];

		//echo "<pre>"; print_r($data['contact_information']); exit;
		if($data['websiteinfo'][0]['dw_status'] == 1002){
			//redirect('https://www.heterohealthcare.com/'); 
			echo "Website Inactive"; exit;
		}
		else{
			if($data['websiteinfo'][0]['dw_theme_id'] == 1){
				$this->load->view('themes/'.$data['websiteinfo'][0]['dw_theme_id'].'/index', $data);
			}
			else if($data['websiteinfo'][0]['dw_theme_id'] == 2){
				$this->load->view('themes/'.$data['websiteinfo'][0]['dw_theme_id'].'/index', $data);
			}
			else if($data['websiteinfo'][0]['dw_theme_id'] == 3){
				$this->load->view('themes/'.$data['websiteinfo'][0]['dw_theme_id'].'/index', $data);
			}
			else if($data['websiteinfo'][0]['dw_theme_id'] == 4){
				$this->load->view('themes/'.$data['websiteinfo'][0]['dw_theme_id'].'/index', $data);
			}
			else if($data['websiteinfo'][0]['dw_theme_id'] == 5){
				$this->load->view('themes/'.$data['websiteinfo'][0]['dw_theme_id'].'/index', $data);
			}
			else{
				echo "No Theme"; exit;
			}
		}
	}
	public function appointmentformsubmission(){
		//echo "<pre>"; print_r($_POST); //exit;
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$this->load->helper('string');			
		$dw_ap_code = random_string('nozero',10);

        //Validation
        $this->form_validation->set_rules('dw_code','','trim|required');
        $this->form_validation->set_rules('appointment_name','','trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('appointment_email','','trim|required|valid_email');
        $this->form_validation->set_rules('appointment_mobile','','trim|required|min_length[10]|max_length[15]');
        $this->form_validation->set_rules('appointment_date','','trim|required');
        $this->form_validation->set_rules('appointment_slot','','trim|required');
        $this->form_validation->set_rules('appointment_reason','','trim|required');
        $this->form_validation->set_rules('appointment_medical_history','','trim|required|min_length[10]|max_length[500]');
        
        if($this->form_validation->run()==False){
			$message = array('error' => "Validation Erroer");
			echo json_encode($message);
			//echo "Bad"; exit;
		}
		else{
		    //echo "Good"; exit;
		    $add_appointment = array('dw_code' => $this->input->post('dw_code'),
		      'dw_ap_code' => $dw_ap_code,
              'dw_ap_name' => $this->input->post('appointment_name'), 
              'dw_ap_email' => $this->input->post('appointment_email'),
              'dw_ap_mobile' => $this->input->post('appointment_mobile'), 
              'dw_ap_date' => $this->input->post('appointment_date'), 
              'dw_ap_timeslot' => $this->input->post('appointment_slot'), 
              'dw_ap_reason' => $this->input->post('appointment_reason'), 
              'dw_ap_medical_history' => $this->input->post('appointment_medical_history'), 
			  'dw_ap_created_on'=>$objDate->format('Y-m-d H:i:s'));
			//echo "<pre>"; print_r($add_appointment); exit;
		    $insert_enquiry = $this->Home_model->insertData('db', 'dw_appointments', $add_appointment);
		    //echo $insert_enquiry; exit;
            echo base_url()."success/appointment/".$objDate->format('Y-m-d'); exit;
		}
	}
		public function success(){
		$this->load->view('success');
	}
	
	
	public function curls($url, $postdata) {
		try{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
			//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
			// receive server response ...
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec ($ch);
			curl_close ($ch);
			$output = $server_output;
		}catch(Exception $e) {
			return $e;
		}
        return $output;
    }
	
	
	
	
	public function photo_gallery(){
		$this->load->view('photo_gallery');
	}
	public function video_gallery(){
		$this->load->view('video_gallery');
	}
	public function testimonials(){
		$this->load->view('testimonials');
	}
	
	public function admin(){
		$data = array();		
		redirect('login');
		//echo "<pre>"; print_r($data); exit;
	}

	public function login() {
		$data=array();
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();

        if ($this->input->post('submit')){
			//echo "<pre>"; print_r($_POST); exit;
			$this->form_validation->set_rules('username','Enter Username','required');
			$this->form_validation->set_rules('password','Enter Password','required');
			$this->form_validation->set_error_delimiters('<div class="error">','</div>');
			$this->form_validation->set_message('required', 'Enter %s');
			if($this->form_validation->run()==False){
				//echo validation_errors();
				$data['error'] = validation_errors();
				//echo "<pre>"; print_r($data); exit;
				$this->load->view('admin/index', $data);
			}
			else{
				//echo "In"; exit;
				$where = array('username'=> $this->input->post('username'),'password'=> $this->input->post('password'));
				$data['userdata']=$this->Home_model->getData('db', 'dw_users', '*', $where, '', '', '', '');
				if(!empty($data['userdata'])){
					if($data['userdata'][0]['status'] == '1001'){
						//echo $data['userdata'][0]['username']; exit;
						//echo "<pre>"; Print_r($data); //exit;
						if($data['userdata'][0]['user_type'] == 'Admin'){
							$sessiondata = array(
								'id'=>$data['userdata'][0]['id'],
								'user_type'=>$data['userdata'][0]['user_type'],
								'user_code'=>$data['userdata'][0]['emp_id'],
								'username'=>$data['userdata'][0]['username'],
								'status'=>$data['userdata'][0]['status']);
						}
						else if($data['userdata'][0]['user_type'] == 'Doctor'){
							$sessiondata = array(
								'id'=>$data['userdata'][0]['id'],
								'user_type'=>$data['userdata'][0]['user_type'],
								'user_code'=>$data['userdata'][0]['dw_code'],
								'username'=>$data['userdata'][0]['username'],
								'status'=>$data['userdata'][0]['status']);
						}
						//echo "<pre>"; Print_r($sessiondata); exit;
						$this->session->set_userdata($sessiondata);
						redirect('dashboard');
					}
					else{
						$data['error'] = '<div class="error">User was Inactive Please contact Administrator</div>';
						$this->load->view('admin/index', $data);
					}
				}
				else {
					$data['error'] = '<div class="error">Invalid Username and Password</div>';
					$this->load->view('admin/index', $data);
				}
			}
		}
		else{
			$this->load->view('admin/index', $data);
		}
    }
    public function User_Auth() {
		// echo"<pre>"; print_r($this->session->all_userdata());
		// exit;
        if ($this->session->userdata('id')) {
            return true;
        } else {
            return false;
        }
    }
    public function logout() {
		//echo "In"; exit;
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        redirect('admin');
    }


	public function dashboard() {
		$data = array();
		if ($this->User_Auth()) {} else {
			//$this->load->view('admin/login');
			redirect('login');
		}
		
		//echo '<pre>'; print_r($this->session->all_userdata()); 
		if($this->session->userdata('user_type') == 'Admin'){
			$this->load->view('admin/dashboard', $data);
		}
		else if($this->session->userdata('user_type') == 'Doctor'){
			$tableA = 'dw_themes_settings';
			$tableB = 'dw_websitelist';
			$key1 = 'dw_code';
			$key2 = 'dw_code';
			$tableC = 'dw_themes';
			$key3 = 'dw_theme_id';
			$key4 = 'dw_theme_id';
			$tableD = '';
			$key5 = '';
			$key6 = '';
			$tableE = '';
			$key7 = '';
			$key8 = '';
			$tableF = '';
			$key9 = '';
			$key10 = '';
			$tableG = '';
			$key11 = '';
			$key12 = '';
			$getdata = '';
			$where = '';
			//$where = array('dw_status'=>1001);
			$data['websiteinfo'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata, $where, '', '', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
			if($data['websiteinfo'][0]['dw_status'] == 1002){
				//redirect('https://www.heterohealthcare.com/'); 
				echo "Website Inactive"; exit;
			}
			else{
				$this->load->view('doctoradmin/dashboard', $data);
				/*if($data['websiteinfo'][0]['dw_theme_id'] == 1){
					$this->load->view('themes/'.$data['websiteinfo'][0]['dw_theme_id'].'/admin/index', $data);
				}
				else if($data['websiteinfo'][0]['dw_theme_id'] == 2){
					$this->load->view('themes/'.$data['websiteinfo'][0]['dw_theme_id'].'/admin/index', $data);
				}
				else{
					echo "No Theme"; exit;
				}*/
			}
		}
		else{
			echo "Data not found";
		}
	}

	public function users() {
		$data = array();
		if ($this->User_Auth()){ if($this->session->userdata('user_type') == 'Doctor'){ echo "You do not have permission to access this page"; exit; } else { }} else {
			//$this->load->view('admin/login');
			redirect('login');
		}

		$getdata = '';
		$where = '';
		$data['userlist']=$this->Home_model->getData('db', 'dw_users', $getdata,  $where,'','','','');

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('admin/users', $data);
	}

	public function websitelist() {
		$data = array();
		if ($this->User_Auth()) { if($this->session->userdata('user_type') == 'Doctor'){ echo "You do not have permission to access this page"; exit; } else { } } else {
			//$this->load->view('admin/login');
			redirect('login');
		}

		$tableA = 'dw_themes_settings';
		$tableB = 'dw_websitelist';
		$key1 = 'dw_code';
		$key2 = 'dw_code';
		$tableC = 'dw_themes';
		$key3 = 'dw_theme_id';
		$key4 = 'dw_theme_id';
		$tableD = 'dw_app_routes';
		$key5 = 'dw_page_id';
		$key6 = 'dw_page_id';
		$tableE = '';
		$key7 = '';
		$key8 = '';
		$tableF = '';
		$key9 = '';
		$key10 = '';
		$tableG = '';
		$key11 = '';
		$key12 = '';
		$getdata = '';
		$where = '';
		$data['websitelist'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata, $where, '', '', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
		
		//echo "<pre>"; print_r($data); exit;
		$this->load->view('admin/websitelist', $data);
	}

	public function website_create(){
		$data = array();
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$this->load->helper('string');
		
		if ($this->User_Auth()) { if($this->session->userdata('user_type') == 'Doctor'){ echo "You do not have permission to access this page"; exit; } else { } } else {
			//$this->load->view('admin/login');
			redirect('login');
		}

		if($this->input->post('submit')){
			//echo "<pre>"; print_r($_POST); //exit;

			//Generate new doctor code
			$dw_code = random_string('alnum', 10);
			$dw_name = $this->input->post('dw_name');
			$password = random_string('nozero',6);

			//Check doctor code
			$getdata = '';
			$where = '';
			$data['doctorcode']=$this->Home_model->getData('db', 'dw_websitelist', $getdata,  $where,'','','','');
			if(empty($data['doctorcode'])){ } else { 
				if($data['doctorcode'][0]['dw_code'] == $dw_code){
					echo "Doctor code was duplicated, please contact administrator"; exit;
				}
			}

			//Get last page id
			$getdata = '';
			$where = '';
			$data['pages']=$this->Home_model->getData('db', 'dw_pages', $getdata,  $where, '1', 'dw_page_id', 'desc', '');
			if(empty($data['pages'])){ $new_page_id = '1'; } else { 
				$new_page_id = $data['pages'][0]['dw_page_id']+1;
			}

			//Create website
			$create_website = array(
				'dw_code' => $dw_code,
				'dw_name' => $dw_name,
				'dw_status' => '1001',
				'dw_page_id' => $new_page_id,
				'dw_pagesgroup_id' => '1',
				'dw_updated_by' => $this->input->post('user_code'),
				'dw_updated_on' => $objDate->format('Y-m-d H:i:s'),
				'dw_created_by' => $this->input->post('user_code'),
				'dw_created_on' => $objDate->format('Y-m-d H:i:s'));
			//echo "<pre>"; print_r($create_website); exit;
			$insert_website = $this->Home_model->insertData('db', 'dw_websitelist', $create_website); 
			
			//Create user
			if($insert_website){
				//Create username
				$username = trim(strtolower(str_replace(" ", "", $dw_name)));

				$create_user = array(
					'user_type' => 'Doctor',
					'dw_code' => $dw_code,
					'dw_display_name' => $dw_name,
					'username' => $username,
					'password' => $password,
					'status' => '1001',
					'dw_updated_by' => $this->input->post('user_code'),
					'dw_updated_on' => $objDate->format('Y-m-d H:i:s'),
					'dw_created_by' => $this->input->post('user_code'),
					'dw_created_on' => $objDate->format('Y-m-d H:i:s'));
				//echo "<pre>"; print_r($create_user); exit;
				$insert_themes_user = $this->Home_model->insertData('db', 'dw_users', $create_user); 
			}

			//Create themes settings
			if($insert_website){ 
				$create_themes_settings = array(
					'dw_code' => $dw_code,
					'dw_theme_id' => $this->input->post('dw_theme_id'),
					'dw_page_id' => $new_page_id,
					'dw_updated_by' => $this->input->post('user_code'),
					'dw_updated_on' => $objDate->format('Y-m-d H:i:s'),
					'dw_created_by' => $this->input->post('user_code'),
					'dw_created_on' => $objDate->format('Y-m-d H:i:s'));
				//echo "<pre>"; print_r($create_themes_settings); exit;
				$insert_themes_settings = $this->Home_model->insertData('db', 'dw_themes_settings', $create_themes_settings); 
			}

			//Create website settings
			if($insert_website){ 
				$create_website_settings = array(
					'dw_code' => $dw_code,
					'dw_updated_by' => $this->input->post('user_code'),
					'dw_updated_on' => $objDate->format('Y-m-d H:i:s'),
					'dw_created_by' => $this->input->post('user_code'),
					'dw_created_on' => $objDate->format('Y-m-d H:i:s'));
				//echo "<pre>"; print_r($create_website_settings); exit;
				$insert_website_settings = $this->Home_model->insertData('db', 'dw_themes_settings', $create_website_settings); 
			}

			//Create social media settings
			if($insert_website){ 
				$create_social_media_settings = array(
					'dw_code' => $dw_code,
					'dw_updated_by' => $this->input->post('user_code'),
					'dw_updated_on' => $objDate->format('Y-m-d H:i:s'),
					'dw_created_by' => $this->input->post('user_code'),
					'dw_created_on' => $objDate->format('Y-m-d H:i:s'));
				//echo "<pre>"; print_r($create_social_media_settings); exit;
				$insert_social_media_settings = $this->Home_model->insertData('db', 'dw_themes_settings', $create_social_media_settings); 
			}
			
			//Create page
			if($insert_website){
				$create_page = array(
					'dw_page_id' => $new_page_id,
					'dw_pagesgroup_id' => '1',
					'dw_code' => $dw_code);
				//echo "<pre>"; print_r($create_page); exit;
				$insert_page = $this->Home_model->insertData('db', 'dw_pages', $create_page); 
			}

			//Create roots
			if($insert_website){ 
				//Create url
				$slug = trim(strtolower(str_replace(" ", "-", $this->input->post('slug'))));
				$create_roots = array(
					'slug' => $slug,
					'controller' => 'Home/doctor/'.$insert_website,
					'dw_page_id' => $new_page_id,
					'dw_pagesgroup_id' => '1',
					'dw_code' => $dw_code);
				//echo "<pre>"; print_r($create_roots); exit;
				$insert_roots = $this->Home_model->insertData('db', 'dw_app_routes', $create_roots);
			}

			//Create meta
			if($insert_website){ 
				//Create url
				$create_meta = array(
					'dw_page_id' => $new_page_id,
					'dw_pagesgroup_id' => '1',
					'dw_meta_title' => $dw_name);
				//echo "<pre>"; print_r($create_meta); exit;
				$insert_meta = $this->Home_model->insertData('db', 'dw_meta', $create_meta);
			}
			
			redirect('website-list');
		}
		else{
			//Get Themes
			$getdata = '';
			//$where = '';
			$where = array('dw_theme_status'=>'1001');
			$data['themelist']=$this->Home_model->getData('db', 'dw_themes', $getdata,  $where,'','','','');

			//echo "<pre>"; print_r($data); exit;
			$this->load->view('admin/website_create', $data);
		}
	}

	public function website_edit(){
		$data = array();
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();

		if ($this->User_Auth()) { if($this->session->userdata('user_type') == 'Doctor'){ echo "You do not have permission to access this page"; exit; } else { } } else {
			//$this->load->view('admin/login');
			redirect('login');
		}

		if($this->input->post('update')){
			//echo "<pre>"; print_r($_POST); //exit;
			$update_settings = array(
				'dw_theme_id'=> $this->input->Post('dw_theme_id'),
				'dw_updated_by' => $this->input->post('user_code'),
				'dw_updated_on' => $objDate->format('Y-m-d H:i:s')
			);
			//echo "<pre>"; print_r($update_settings); exit;
			$where2= array('dw_code'=>$this->input->post('dw_code'));
			//echo "<pre>"; print_r($where); exit;
			$dw_themes_settings = $this->Home_model->updateData('db', 'dw_themes_settings', $update_settings, $where2);

			redirect('website-list');
		}
		else{
			$tableA = 'dw_themes_settings';
			$tableB = 'dw_websitelist';
			$key1 = 'dw_code';
			$key2 = 'dw_code';
			$tableC = 'dw_themes';
			$key3 = 'dw_theme_id';
			$key4 = 'dw_theme_id';
			$tableD = '';
			$key5 = '';
			$key6 = '';
			$tableE = '';
			$key7 = '';
			$key8 = '';
			$tableF = '';
			$key9 = '';
			$key10 = '';
			$tableG = '';
			$key11 = '';
			$key12 = '';
			$getdata = '';
			$where = '';
			$where= array('A.dw_code'=>$this->input->get('code'));
			$data['websiteinfo'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata, $where, '', '', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
			
			//Get Themes
			$getdata = '';
			//$where = '';
			$where = array('dw_theme_status'=>'1001');
			$data['themelist']=$this->Home_model->getData('db', 'dw_themes', $getdata,  $where,'','','','');

			//echo $this->input->get('code');
			//echo "<pre>"; print_r($data); exit;
			$this->load->view('admin/website_edit', $data);
		}
	}

	public function themeslist(){
		$data = array();

		if ($this->User_Auth()) { if($this->session->userdata('user_type') == 'Doctor'){ echo "You do not have permission to access this page"; exit; } else { } } else {
			//$this->load->view('admin/login');
			redirect('login');
		}

		$getdata = '';
		$where = '';
		$data['themelist']=$this->Home_model->getData('db', 'dw_themes', $getdata,  $where,'','','','');
		
		//echo "<pre>"; print_r($data); exit;
		$this->load->view('admin/themeslist', $data);
	}

	public function  statuschangenew(){
		//echo "<pre>"; print_r($_POST);  exit;
		$db = $this->input->post('db');
		$table = $this->input->post('table');     
		$colum = $this->input->post('colum');
		$Rcolum = $this->input->post('Rcolum'); 
		if($this->input->post('status') == '1002'){ $value = '1001'; } else { $value = '1002';}
		$update_status = array(       
		  $colum => $value,
		); 
		$where = array($Rcolum => $this->input->post('id'));
		$this->Home_model->updateData($db, $table, $update_status, $where);  
	}

	public function generateRandomString($length = 32) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	  //Activate services
	  		/*about-us
			blog
			articles
			publications
			news-and-events
			testimonials
			gallery
			book-appointment
			contact-us*/

}
?>
