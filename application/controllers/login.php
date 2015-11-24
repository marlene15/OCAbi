<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
    {
     
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('login_model');
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->helper('security');
        }
       
        public function index()
        {
            if(!isset($_POST['username']))
            {
                $this->load->view('comunes/login');
            }
            else
            {
                if($_POST['registra']==1){
                    $this->load->view('comunes/registrarse');
                }
                else
                {
                    $this->form_validation->set_rules('username','Usuario','required|min_lenght[5]|max_lenght[20]');
                    $this->form_validation->set_rules('password','Password','required');
               
                    if($this->form_validation->run() == FALSE) //si no supera las reglas de validación se recarga la vista del formulario
                    {
                        $this->load->view('comunes/login');
                    }
                    else
                    {
                        $isValidLogin = $this->login_model->getLogin($_POST['username'],md5($_POST['password'])); //pasamos los valores al modelo para que compruebe si existe el usuario con ese password
                   
                        if($isValidLogin)
                        {
                            $sesion_data = array(
                                            'username' => $_POST['username'],
                                            'password' => md5($_POST['password']),
                                            'is_logged_in' => true
                                                );
                            $this->session->set_userdata($sesion_data);                     
                            $this->load->view('inicio');
                        }
                        else
                        {
                            // si es erroneo, devolvemos un mensaje de error
                            $this->load->view('comunes/login');
                        }
                    } 
                }
            
            } 
        }
             
        public function logout()
        {
             $this->session->sess_destroy();
             redirect('login');
        }
       
    }
?>