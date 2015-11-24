<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('twitter/modelo_consultas');
		$this->load->database('twitter');
		$this->verificar_sesion();
	}
	public function index()
	{
		$this->load->view('inicio');
	}
	public function verificar_sesion()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if (!isset($is_logged_in) || $is_logged_in != TRUE) {
			redirect('login');
			die();
		}
	}

	public function otra(){
		$this->load->database('facebook');
		$this->load->model('facebook/modelo_inicio');
		return($this->modelo_inicio->obtener_cuenta_comoVamos());
	}
	//Como vamos Colima general
	public function comoVamos()
	{
		$resultado = $this->modelo_consultas->obtener_cuenta_comoVamos();	
		$resultado2 = $this->otra();
		$datos = array(
						"comoVamos" => $resultado['comoVamos'],
						"comoVamos2" => $resultado2['comoVamos2']
	            	  );
		$this->load->view('comoVamos',$datos);
	}
	//Para agregar los datos de minería, datos que no verán los usuarios comunes
	public function mineria_deDatos()
	{
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$password = md5($password);
		$verifica = $this->modelo_consultas->verificaUsuario($username,$password);

		if ($verifica==1)
		{
			$this->load->view('mineria_deDatos');
		}
		else
		{
			$this->load->view('mineria_error');		
		}
	}

	public function registra()
	{
		$this->load->view('comunes/registrarse');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */