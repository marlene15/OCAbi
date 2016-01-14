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
		$existe = 0;
		if($fecha_nueva >= '2015-12-01'){
			$ExisteFecha = $this->modelo_consultas->ExisteFecha($fecha_nueva);
		}
		else{
			$ExisteFecha = 2;
		}
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

	public function rango_comoVamos()
	{
		$this->load->library('fechas');
		$fecha_inicio = $this->input->post('fecha_inicio');		
		$fecha_inicio=$this->fechas->fecha_dd_mes_aaaa($fecha_inicio);		
		$ExisteFechaInicio = $this->modelo_consultas->ExisteFecha($fecha_inicio);

		$fecha_fin = $this->input->post('fecha_fin');
		$fecha_fin=$this->fechas->fecha_dd_mes_aaaa($fecha_fin);
		$ExisteFechaFin = $this->modelo_consultas->ExisteFecha($fecha_fin);
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();
		$ultima_fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha->ultima_fecha);
		$vtab = $this->input->post('vtab');

		$fechaInicioMayor = 0;
		$existe = 1;
		if ($fecha_inicio>$fecha_fin) {
			$fechaInicioMayor = 1;
			$datos = array(
							"fechaInicioMayor" => $fechaInicioMayor,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($ExisteFechaInicio==2 or $ExisteFechaFin==2) {
			$existe = 0;
			$datos = array(
							"existe" => $existe,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"fechaInicioMayor" => $fechaInicioMayor
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($fechaInicioMayor!=1 and $existe!=0){	
			$cuentas = $this->modelo_consultas->obtener_cuenta_comoVamos_rango($fecha_inicio,$fecha_fin);	
			$datos = array(
							"comoVamos" => $cuentas['comoVamos'],
							"fecha_inicio" => $fecha_inicio,
		                	"fecha_fin" => $fecha_fin,
		                	"vtab" => $vtab,
		                	"fechaInicioMayor" => $fechaInicioMayor,
		                	"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_comoVamos',$datos);
		}
	}

	public function rango_afmedios()
	{
		$this->load->library('fechas');
		$fecha_inicio = $this->input->post('fecha_inicio');		
		$fecha_inicio=$this->fechas->fecha_dd_mes_aaaa($fecha_inicio);		
		$ExisteFechaInicio = $this->modelo_consultas->ExisteFecha($fecha_inicio);

		$fecha_fin = $this->input->post('fecha_fin');
		$fecha_fin=$this->fechas->fecha_dd_mes_aaaa($fecha_fin);
		$ExisteFechaFin = $this->modelo_consultas->ExisteFecha($fecha_fin);
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();
		$ultima_fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha->ultima_fecha);
		$vtab = $this->input->post('vtab');

		$fechaInicioMayor = 0;
		$existe = 1;
		if ($fecha_inicio>$fecha_fin) {
			$fechaInicioMayor = 1;
			$datos = array(
							"fechaInicioMayor" => $fechaInicioMayor,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($ExisteFechaInicio==2 or $ExisteFechaFin==2) {
			$existe = 0;
			$datos = array(
							"existe" => $existe,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"fechaInicioMayor" => $fechaInicioMayor
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($fechaInicioMayor!=1 and $existe!=0){	
			$cuentas = $this->modelo_consultas->obtener_cuenta_afmedios_rango($fecha_inicio,$fecha_fin);	
			$datos = array(
							"afmedios" => $cuentas['afmedios'],
							"fecha_inicio" => $fecha_inicio,
		                	"fecha_fin" => $fecha_fin,
		                	"vtab" => $vtab,
		                	"fechaInicioMayor" => $fechaInicioMayor,
		                	"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_afmedios',$datos);
		}
	}

	public function rango_angel()
	{
		$this->load->library('fechas');
		$fecha_inicio = $this->input->post('fecha_inicio');		
		$fecha_inicio=$this->fechas->fecha_dd_mes_aaaa($fecha_inicio);		
		$ExisteFechaInicio = $this->modelo_consultas->ExisteFecha($fecha_inicio);

		$fecha_fin = $this->input->post('fecha_fin');
		$fecha_fin=$this->fechas->fecha_dd_mes_aaaa($fecha_fin);
		$ExisteFechaFin = $this->modelo_consultas->ExisteFecha($fecha_fin);
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();
		$ultima_fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha->ultima_fecha);
		$vtab = $this->input->post('vtab');

		$fechaInicioMayor = 0;
		$existe = 1;
		if ($fecha_inicio>$fecha_fin) {
			$fechaInicioMayor = 1;
			$datos = array(
							"fechaInicioMayor" => $fechaInicioMayor,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($ExisteFechaInicio==2 or $ExisteFechaFin==2) {
			$existe = 0;
			$datos = array(
							"existe" => $existe,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"fechaInicioMayor" => $fechaInicioMayor
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($fechaInicioMayor!=1 and $existe!=0){	
			$cuentas = $this->modelo_consultas->obtener_cuenta_angel_rango($fecha_inicio,$fecha_fin);	
			$datos = array(
							"angel" => $cuentas['angel'],
							"fecha_inicio" => $fecha_inicio,
		                	"fecha_fin" => $fecha_fin,
		                	"vtab" => $vtab,
		                	"fechaInicioMayor" => $fechaInicioMayor,
		                	"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_angel',$datos);
		}
	}

	public function rango_soyNachista()
	{
		$this->load->library('fechas');
		$fecha_inicio = $this->input->post('fecha_inicio');		
		$fecha_inicio=$this->fechas->fecha_dd_mes_aaaa($fecha_inicio);		
		$ExisteFechaInicio = $this->modelo_consultas->ExisteFecha($fecha_inicio);

		$fecha_fin = $this->input->post('fecha_fin');
		$fecha_fin=$this->fechas->fecha_dd_mes_aaaa($fecha_fin);
		$ExisteFechaFin = $this->modelo_consultas->ExisteFecha($fecha_fin);
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();
		$ultima_fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha->ultima_fecha);
		$vtab = $this->input->post('vtab');

		$fechaInicioMayor = 0;
		$existe = 1;
		if ($fecha_inicio>$fecha_fin) {
			$fechaInicioMayor = 1;
			$datos = array(
							"fechaInicioMayor" => $fechaInicioMayor,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($ExisteFechaInicio==2 or $ExisteFechaFin==2) {
			$existe = 0;
			$datos = array(
							"existe" => $existe,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"fechaInicioMayor" => $fechaInicioMayor
		            	  );
			$this->load->view('facebook/chars/char_partidosError',$datos);
		}
		if ($fechaInicioMayor!=1 and $existe!=0){	
			$cuentas = $this->modelo_consultas->obtener_cuenta_soyNachista_rango($fecha_inicio,$fecha_fin);	
			$datos = array(
							"soyNachista" => $cuentas['soyNachista'],
							"fecha_inicio" => $fecha_inicio,
		                	"fecha_fin" => $fecha_fin,
		                	"vtab" => $vtab,
		                	"fechaInicioMayor" => $fechaInicioMayor,
		                	"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_soyNachista',$datos);
		}
	}

	public function nube_gobernadores()
	{
		$mes = $this->input->post('mes');	
		$hashtags = $this->modelo_inicio->obtener_hashtags_gobernadores($mes);
		$datos = array(
	                "hashtags" => $hashtags,
	                "mes" => $mes
	            );
		$this->load->view('facebook/chars/char_nube',$datos);
	}
}