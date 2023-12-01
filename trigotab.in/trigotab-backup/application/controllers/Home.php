<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Home_model');
		$this->load->library('session');
		// For Error Reporting
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}

	public function index(){
		$domains_page_id = 47;
		// Domain
		$where = array('domain_id'=>14);
		$data['domains']=$this->Home_model->getData('domains',$where);
		
		$where3 = array('domains_page_groups_id'=>1);
		$data['domains_page_groups']=$this->Home_model->getData('domains_page_groups',$where3);
		
		//$query = array('domain_id'=>2,'limit'=>3);
		//$data['ba_posts']=$this->Home_model->getBlogdata($query);
		
		// SEO
		$data['seo'] = $this->Home_model->getMetadata($domains_page_id);
		
		// echo '<pre>';print_r($data);exit;
		$this->load->view('index',$data);
	}
	
	//PRODUCT ENQUIRY
	public function product_enquiry() {
	    //echo '<pre>';print_r($_POST); //exit;
	    //Get Data From Dashbord Blocking
		error_reporting(0);
		$getdata = 'email';
		$where = 'status = "1001"'; 
		$blockedemail = $this->Home_model->AdgetData('db', 'blocked_emails', $getdata, $where, '','','','');
		//print_r($blockedemail); exit;
		$BlockData = array();
		for ($x = 0; $x <= count($blockedemail); $x++) {
		//echo $blockedemail[$x]['email'];
		//echo "<br>";
		array_push($BlockData,$blockedemail[$x]['email']);
		}
		//echo $this->input->post('seo_leads_emial'); echo"<br>";
		if(in_array($this->input->post('seo_leads_emial'), $BlockData)){ redirect(); } else {
    	    $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            //echo $recaptchaResponse;
            $userIp=$this->input->ip_address();
            $secret = $this->config->item('google_secret');
            $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, $url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $output = curl_exec($ch); 
            curl_close($ch);      
            $status= json_decode($output, true);
            if ($status['success']) {
                //print_r('Google Recaptcha Successful'); exit;
                
                $this->load->helper('string');
        		$enquiry_code = random_string('nozero',10);
                $objDate = new DateTime();
                
                $data = array('seo_leads_name' => $this->input->post('seo_leads_name'), 
    						'seo_leads_emial' => $this->input->post('seo_leads_emial'), 
    						'seo_leads_contact' => $this->input->post('seo_leads_contact'), 
    						'seo_leads_quantity' => $this->input->post('seo_leads_quantity'), 
    						'seo_leads_location' => $this->input->post('seo_leads_location'), 
    						'seo_formtype' => $this->input->post('seo_formtype'), 
    						'seo_leads_message' => $this->input->post('seo_leads_message'), 
    						'seo_leads_enqcode' => $enquiry_code,
    						'seo_created_on'=>$objDate->format('Y-m-d H:i:s'),
    						'domain_id' => $this->input->post('domain_id'),
    						'domain_name' => $this->input->post('domain_name'));
    						//$submit = $this->Home_model->productenquiry_submission($data);
    						// print_r($data);exit; 
    						$submit = $this->Home_model->emailform('seo_leads',$data);
    		                // echo count($submit); exit;
    		                if(count($submit) > 0){
                    			$to= $submit->seo_leads_emial;			
                    			$subject= $submit->domain_name." - Enquiry";    
                    			$message = "<!DOCTYPE html>
                    			<html>
                    			<head lang='en'>
                    			<meta charset='utf-8'>
                    			<meta name='viewport' content='width=device-width, initial-width=1.0'><title></title>
                    			</head>
                    			<body>
                    				<div class='gmail_quote'>
                    					<p>Hello <b>".$submit->seo_leads_name."</b>,<br><br>
                    						We thank you for expressing your interest in our company. Our Team will get back to you shortly.<br>
                    						<table>
                    						<tr><td>Name:</td><td>" .$submit->seo_leads_name. "</td></tr>
                    						<tr><td>Email:</td><td>" .$submit->seo_leads_emial. "</td></tr>
                    						<tr><td>Phone:</td><td>" .$submit->seo_leads_contact. "</td></tr>
                    						<tr><td>Domain:</td><td>" .$submit->domain_name. "</td></tr>
                    						<tr><td>Location:</td><td>" .$submit->seo_leads_location. "</td></tr>
                    						<tr><td>Quantity:</td><td>" .$submit->seo_leads_quantity. "</td></tr>
                    						<tr><td>Message:</td><td>" .$submit->seo_leads_message. "</td></tr>
                    						<tr><td>Ticket ID:</td><td>" .$submit->seo_leads_enqcode. "</td></tr>
                    						<tr>
                    						</table>
                    					</p>
                    					<p>
                    					<b>Thanks & Regards</b><br>
                    					Hetero HealthCare Limited.
                    					</p>
                    				</div>
                    			</body>
                    			</html>";
                    			//print_r($message);//exit;
                    			
                    			$TO_EMAIL=$submit->seo_leads_emial;
                    			$SUBJECT=$subject;
                    			$MESSAGE_BODY=$message;
                    			$TO_NAME=$submit->seo_leads_name; 
                    
                    			$postdata = http_build_query(
                    				array(
                    					'TO_EMAIL' => $TO_EMAIL,
                    					'SUBJECT'=> $SUBJECT,
                    					'MESSAGE_BODY'=> $MESSAGE_BODY,
                    					'TO_NAME'=> $TO_NAME
                    				)
                    			);
                    
                                // POST the data to an api
                                $url = 'http://services.heterohcl.com/SMTP_EMAIL/';
                                //$jsonresult = file_get_contents($url, false, $context);
                                //$result= json_decode($jsonresult, true);
                                //print_r($result);   
                                $this->curls($url, $postdata);
                                
                        	    //print_r($output);  
    	                        //exit;
                       
                    			$url = base_url()."success/".str_replace(' ', '-',$submit->domain_name)."-".$objDate->format('Y-m-d')."-".$submit->seo_leads_enqcode;
                    			redirect($url);
    
                        }
                        else{
                         $this->session->set_flashdata('error_msg', 'Error in submission');
                		 redirect('contact-us');
                        }
                
            }else{
                $this->session->set_flashdata('flashError', 'Sorry Google Recaptcha Unsuccessful!!');
                print_r('Sorry Google Recaptcha Unsuccessful!!'); exit;
            }
		}
    }

    //curls
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

    public function success() {
        $domains_page_id = 47;
        
        // SEO
		$data['seo'] = $this->Home_model->getMetadata($domains_page_id);
		// echo"<pre>";print_r($data);exit;
        $this->load->view('success',$data);
    }
    
    public function trigotab_blog(){
        $domains_page_id = 128;
		// Domain
		$where = array('domain_id'=>14);
		$data['domains']=$this->Home_model->getData('domains',$where);
		
		$where3 = array('domains_page_groups_id'=>1);
		$data['domains_page_groups']=$this->Home_model->getData('domains_page_groups',$where3);
		
		//$query = array('domain_id'=>2,'limit'=>3);
		//$data['ba_posts']=$this->Home_model->getBlogdata($query);
		
		// SEO
		$data['seo'] = $this->Home_model->getMetadata($domains_page_id);
		
		//echo '<pre>';print_r($data);exit;
		$this->load->view('blog',$data);
    }
    
    public function trigotab_benefitsoftrigotabinthefightagainststubborndiabete(){
        $domains_page_id = 129;
		// Domain
		$where = array('domain_id'=>14);
		$data['domains']=$this->Home_model->getData('domains',$where);
		
		$where3 = array('domains_page_groups_id'=>1);
		$data['domains_page_groups']=$this->Home_model->getData('domains_page_groups',$where3);
		
		//$query = array('domain_id'=>2,'limit'=>3);
		//$data['ba_posts']=$this->Home_model->getBlogdata($query);
		
		// SEO
		$data['seo'] = $this->Home_model->getMetadata($domains_page_id);
		
		//echo '<pre>';print_r($data);exit;
		$this->load->view('trigotab_blog_1',$data);
    }
    
    public function trigotab_combatingdiabeteswithnaturalremedies(){
        $domains_page_id = 130;
		// Domain
		$where = array('domain_id'=>14);
		$data['domains']=$this->Home_model->getData('domains',$where);
		
		$where3 = array('domains_page_groups_id'=>1);
		$data['domains_page_groups']=$this->Home_model->getData('domains_page_groups',$where3);
		
		//$query = array('domain_id'=>2,'limit'=>3);
		//$data['ba_posts']=$this->Home_model->getBlogdata($query);
		
		// SEO
		$data['seo'] = $this->Home_model->getMetadata($domains_page_id);
		
		//echo '<pre>';print_r($data);exit;
		$this->load->view('trigotab_blog_2',$data);
    }
    
    public function trigotab_covidinduceddiabetesandhowtrigotabcanhelp(){
        $domains_page_id = 131;
		// Domain
		$where = array('domain_id'=>14);
		$data['domains']=$this->Home_model->getData('domains',$where);
		
		$where3 = array('domains_page_groups_id'=>1);
		$data['domains_page_groups']=$this->Home_model->getData('domains_page_groups',$where3);
		
		//$query = array('domain_id'=>2,'limit'=>3);
		//$data['ba_posts']=$this->Home_model->getBlogdata($query);
		
		// SEO
		$data['seo'] = $this->Home_model->getMetadata($domains_page_id);
		
		//echo '<pre>';print_r($data);exit;
		$this->load->view('trigotab_blog_3',$data);
    }
    
    public function trigotab_fenugreekanddiabetesreversal(){
        $domains_page_id = 132;
		// Domain
		$where = array('domain_id'=>14);
		$data['domains']=$this->Home_model->getData('domains',$where);
		
		$where3 = array('domains_page_groups_id'=>1);
		$data['domains_page_groups']=$this->Home_model->getData('domains_page_groups',$where3);
		
		//$query = array('domain_id'=>2,'limit'=>3);
		//$data['ba_posts']=$this->Home_model->getBlogdata($query);
		
		// SEO
		$data['seo'] = $this->Home_model->getMetadata($domains_page_id);
		
		//echo '<pre>';print_r($data);exit;
		$this->load->view('trigotab_blog_4',$data);
    }
}
?>
