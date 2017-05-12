<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_data extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("customer_model","obj_customer");
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
        
        //VERIFIRY GET SESSION    
        $this->get_session();
        /// VISTA
        $customer_id = $_SESSION['customer']['customer_id'];
        $params = array(
                        "select" =>"customer.customer_id,
                                    customer.parents_id,
                                    customer.username,
                                    customer.email,
                                    customer.created_at,
                                    customer.position_temporal,
                                    customer.phone,
                                    customer.password,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.dni,
                                    customer.birth_date,
                                    customer.address,
                                    customer.btc_address,
                                    customer.city,
                                    customer.bank_name,
                                    customer.titular_name,
                                    customer.bank_account,
                                    customer.status_value,
                                    paises.nombre as pais,
                                    regiones.nombre as region
                                    ",
                        "where" => "customer.customer_id = $customer_id and paises.id_idioma = 7 and regiones.id_idioma = 7",
                        "join" => array('paises, customer.country = paises.id',
                                        'regiones, customer.region = regiones.id')
                                        );

         $obj_customer = $this->obj_customer->get_search_row($params);      
         
         //SEND DATA TO VIEW  
         $this->tmp_backoffice->set("obj_customer",$obj_customer);
         $this->tmp_backoffice->render("backoffice/b_data");
	}
        
        public function update_data(){
            
         if($this->input->is_ajax_request()){   
            //SELECT ID FROM CUSTOMER
           $address = $this->input->post('address');
           $phone = $this->input->post('phone');
           $pierna = $this->input->post('pierna');
           $customer_id = $this->input->post('customer_id');

           //UPDATE DATA EN CUSTOMER TABLE
           $data = array(
                           'address' => $address,
                           'phone' => $phone,
                           'position_temporal' => $pierna,
                           'updated_by' => $customer_id,
                           'updated_at' => date("Y-m-d H:i:s")
                       ); 
                       $this->obj_customer->update($customer_id,$data);

                $data['message'] = "true";
                $data['print'] = "Datos cambiados con éxito";
                $data['url'] = "misdatos";
            echo json_encode($data); 
            }
    }
    
        public function update_password(){

             if($this->input->is_ajax_request()){   
                //SELECT ID FROM CUSTOMER
               $password = $this->input->post('password');
               $password2 = $this->input->post('password2');
               $customer_id = $this->input->post('customer_id');
               
               if($password != ""){
                            //UPDATE DATA EN CUSTOMER TABLE
                            $data = array(
                                            'password' => $password,
                                            'updated_by' => $customer_id,
                                            'updated_at' => date("Y-m-d H:i:s")
                                        ); 
                                        $this->obj_customer->update($customer_id,$data);

                                 $data['message'] = "true";
                                 $data['print'] = "La contraseña de cambio con exito";
                                 $data['url'] = "misdatos";
                             echo json_encode($data); 
                    
               }else{
                     $data['message'] = "false";
                     $data['print'] = "Las contraseñas no deben estan en blanco";
                     $data['url'] = "misdatos";
                     echo json_encode($data); 
               }
            }
        }
    
        public function update_btc_address(){
            
         if($this->input->is_ajax_request()){   
            //SELECT ID FROM CUSTOMER
           $btc_address = $this->input->post('btc');
           $customer_id = $this->input->post('customer_id');

           $param = array(
                        "select" =>"customer.customer_id,
                                    customer.username,
                                    customer.first_name,
                                    customer.last_name,
                                    customer.email,
                                    customer.btc_address,
                                    customer.status_value",
                        "where" => "customer.customer_id = $customer_id");
           $obj_customer = $this->obj_customer->get_search_row($param);
           //GET EMAIL
           $email = $obj_customer->email;
           
           //UPDATE DATA EN CUSTOMER TABLE
           $data = array(
                           'btc_address' => $btc_address,
                           'updated_by' => $customer_id,
                           'updated_at' => date("Y-m-d H:i:s")
                       ); 
                       $this->obj_customer->update($customer_id,$data);
            
                       // El mensaje
                $mail = "Hola, $obj_customer->first_name $obj_customer->last_name la dirección de su cuenta de bitcoin se cambio por: $btc_address";

                // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
                $mensaje = wordwrap($mail, 70, "\r\n");
                //Titulo
                $titulo = "Cambio de dirección BTC - BITSHARE";
                //cabecera
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                //dirección del remitente 
                $headers .= "From: Bitshare - Una solución para las personas < noreplay@yourbitshares.com >\r\n";
                //Enviamos el mensaje a tu_dirección_email 
                $bool = mail("$email",$titulo,$mensaje,$headers);
                       
                $data['message'] = "true";
                $data['print'] = "Datos cambiados con éxito";
                $data['url'] = "misdatos";
            echo json_encode($data); 
            }
    }
    
    public function update_bank(){
            
         if($this->input->is_ajax_request()){   
            //SELECT ID FROM CUSTOMER
           $customer_id = $this->input->post('customer_id');
           $bank_name = $this->input->post('bank_name');
           $titular_name = $this->input->post('titular_name');
           $bank_account = $this->input->post('bank_account');
           
           //UPDATE DATA EN CUSTOMER TABLE
           if($customer_id != ""){
                     $data = array(
                           'bank_name' => $bank_name,
                           'titular_name' => $titular_name,
                           'bank_account' => $bank_account,
                           'updated_by' => $customer_id,
                           'updated_at' => date("Y-m-d H:i:s")
                       ); 
                       $this->obj_customer->update($customer_id,$data);
           }
                       
            $data['message'] = "true";
            $data['print'] = "Datos guardos con éxito";
            $data['url'] = "misdatos";
            echo json_encode($data); 
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
