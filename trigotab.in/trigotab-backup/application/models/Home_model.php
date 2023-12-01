<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Home_model extends CI_Model {
    var $CI;

    function __construct() {
        parent::__construct();
        $this->load->database('default',true);		
		error_reporting(E_ALL); ini_set('display_errors', 1); 
    }
	// Common Models //
	public function isDataExist($table, $where) {
        $this->db->trans_start();
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            if ($query->num_rows() > 0) {
                return true;
            } else {
                return FALSE;
            }
        }
    }
	public function insertData($table, $data) {
        $this->db->trans_start();
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
		// echo $this->db->last_query();
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            if ($insert_id > 0) {
                return $insert_id;
            } else {
                return FALSE;
            }
        }
    }
	
    public function updateData($table, $data, $where) {
        $this->db->trans_start();
        $this->db->where($where);
        $this->db->update($table, $data);
        $afftectedRows = $this->db->affected_rows();
        $this->db->trans_complete();
        // $str = $this->db->last_query();
        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            if ($afftectedRows > 0) {
                return true;
            } else {
                return true;
            }
        }
    }
    public function deleteData($table, $pkey) {
        $this->db->trans_start();
        $this->db->delete($table, $pkey);
        $delete_rows = $this->db->affected_rows();
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            if ($delete_rows > 0) {
                return $delete_rows;
            } else {
                return false;
            }
        }
    }
	public function getData($table,$where) {
        $this->db->trans_start();
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
		// echo $this->db->last_query();
        $data = $query->result_array();
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            if ($query->num_rows() >= 1) {
                return $data;
            } else {
                return FALSE;
            }
        }
    }
    public function AdgetData($db, $table, $getdata, $where, $limit, $colum, $order, $distinct) {
        $this->$db->trans_start();
        if (empty($distinct)){} else{$this->$db->distinct();}        
        $this->$db->select($getdata);
        $this->$db->from($table);
        if (empty($where)){} else{$this->$db->where($where);}
        if (empty($limit)){} else{$this->$db->limit($limit);}
        if (empty($colum) && empty($order)){} else{$this->$db->order_by($colum, $order);}
        $query = $this->$db->get();
		//echo $this->$db->last_query(); exit;
        $data = $query->result_array();
		$this->$db->trans_complete();
        if ($this->$db->trans_status() === FALSE) {
            return FALSE;
        } else {
            if ($query->num_rows() >= 1) {
                return $data;
            } else {
                return FALSE;
            }
        }
    }
	public function getDataNoWhere($table) {
        $this->db->trans_start();
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
		// echo $this->db->last_query();
        $data = $query->result_array();
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            if ($query->num_rows() >= 1) {
                return $data;
            } else {
                return FALSE;
            }
        }
    }
	public function getDataWithLimit($table,$where,$limit) {
        $this->db->trans_start();
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where)->limit($limit);
        $query = $this->db->get();
		// echo $this->db->last_query();
        $data = $query->result_array();
		$this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            return FALSE;
        } else {
            if ($query->num_rows() >= 1) {
                return $data;
            } else {
                return FALSE;
            }
        }
    }
	
	// APP VERSION
    public function getAppversion() {
        $this->db->select('APPVERSION,DIVISION');
        $this->db->from('_appversion');
        $this->db->where('STATUS', 1001);
        $results = $this->db->get()->result();
        return $results;		
    }
	
	// SEND SMS
	public function send_sms($mobile,$message){
		$key = "xcX1hfrrMkCD3Eu7bq6F5w";
		$senderid = "HETERO";
		$channel = 2;
		$DCS = 0;
		$flashsms = 0;
		$number = $mobile;
		$message = $message;
		$route = 1;
		$url = 'http://login.smsgatewayhub.com/api/mt/SendSMS?APIKey='.$key.'&senderid='.$senderid.'&channel='.$channel.'&DCS='.$number.'&flashsms='.$flashsms.'&number='.$number.'&text='.$message.'&route='.$route.';';
		// Simple call to remote URL
		$url = str_replace(" ", '%20', $url);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		// echo "<pre>";print_r($url);
		$sms_output = curl_exec($ch);
		return $sms_output;
		
	}
	
	// VALIDATE OTP
	public function OtpValidation($data){
		$this->db->select('OTPCODE,MOBILENUMBER,EMPLOYEEID,TIME(SENTON)OTPSENTON');
		$this->db->select('DATE_ADD(TIME(NOW()),INTERVAL 10 MINUTE)AS ADDEDTIME');
		$this->db->select('IF(DATE_ADD(TIME(NOW()),INTERVAL 10 MINUTE)>=TIME(SENTON),"1001","1002")VALIDATION');
		$this->db->from('_otplog ');	
		$this->db->where('EMPLOYEEID',$data['EMPLOYEEID']);
		$this->db->where('OTPCODE',$data['OTPCODE']);
		$result = $this->db->get();
		// echo $this->db->last_query();
        if ($result->num_rows() >= 1) {
			$result = $result->result();
			return $result;
		}else{
			return array();
		}
		
	}
	// Email Form
	public function emailform($table, $data) {
		
        if (!empty($data)){
			//print_r($data);exit;
            $this->db->insert($table, $data);
            $id = $this->db->insert_id();
            $q = $this->db->get_where($table, array('seo_leads_id' => $id));
            return $q->row();
        }else{
        return 0;
		}
    }
	// End Common Models //

	public function getBlogdata($data){
		
		$this->db->select('*');
		$this->db->from('ba_posts as A');
		$this->db->join('domains_app_routes as B','A.domains_page_id = B.domains_page_id','LEFT');
		//$this->db->join('seo as C','A.domains_page_id = C.domains_page_id','LEFT');
		$this->db->where('A.domain_id',$data['domain_id']);
		// $this->db->where('A.ba_posts_status',0);
		// $this->db->limit($data['limit']);
		$result = $this->db->get();
		// echo $this->db->last_query();
        if ($result->num_rows() >= 1) {
			$result = $result->result_array();
			return $result;
		}else{
			return array();
		}
		
		
	}
	public function getBlogdetails($data){		
		$this->db->select('*');
		$this->db->from('ba_posts as A');
		$this->db->join('domains_app_routes as B','A.domains_page_id = B.domains_page_id','LEFT');
		$this->db->join('seo as C','A.domains_page_id = C.domains_page_id','LEFT');
		$this->db->where('A.ba_posts_id',$data['ba_posts_id']);
		$result = $this->db->get();
		// echo $this->db->last_query();
        if ($result->num_rows() >= 1) {
			$result = $result->result_array();
			return $result;
		}else{
			return array();
		}
		
		
	}
	
	public function getMetadata($domains_page_id) {
        $this->db->select('*');
        $this->db->from('domains_pages AS A');
        $this->db->join('domains_page_groups AS B', 'A.domains_page_groups_id = B.domains_page_groups_id','LEFT');
        $this->db->where('domains_page_id', $domains_page_id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $result = $query->result();
			 // echo $this->db->last_query();
             // echo "<pre>"; print_r($result);
            switch ($result[0]->domains_page_groups_id) {
                case 1: //Default Pages
                    $this->db->select('*');
                    $this->db->from('seo AS A');
                    $this->db->where('A.domains_page_id', $result[0]->domains_page_id);
                    $result = $this->db->get()->result();
					// echo $this->db->last_query();
                    return $result;
                break;
				case 2: //Blog Pages
                    $this->db->select('*');
                    $this->db->from('seo AS A');
                    $this->db->where('A.domains_page_id', $result[0]->domains_page_id);
                    $result = $this->db->get()->result();
					// echo $this->db->last_query();
                    return $result;
                break;
				case 3: //Default Pages
                    $this->db->select('*');
                    $this->db->from('seo AS A');
                    $this->db->where('A.domains_page_id', $result[0]->domains_page_id);
                    $result = $this->db->get()->result();
					// echo $this->db->last_query();
                    return $result;
                break;
				
                default:
                break;
            }
        } else {
            return 0;
        }
    }
}
