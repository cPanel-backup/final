<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Home_model');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->helper('url', 'form', 'string');
		// For Error Reporting
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}
	public function login() {
		$data=array();
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();

        if($this->input->post('submit')){
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
				$where = array('username'=> $this->input->post('username'),'password'=> $this->input->post('password'), 'status'=> '1001');
				$data['userdata']=$this->Home_model->getData('db', 'trigotab_users', '*', $where, '', '', '', '');
				//echo "<pre>"; Print_r($data); exit;
				$sessiondata = array('id'=>$data['userdata'][0]['id'],'displayname'=>$data['userdata'][0]['displayname'],'username'=>$data['userdata'][0]['username'],'status'=>$data['userdata'][0]['status']);				
				
				//print_r($sessiondata); exit;
				
				if(!empty($data['userdata'])){
					//echo $data['userdata'][0]['username']; exit;
					$this->session->set_userdata($sessiondata);
					redirect('dashboard');
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
        redirect('');
    }
	public function dashboard() {
		$data = array();
		if ($this->User_Auth()) {} else {
			//$this->load->view('admin/login');
			redirect('login');
		}
		//echo "<pre>"; print_r($data); exit;
		$this->load->view('admin/dashboard', $data);
	}
	public function contact_leads() {
		$data=array();
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		
	    $where = '';
	    $data['contact_leads'] = $this->Home_model->getData('db', 'tritotab_contact_leads', '', $where, '', '', '', '');
		
		//echo "<pre>"; print_r($data); exit;
		$this->load->view('admin/contact_leads', $data);
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
        
        //print_r($update_status); exit;
        $where = array($Rcolum => $this->input->post('id'));
        $this->Home_model->updateData($db, $table, $update_status, $where);
    }
}
?>
