<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class b_comissions extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("otros_model","obj_otros");
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
         //GET CUSTOMER_ID $_SESSION   
         $customer_id = $_SESSION['customer']['customer_id'];
         
        //VERIFIRY GET SESSION    
         $this->get_session();
            $params = array(
                        "select" =>"customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.dni,
                                    commissions.amount,
                                    commissions.date,
                                    commissions.status_value,
                                    bonus.name as bonus",
               "join" => array('customer, commissions.customer_id = customer.customer_id',
                                'bonus, commissions.bonus_id = bonus.bonus_id'),
                "where" => "customer.customer_id = $customer_id",
                "order" => "commissions.date DESC",
                "limit" => "50");
           //GET DATA FROM CUSTOMER
        $obj_commissions= $this->obj_commissions->search($params);
        
        //GET PRICE BTC
            $params_price_btc = array(
                    "select" =>"",
                     "where" => "otros_id = 1",
            );
                
           $obj_otros = $this->obj_otros->get_search_row($params_price_btc); 
           $price_btc = number_format($obj_otros->precio_btc,8);  
           
            
        $this->tmp_backoffice->set("price_btc",$price_btc);
        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->render("backoffice/b_comissions");
	}

        public function consultar(){
        
        if($this->input->is_ajax_request()){   
            $bonus_id = trim($this->input->post('concepto'));
            $customer_id = $_SESSION['customer']['customer_id'];
            
                if(count($bonus_id) > 0){
                    
                     //SELECT ID FROM CUSTOMER
                            $params = array(
                        "select" =>"customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    commissions.amount,
                                    commissions.date,
                                    commissions.status_value,
                                    bonus.name as bonus",
                            "join" => array('customer, commissions.customer_id = customer.customer_id',
                                             'bonus, commissions.bonus_id = bonus.bonus_id'),
                             "where" => "customer.customer_id = $customer_id and bonus.bonus_id = $bonus_id",
                             "order" => "commissions.date DESC",
                             "limit" => "50");
    
                            //GET DATA FROM CUSTOMER
                            $commissions['commissions'] = $this->obj_commissions->search($params);  
                            
                            if(count($commissions['commissions']) > 0){
                                //SEND DATA
                                $data['message'] = "true";
                                $data['print'] =  $commissions['commissions'];
                            }else{
                                $data['message'] = "false";
                            }
                            
                }
                echo json_encode($data);            
        exit();
            }
    }
        
        public function get_session(){          
        if (isset($_SESSION['customer'])){
            if($_SESSION['customer']['logged_customer']=="TRUE" && $_SESSION['customer']['status']=='1'){               
                return true;
            }else{
                redirect(site_url().'home');
            }
        }else{
            redirect(site_url().'home');
        }
    }
}
