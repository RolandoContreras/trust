<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_wallet extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("commissions_model","obj_commissions");
        $this->load->model("customer_model","obj_customer");
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
         
         $params_customer = array(
                        "select" =>"customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.dni,
                                    customer.date_start,
                                    ",
                "where" => "customer.customer_id = $customer_id",
                );
           //GET DATA FROM CUSTOMER
        $obj_customer = $this->obj_customer->get_search_row($params_customer);  
         
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
                "limit" => "60");
           //GET DATA FROM CUSTOMER
        $obj_commissions= $this->obj_commissions->search($params);  
        
        //GET TOTAL AMOUNT
                $params_total = array(
                        "select" =>"sum(mandatory_account) as mandatory_account,
                                    sum(normal_account) as normal_account,
                                    (select sum(amount) FROM commissions WHERE status_value = 2 and customer_id = $customer_id) as balance,
                                    (select sum(mandatory_account) FROM commissions WHERE customer_id = $customer_id) as mandatory",
                         "where" => "commissions.customer_id = $customer_id and status_value = 2",
                    );
                
           $obj_data = $this->obj_commissions->get_search_row($params_total);              
        
           $mandatory_account = $obj_data->mandatory_account;
           $normal_account = $obj_data->normal_account;
           
           $obj_balance = $obj_data->balance;
           $obj_balance_disponible = $obj_data->balance - $mandatory_account;
           
           $obj_balance_disponible = number_format($obj_balance_disponible,2);
        
        //GET PRICE BTC
            $params_price_btc = array(
                    "select" =>"",
                     "where" => "otros_id = 1",
            );
                
           $obj_otros = $this->obj_otros->get_search_row($params_price_btc); 
           $price_btc = number_format($obj_otros->precio_btc,8);  
         
         //GET ALL AMOUNT IN MANDATOTY ACCOUNT  
         $mandatory = $obj_data->mandatory;
        
        $this->tmp_backoffice->set("obj_customer",$obj_customer);   
        $this->tmp_backoffice->set("price_btc",$price_btc);   
        $this->tmp_backoffice->set("obj_balance_disponible",$obj_balance_disponible); 
        $this->tmp_backoffice->set("obj_balance",$obj_balance);   
        $this->tmp_backoffice->set("normal_account",$normal_account);
        $this->tmp_backoffice->set("mandatory",$mandatory);
        $this->tmp_backoffice->set("obj_commissions",$obj_commissions);
        $this->tmp_backoffice->render("backoffice/b_wallet");
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
