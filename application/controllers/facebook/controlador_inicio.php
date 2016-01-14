<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controlador_inicio extends CI_Controller {

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
		$this->load->model('facebook/modelo_inicio');
		$this->load->model('facebook/modelo_consultas');
		$this->load->database('facebook');
		$this->verificar_sesion();
	}

	public function index()
	{		
		$consulta = $this->modelo_inicio->consulta();
		if($consulta != FALSE)
		{
			$data = array('partido' => $consulta->Partido, 'nombre' => $consulta->Nombre);
			$this->load->view('facebook/prueba',$data);
		}
	}
	public function verificar_sesion()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if (!isset($is_logged_in) || $is_logged_in != TRUE) {
			redirect('login');
			die();
		}
	}

//CANDIDATOS A GOBERNADOR
	public function gobernadores()
	{
		$this->load->library('fechas'); //Cargar la librería que convierte las fechas			
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();
		$ultima_fecha = $ultima_fecha->ultima_fecha;
		$ultima_fecha2 = $this->fechas->fecha_dd_mes_aaaa2($ultima_fecha);
		$gobernadores = $this->modelo_consultas->obtener_cuenta_gobernadores($ultima_fecha); 		
		$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
		
		$mes='11';
		$hashtags = $this->modelo_inicio->obtener_hashtags_gobernadores($mes);
		 //echo "a =".$ultima_fecha;
		 //print_r($gobernadores);
		 //echo "a2 =".$ultima_fecha2;
		$data = array(
			                "megustaci" => $gobernadores['nacho']->Megusta,
			                "seguidoresci" => $gobernadores['nacho']->PersonasHablan,
			                
			                "megustacj" => $gobernadores['jorge']->Megusta,
			                "seguidorescj" => $gobernadores['jorge']->PersonasHablan,

			                "megustacm" => $gobernadores['martha']->Megusta,
			                "seguidorescm" => $gobernadores['martha']->PersonasHablan,

			                "megustacl" => $gobernadores['locho']->Megusta,
			                "seguidorescl" => $gobernadores['locho']->PersonasHablan,			                

			                'ultima_fecha' => $fecha,
			                'hashtags' => $hashtags
			            );
			$this->load->view('facebook/gobernador',$data);
	}

	//Valoracion de comentarios para gobernador
	public function valoracion_gobernadores()
	{
		$nacho = $this->modelo_inicio->valoracion_nacho();
		$jorge = $this->modelo_inicio->valoracion_jorge();
		$martha = $this->modelo_inicio->valoracion_martha();
		$locho = $this->modelo_inicio->valoracion_locho();
		
		$datos = array(
					  'nachoP' => $nacho['positivos'],
					  'nachoNe' => $nacho['negativos'],
					  'nachoN' => $nacho['neutros'],
					  'totalN' => $nacho['total'],
					  
					  'jorgeP' => $jorge['positivos'],
					  'jorgeNe' => $jorge['negativos'],
					  'jorgeN' => $jorge['neutros'],
					  'totalJ' => $jorge['total'],
					  
					  'marthaP' => $martha['positivos'],
					  'marthaNE' => $martha['negativos'],
					  'marthaN' => $martha['neutros'],
					  'totalM' => $martha['total'],

					  'lochoP' => $locho['positivos'],
					  'lochoNe' => $locho['negativos'],
					  'lochoN' => $locho['neutros'],
					  'totalL' => $locho['total']
					  
					  );
		$this->load->view('facebook/valoracionGobernadores',$datos);
	}

		//Como vamos Colima general
	public function comoVamos()
	{
		$resultado = $this->modelo_consultas->obtener_cuenta_comoVamos();	
		$datos = array(
						"comoVamos" => $resultado['comoVamos']
	            	  );
		$this->load->view('facebook/comoVamos',$datos);
	}

	//Afmedios
	public function afmedios()
	{
		$resultado = $this->modelo_consultas->obtener_cuenta_afmedios();	
		$datos = array(
						"afmedios" => $resultado['afmedios']
	            	  );
		$this->load->view('facebook/afmedios',$datos);
	}

	//Angel Guardian
	public function angel()
	{
		$resultado = $this->modelo_consultas->obtener_cuenta_angel();	
		$datos = array(
						"angel" => $resultado['angel']
	            	  );
		$this->load->view('facebook/angel',$datos);
	}

	//soyNachista
	public function soyNachista()
	{
		$resultado = $this->modelo_consultas->obtener_cuenta_soyNachista();	
		$datos = array(
						"soyNachista" => $resultado['soyNachista']
	            	  );
		$this->load->view('facebook/soyNachista',$datos);
	}
}