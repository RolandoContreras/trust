<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_pay_dialy extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
    }   
                
    public function index(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"commissions.date,
                                    commissions.status_value,
                                    bonus.name as bonus",
                "where" =>"bonus.bonus_id = 3 and commissions.status_value = 2",
               "join" => array('customer, commissions.customer_id = customer.customer_id',
                                'bonus, commissions.bonus_id = bonus.bonus_id'),
                "group" =>  "commissions.date, commissions.status_value, bonus.name",
                "order" => "commissions.date DESC");
           //GET DATA FROM CUSTOMER
           $obj_commissions= $this->obj_commissions->search($params);
      
           /// PAGINADO
            $modulos ='pagos_diarios'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/pagos_diarios'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_commissions",$obj_commissions);
            $this->tmp_mastercms->render("dashboard/pay_dialy/pay_dialy");
    }
    
    public function hacer_pago(){
        //ACTIVE CUSTOMER
        if($this->input->is_ajax_request()){  
                //SET TIMEZONE AMERICA
                date_default_timezone_set('America/Lima');
                
                //GET TODAY DATE
                $today = date("Y-m-d");
                //SELECT PARAM
                $params = array(
                        "select" =>"customer.customer_id,
                                    customer.first_name,
                                    customer.username,
                                    customer.point_left,
                                    customer.point_rigth,
                                    customer.calification,
                                    customer.date_start,
                                    customer.date_end,
                                    customer.last_name,
                                    customer.franchise_id",
                "where" =>"customer.active = 1 and franchise.franchise_id in (1,2,3,4,5,7,8)",
               "join" => array('franchise, customer.franchise_id = franchise.franchise_id'),
                         );
                //GET DATA FROM CUSTOMER
                $obj_customer= $this->obj_customer->search($params);
                
                //CODE BINARY
                $this->binary($obj_customer);
                //END BINARY
              
                foreach ($obj_customer as $value) {
                    
                    if($value->date_end >= $today){
                        if($value->date_start >= '2017-01-10'){
                            
                            switch ($value->franchise_id) {
                            case 2:
                                $amount= 0.95;
                                break;
                            case 3:
                                $amount= 2.50;
                                break;
                            case 4:
                                $amount= 5.20;
                                break;
                            case 5:
                                $amount= 10.83;
                                break;
                            case 7:
                                $amount= 56.25;
                                break;
                            case 8:
                                $amount= 0.47;
                                break;
                            }
                            $data = array(
                                'customer_id' => $value->customer_id,
                                'bonus_id' => 3,
                                'name' => "Usufructo Diario",
                                'amount' => $amount,
                                'normal_account' => $amount,
                                'date' => date("Y-m-d H:i:s"),
                                'status_value' => 2,
                                'created_at' => date("Y-m-d H:i:s"),
                                'created_by' => $_SESSION['usercms']['user_id']
                                );
                            $this->obj_commissions->insert($data);
                            
                        }elseif($value->date_start < '2017-01-10'){
                            switch ($value->franchise_id) {
                            case 2:
                                $amount= 1.86;
                                break;
                            case 3:
                                $amount= 5.00;
                                break;
                            case 4:
                                $amount= 10.60;
                                break;
                            case 5:
                                $amount= 22.60;
                                break;
                            }
                            
                        $mandatory_account = $amount*0.3;
                        $normal_account = $amount*0.7;
                        
                        $data = array(
                            'customer_id' => $value->customer_id,
                            'bonus_id' => 3,
                            'name' => "Usufructo Diario",
                            'amount' => $amount,
                            'mandatory_account' => $mandatory_account,
                            'normal_account' => $normal_account,
                            'date' => date("Y-m-d H:i:s"),
                            'status_value' => 2,
                            'created_at' => date("Y-m-d H:i:s"),
                            'created_by' => $_SESSION['usercms']['user_id']
                        );
                        $this->obj_commissions->insert($data);
                     }
                } 
            }
                $data['message'] = "true";
                echo json_encode($data);            
        exit();
            }
    }
    
    public function binary($obj_customer){          
        
                foreach ($obj_customer as $value) {
                    //CONDITICION IF BE CALIFICATE AND THE POINT LEFT AND RIGTH TO BE MAIOR TO ZERO
                    if($value->calification == 1 && $value->point_left > 0 && $value->point_rigth > 0){
                        $customer_id = $value->customer_id;
                        $left = $value->point_left;
                        $rigth = $value->point_rigth;
                        
                        if($left > $rigth){
                           $maior = $left - $rigth;
                           //UPDATE DATA CUSTOMER            
                           $data = array(
                            'point_left' => $maior,
                            'point_rigth' => 0
                            ); 
                            $this->obj_customer->update($customer_id,$data);
                            
                            //INSERT DATA ON COMMISSION
                            $data_comission = array(
                                'customer_id' => $customer_id,
                                'bonus_id' => 4,
                                'name' => "Binario",
                                'amount' => $rigth,
                                'date' => date("Y-m-d H:i:s"),
                                'status_value' => 2,
                                'created_at' => date("Y-m-d H:i:s"),
                                'created_by' => $_SESSION['usercms']['user_id']
                                );
                            $this->obj_commissions->insert($data_comission);
                        }else{
                            $maior = $rigth - $left;
                            //UPDATE DATA CUSTOMER            
                           $data = array(
                            'point_rigth' => $maior,
                            'point_left' => 0
                            ); 
                            $this->obj_customer->update($customer_id,$data);
                            
                            //INSERT DATA ON COMMISSION
                            $data_comission = array(
                                'customer_id' => $customer_id,
                                'bonus_id' => 4,
                                'name' => "Binario",
                                'amount' => $left,
                                'date' => date("Y-m-d H:i:s"),
                                'status_value' => 2,
                                'created_at' => date("Y-m-d H:i:s"),
                                'created_by' => $_SESSION['usercms']['user_id']
                                );
                            $this->obj_commissions->insert($data_comission);
                        }
                    }
                }
    }
    
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>