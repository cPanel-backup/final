<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
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

	public function index(){
		$data = array();
		
		$data['seo'][0] = array(
    		'seo_title'=>'Best Supplement For Diabetes & Blood Sugar - Trigotab',
    		'seo_description'=>'Discover Trigotab:The best supplement for diabetics, with fenugreek. Manage blood sugar better with our diabetic supplements. Try the top diabetes tablet today!',
    		'seo_keywords'=>'supplement for diabetes,best supplement to control blood sugar,diabetic supplements'
    	);

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('index', $data);
	}
	
	public function about_trigotab(){
		$data = array();
		
		$data['seo'][0] = array(
    		'seo_title'=>'About Us | Trigotab',
    		'seo_description'=>'',
    		'seo_keywords'=>''
    	);

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('about_trigotab', $data);
	}
	public function expert_advice(){
		$data = array();

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('expert_advice', $data);
	}
	public function blog(){
		$data = array();

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('blog', $data);
	} 
	public function innerBlog(){
		$data = array();

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('innerBlog', $data);
	}
	public function contactus(){
		$data = array();
		
		$data['seo'][0] = array(
    		'seo_title'=>'Contact Us | Trigotab',
    		'seo_description'=>'',
    		'seo_keywords'=>''
    	);

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('contactus', $data);
	}
	public function success(){
		$data = array();

		//echo "<pre>"; print_r($data); exit;
		$this->load->view('success', $data);
	}
	public function leadformsubmission(){
	  	$EmailSignature = EmailSignature;
		//echo $EmailSignature;
	    //echo "<pre>"; print_r($_POST); exit;
		
		date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$this->load->helper('string');			
		$enquiry_code = random_string('nozero',10);

		//Google Recaptcha
		if(Recaptcha == 'True'){
			//echo "In Recaptcha"; exit;
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp=$this->input->ip_address();
			//echo ($this->input->valid_ip($userIp)?'Valid':'Not Valid'); exit;
			$secret = $this->config->item('google_secret');
			//echo $secret; exit;
			$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
			$ch = curl_init(); 
			curl_setopt($ch, CURLOPT_URL, $url); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
			$output = curl_exec($ch); 
			curl_close($ch);      
			$status= json_decode($output, true);
			//print_r($status); exit;
		}
		else{ $status['success'] = "No Recaptcha";}
		
		if($status['success']){
			//echo "In"; exit;
            //Validation
            $this->form_validation->set_rules('tritotab_leads_name','Please Enter Name','trim|required|min_length[3]|max_length[50]');
            $this->form_validation->set_rules('tritotab_leads_email','Please Enter Email Address','trim|required|valid_email');
            $this->form_validation->set_rules('tritotab_leads_contact','Please Enter Mobile Number','trim|required|min_length[10]|max_length[15]');
            $this->form_validation->set_rules('tritotab_leads_comment','Please Enter Message','trim|required|min_length[3]|max_length[600]');
            
            if($this->form_validation->run()==False){
                echo "Bad"; exit;
				$message = array('error' => "Validation Erroer");
				echo json_encode($message);
			}
			else{
			    //echo "Good"; exit;
			    $add_enquiry = array('tritotab_leads_name' => $this->input->post('tritotab_leads_name'), 
    			              'tritotab_leads_email' => $this->input->post('tritotab_leads_email'), 
    			              'tritotab_leads_contact' => $this->input->post('tritotab_leads_contact'),
    			              'tritotab_leads_comment' => $this->input->post('tritotab_leads_comment'), 
							  'tritotab_leads_code' => $enquiry_code,
							  'tritotab_leads_date'=>$objDate->format('Y-m-d H:i:s'));
				//echo "<pre>"; print_r($add_enquiry); exit;
    		
    			//Check Submission Id
    			$where = "tritotab_leads_code = ".$enquiry_code;
        		$data['check_submission_id'] = $this->Home_model->getData('db', 'tritotab_contact_leads', '', $where, '', '', '', '');
        		if($data['check_submission_id'][0]['tritotab_leads_code'] == $enquiry_code){ 
					echo base_url(); //exit;
    			}
    			else {
					//echo "New"; exit;
    			    $insert_enquiry = $this->Home_model->insertData('db', 'tritotab_contact_leads', $add_enquiry);
    			    //echo $insert_enquiry; exit;
        			if($insert_enquiry > 0){
						$to_name = $this->input->post('tritotab_leads_name');
    			        $to = $this->input->post('tritotab_leads_email');
	                    $subject = "Trigotab Contact Enquiry"; 
	                    
	                  
        				$message = "<!DOCTYPE html>
        				<html>
        				<head lang='en'>
        				<meta charset='utf-8'>
        				<meta name='viewport' content='width=device-width, initial-width=1.0'><title></title>
        				</head>
        				<body>
        					<div class='gmail_quote'>
        					<p>Hello <b>".$this->input->post('tritotab_leads_name')."</b>,<br><br>
        						We thank you for expressing your interest in our company. Our Team will get back to you shortly.<br>
        						<table>
        						<tr><td>Name:</td><td>" .$this->input->post('tritotab_leads_name'). "</td></tr>
        						<tr><td>Email:</td><td>" .$this->input->post('tritotab_leads_email'). "</td></tr>        						
        						<tr><td>Phone:</td><td>" .$this->input->post('tritotab_leads_contact'). "</td></tr>
        						<tr><td>Message:</td><td>" .$this->input->post('tritotab_leads_comment'). "</td></tr>
        						<tr><td>Ticket ID:</td><td>" .$enquiry_code. "</td></tr>
        						<tr>
        						</table>
        					</p>
        					<p>".$EmailSignature."</p>
        				</div>
        				</body>
        				</html>"; 
        				
        				
                        //print_r($message); exit;
                        $postdata = http_build_query(
                            array(
                                'TO_EMAIL' => $to,
                                'SUBJECT'=> $subject,
                                'MESSAGE_BODY'=> $message,
                                'TO_NAME'=> $to_name
                            )
                        );
                        //echo "<pre>"; print_r($postdata); exit;
                        // POST the data to an api						
                        $url = EmailAPI;
						//echo $url; exit;
                        $this->curls($url, $postdata);
                        //exit;
						echo base_url()."success/".$objDate->format('Y-m-d')."-".$enquiry_code; exit;
                        //End Send Mail
    			    }
    			    else{
						echo "In";
						$message = array('error' => "Error in submission");
						echo json_encode($message);
    			    }
    			}
			}
        }
		else {
			echo "Out"; exit;
			$message = array('error' => "Sorry Google Recaptcha Unsuccessful!!" );
			echo json_encode($message);// exit;
		}
        
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
}
?>
