<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_Recargas extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
        $this->load->model("commissions_model","obj_commissions");
    }   
                
    public function index(){  
        
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
               "where" => "commissions.bonus_id = 2",
               "join" => array('customer, commissions.customer_id = customer.customer_id',
                                'bonus, commissions.bonus_id = bonus.bonus_id'),
                "order" => "commissions.date DESC"
                        );
           //GET DATA FROM CUSTOMER
           $obj_commissions= $this->obj_commissions->search($params);
           
           /// PAGINADO
            $modulos ='recargas'; 
            $seccion = 'Lista';        
            $link_modulo =  site_url().'dashboard/recargas'; 
            
            /// VISTA
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->set("obj_commissions",$obj_commissions);
            $this->tmp_mastercms->render("dashboard/recargas/recargas_list");
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $customer_id = $this->input->post("username");
        $amount = $this->input->post("amoun");
        
        if($customer_id != "" && $amount != 0){
                $data = array(
                        'customer_id' => $customer_id,
                        'bonus_id' => 2,
                        'name' => "recargas",
                        'amount' => $amount,
                        'date' => date("Y-m-d H:i:s"),
                        'status_value' => 2,
                        'created_at' => date("Y-m-d H:i:s"),
                        'created_by' => $_SESSION['usercms']['user_id']
                );          
            //SAVE DATA IN TABLE    
            $this->obj_commissions->insert($data);
        }
            
        redirect(site_url()."dashboard/recargas");
    }
    
    public function active_customer(){
        //ACTIVE CUSTOMER
        if($this->input->is_ajax_request()){  
            
                $customer_id = $this->input->post("customer_id");
                if(count($customer_id) > 0){
                    $data = array(
                        'calification' => 1,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_customer->update($customer_id,$data);
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function buscar_customer(){
        //ACTIVE CUSTOMER
        if($this->input->is_ajax_request()){  
           //SELECT CUSTOMER_ID BY METHOD GET     
            $customer_id = trim($this->input->get("customer_id"));
                if(count($customer_id) > 0){
                   $params = array(
                        "select" =>"*",
                        "where" => "customer_id = $customer_id"
                        );
                   //GET DATA FROM CUSTOMER
                  $customer['$customer'] =  $this->obj_customer->get_search_row($params);
                }
                
                $data['message'] = "true";
                $data['print'] = $customer['$customer'] ;
                echo json_encode($data);            
        exit();
            }
    }
    
    
    public function load($obj_customer=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
//        
          
            //SELECT USERNAME
            $params = array("select" => "username,
                                        customer_id",
                            "where" => "status_value = 1");
            $obj_customer  = $this->obj_customer->search($params);   
            
            $modulos ='recargas'; 
            $seccion = 'Formulario';        
            $link_modulo =  site_url().'dashboard/'.$modulos; 

            $this->tmp_mastercms->set('obj_customer',$obj_customer);
            $this->tmp_mastercms->set('link_modulo',$link_modulo);
            $this->tmp_mastercms->set('modulos',$modulos);
            $this->tmp_mastercms->set('seccion',$seccion);
            $this->tmp_mastercms->render("dashboard/recargas/recargas_form");    
    }
    
    public function no_active_customer(){
            //NO ACTIVE CUSTOMER
        if($this->input->is_ajax_request()){   
            $customer_id = $this->input->post("customer_id");
                if(count($customer_id) > 0){
                    $data = array(
                        'calification' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_customer->update($customer_id,$data);
                }
                echo json_encode($data);            
        exit();
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