<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recuperar extends CI_Controller {
    public function __construct() {
        parent::__construct();     
        $this->load->model('customer_model','obj_customer');
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
		$this->load->view('recuperar');
	}
        
        public function send_messages(){
            if($this->input->is_ajax_request()){ 
                //GET USERNAME
                $username = $this->input->post('username'); 
                
                $params = array(
                        "select" =>"first_name,
                                    username,
                                    last_name, 
                                    password, 
                                    email",
                            "where" => "username = '$username' and status_value = 1",
                            );
                //GET DATA FROM CUSTOMER
                $obj_customer= $this->obj_customer->get_search_row($params); 
                
                
                //validate background
                $this->form_validation->set_rules('username','username',"required|trim");
                $this->form_validation->set_message('required','Campo requerido %s');   

                
                if ($this->form_validation->run($this)== false){ 
                    $data['message'] = "false";
                    $data['print'] = "Complete todos los datos correctamente";
                }else{
                    if(count($obj_customer) > 0){
                        //GET EMAIL
                        $email = $obj_customer->email;
                        
                        // El mensaje
                        $mail = "Hola, $obj_customer->first_name $obj_customer->last_name los datos de tu cuenta son:\r\n Username: $obj_customer->username\r\n Contraseña: $obj_customer->password";

                        // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
                        $mensaje = wordwrap($mail, 70, "\r\n");
                        //Titulo
                        $titulo = "Recuperación de Contraseña - BITSHARE";
                        //cabecera
                        $headers = "MIME-Version: 1.0\r\n"; 
                        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                        //dirección del remitente 
                        $headers .= "From: Bitshare - Una solución para las personas < noreplay@yourbitshares.com >\r\n";
                        //Enviamos el mensaje a tu_dirección_email 
                        $bool = mail("$email",$titulo,$mensaje,$headers);
                        if($bool){
                            $data['print'] = "Se le envio un mensaje al correo electrónico registrado";
                            $data['message'] = "true";  
                        }else{
                            $data['print'] = "El mensaje no se pudo enviar por un error desconocido";
                            $data['message'] = "false"; 
                        }
                    }else{
                            $data['print'] = "El usuario ingresado no esta registrado";
                            $data['message'] = "false";
                    }
                }         
                echo json_encode($data);  
                exit();      
            }
        }   
}
