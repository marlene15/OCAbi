<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_consultas extends CI_Controller {

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
		$this->load->model('facebook/modelo_consultas');		
		$this->load->model('facebook/modelo_inicio');
		$this->load->database('facebook');
		$this->verificar_sesion();
	}
	public function verificar_sesion()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		

		if (!isset($is_logged_in) || $is_logged_in != TRUE) {
			redirect('login');
			die();
		}
	}

	public function gobernadores()
	{
		$this->load->library('fechas');
		//Colocar nuevo formato a la fecha para guardar en la base como date
		$fecha = $this->input->post('fecha');	
		$vtab = $this->input->post('vtab');
		$fecha_nueva="";
		if($fecha!=null)
		{
			$fecha_nueva=$this->fechas->fecha_dd_mes_aaaa($fecha);
		}
		else{
			$fecha_nueva='NULL';
		}
		$ExisteFecha = $this->modelo_consultas->ExisteFecha($fecha_nueva);
		$existe = 0;
		if ($ExisteFecha==1) 
		{ //Si existe la fecha consultada 
			$gobernadores = $this->modelo_consultas->obtener_cuenta_gobernadores($fecha_nueva); 
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente
			$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
			$ultima_fecha = $ultima_fecha->ultima_fecha;
			$gobernadores = $this->modelo_consultas->obtener_cuenta_gobernadores($ultima_fecha); 		
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}		
		$datos = array(
	                "megustaci" => $gobernadores['nacho']->Megusta,
	                "seguidoresci" => $gobernadores['nacho']->PersonasHablan,
	                
	                "megustacj" => $gobernadores['jorge']->Megusta,
	                "seguidorescj" => $gobernadores['jorge']->PersonasHablan,

	                "megustacm" => $gobernadores['martha']->Megusta,
	                "seguidorescm" => $gobernadores['martha']->PersonasHablan,
	                
	                "megustacl" => $gobernadores['locho']->Megusta,
	                "seguidorescl" => $gobernadores['locho']->PersonasHablan,	
	                
	                'ultima_fecha' => $fecha,
	                'existe' => $existe,
	                "vtab" => $vtab
	            );
		$this->load->view('facebook/chars/char_gobernadores',$datos);
	}
}