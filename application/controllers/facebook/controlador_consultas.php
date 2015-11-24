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

	                "megustacd" => $gobernadores['david']->Megusta,
	                "seguidorescd" => $gobernadores['david']->PersonasHablan,
	                
	                "megustacl" => $gobernadores['locho']->Megusta,
	                "seguidorescl" => $gobernadores['locho']->PersonasHablan,
	                
	                "megustacf" => $gobernadores['francisco']->Megusta,
	                "seguidorescf" => $gobernadores['francisco']->PersonasHablan,

	                "megustacg" => $gobernadores['gerardo']->Megusta,
	                "seguidorescg" => $gobernadores['gerardo']->PersonasHablan,

	                "megustacc" => $gobernadores['carlos']->Megusta,
	                "seguidorescc" => $gobernadores['carlos']->PersonasHablan,	
	                
	                'ultima_fecha' => $fecha,
	                'existe' => $existe,
	                "vtab" => $vtab
	            );
		$this->load->view('facebook/chars/char_gobernadores',$datos);
	}

	public function DFDistritoI()
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
			$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($fecha_nueva); 
			$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($fecha_nueva);
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente
			$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
			$ultima_fecha = $ultima_fecha->ultima_fecha;
			$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($ultima_fecha); 
			$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($ultima_fecha); 			
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}
		
		$datos = array(
	                "megustacj" => $dip1['josemanuel']->Megusta,
	                "seguidorescj" => $dip1['josemanuel']->PersonasHablan,
	                
	                "megustace" => $dip1['enriquerojas']->Megusta,
	                "seguidoresce" => $dip1['enriquerojas']->PersonasHablan,

	                "megustaci" => $dip1['indiravizcaino']->Megusta,
	                "seguidoresci" => $dip1['indiravizcaino']->PersonasHablan,

	                "megustacs" => $dip1['silviadias']->Megusta,
	                "seguidorescs" => $dip1['silviadias']->PersonasHablan,
	                
	                "megustaca" => $dip1['angelesmarquez']->Megusta,
	                "seguidoresca" => $dip1['angelesmarquez']->PersonasHablan,
	                
	                "megustacr" => $dip1['rosalinagarcia']->Megusta,
	                "seguidorescr" => $dip1['rosalinagarcia']->PersonasHablan,

	                "megustacc" => $dip1['claudiaibarra']->Megusta,
	                "seguidorescc" => $dip1['claudiaibarra']->PersonasHablan,

	                //Distrito II
	                "megustacn" => $dip2['normagalindo']->Megusta,
	                "seguidorescn" => $dip2['normagalindo']->PersonasHablan,			                

	                "megustacp" => $dip2['pedrofernandez']->Megusta,
	                "seguidorescp" => $dip2['pedrofernandez']->PersonasHablan,

	                "megustacev" => $dip2['eliasvalencia']->Megusta,
	                "seguidorescev" => $dip2['eliasvalencia']->PersonasHablan,	

	                "megustacju" => $dip2['juancarlos']->Megusta,
	                "seguidorescju" => $dip2['juancarlos']->PersonasHablan,		

	                "megustacm" => $dip2['marisamesina']->Megusta,
	                "seguidorescm" => $dip2['marisamesina']->PersonasHablan,							                					
	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab
	            );
		$this->load->view('facebook/chars/char_dipFederales',$datos);
	}

	public function CDLDISTRITOIALXVI()
	{
		$this->load->library('fechas');
		//Colocar nuevo formato a la fecha para guardar en la base como date
		$fecha = $this->input->post('fecha');	
		$vtab = $this->input->post('vtab');

		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;

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
			$resultado = $this->modelo_consultas->obtener_cuenta_dip_locales($fecha_nueva); 
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente			
			$resultado = $this->modelo_consultas->obtener_cuenta_dip_locales($ultima_fecha); 			
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}

		$ultima_fecha=$this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);

		if($resultado['isis']=='FALSO'){
			$seguidores_isis=0;
			$siguiendo_isis=0;
			$tweets_isis=0;
		}
		else{
			$seguidores_isis=$resultado['isis']->seguidores;
			$siguiendo_isis=$resultado['isis']->siguiendo;
			$tweets_isis=$resultado['isis']->tweets;
		}

		if($resultado['felicitas']=='FALSO'){
			$seguidores_felicitas=0;
			$siguiendo_felicitas=0;
			$tweets_felicitas=0;
		}
		else{
			$seguidores_felicitas=$resultado['felicitas']->seguidores;
			$siguiendo_felicitas=$resultado['felicitas']->siguiendo;
			$tweets_felicitas=$resultado['felicitas']->tweets;
		}
		
		if($resultado['yadira']=='FALSO'){
			$seguidores_yadira=0;
			$siguiendo_yadira=0;
			$tweets_yadira=0;
		}
		else{
			$seguidores_yadira=$resultado['yadira']->seguidores;
			$siguiendo_yadira=$resultado['yadira']->siguiendo;
			$tweets_yadira=$resultado['yadira']->tweets;
		}

		if($resultado['alma']=='FALSO'){
			$seguidores_alma=0;
			$siguiendo_alma=0;
			$tweets_alma=0;
		}
		else{
			$seguidores_alma=$resultado['alma']->seguidores;
			$siguiendo_alma=$resultado['alma']->siguiendo;
			$tweets_alma=$resultado['alma']->tweets;
		}

		if($resultado['marthaS']=='FALSO'){
			$seguidores_marthaS=0;
			$siguiendo_marthaS=0;
			$tweets_marthaS=0;
		}
		else{
			$seguidores_marthaS=$resultado['marthaS']->seguidores;
			$siguiendo_marthaS=$resultado['marthaS']->siguiendo;
			$tweets_marthaS=$resultado['marthaS']->tweets;
		}

		$datos = array(
	                //DISTRITO I
	                "megustac1" => $resultado['Hildaceballos']->Megusta,
	                "seguidoresc1" => $resultado['Hildaceballos']->PersonasHablan,
	                "megustac2" => $resultado['Josecardenas']->Megusta,
	                "seguidoresc2" => $resultado['Josecardenas']->PersonasHablan,
	                "megustac3" => $resultado['Leonardogutierrez']->Megusta,
	                "seguidoresc3" => $resultado['Leonardogutierrez']->PersonasHablan,

	                //DISTRITO II
	                "megustac4" => $resultado['nicolascontreras']->Megusta,
	                "seguidoresc4" => $resultado['nicolascontreras']->PersonasHablan,

	                "megustac5" => $resultado['guillermorangel']->Megusta,
	                "seguidoresc5" => $resultado['guillermorangel']->PersonasHablan,
	                
	                "megustac6" => $resultado['SandraRammirez']->Megusta,
	                "seguidoresc6" => $resultado['SandraRammirez']->PersonasHablan,

	                "megustac7" => $resultado['joseGarcia']->Megusta,
	                "seguidoresc7" => $resultado['joseGarcia']->PersonasHablan,

	                "megustac8" => $resultado['arturogarcia']->Megusta,
	                "seguidoresc8" => $resultado['arturogarcia']->PersonasHablan,

	                "megustac9" => $resultado['lilianarodriguez']->Megusta,
	                "seguidoresc9" => $resultado['lilianarodriguez']->PersonasHablan,

	                //DISTRITO III
	                "megustac10" => $resultado['crispinguerra']->Megusta,
	                "seguidoresc10" => $resultado['crispinguerra']->PersonasHablan,

	                "megustac11" => $resultado['almaarreola']->Megusta,
	                "seguidoresc11" => $resultado['almaarreola']->PersonasHablan,

	                "megustac12" => $resultado['marthafarias']->Megusta,
	                "seguidoresc12" => $resultado['marthafarias']->PersonasHablan,

	                "megustac13" => $resultado['isisvillasernor']->Megusta,
	                "seguidoresc13" => $resultado['isisvillasernor']->PersonasHablan,

	                "megustac14" => $resultado['octavioaguilar']->Megusta,
	                "seguidoresc14" => $resultado['octavioaguilar']->PersonasHablan,

	                "megustac15" => $resultado['patriciaperegrina']->Megusta,
	                "seguidoresc15" => $resultado['patriciaperegrina']->PersonasHablan,

	                "megustac16" => $resultado['gloriaarceo']->Megusta,
	                "seguidoresc16" => $resultado['gloriaarceo']->PersonasHablan,

	                //DISTRITO IV
	                "megustac17" => $resultado['janethpaz']->Megusta,
	                "seguidoresc17" => $resultado['janethpaz']->Megusta,

	                "megustac18" => $resultado['juanaandres']->PersonasHablan,
	                "seguidoresc18" => $resultado['juanaandres']->PersonasHablan,

	                "megustac19" => $resultado['sergioricardo']->Megusta,
	                "seguidoresc19" => $resultado['sergioricardo']->Megusta,

	                "megustac20" => $resultado['andresorozco']->PersonasHablan,
	                "seguidoresc20" => $resultado['andresorozco']->PersonasHablan,
	                
	                //DITRITO V
	                "megustac21" => $resultado['ramirotoscano']->Megusta,
	                "seguidoresc21" => $resultado['ramirotoscano']->PersonasHablan,

	                "megustac22" => $resultado['josebenavides']->Megusta,
	                "seguidoresc22" => $resultado['josebenavides']->PersonasHablan,

	                "megustac23" => $resultado['yulianaaguilar']->Megusta,
	                "seguidoresc23" => $resultado['yulianaaguilar']->PersonasHablan,

	                //DISTRITO VI
	                "megustac24" => $resultado['SandrayolandaRammirez']->Megusta,
	                "seguidoresc24" => $resultado['SandrayolandaRammirez']->PersonasHablan,

	                "megustac25" => $resultado['octaviotintos']->Megusta,
	                "seguidoresc25" => $resultado['octaviotintos']->PersonasHablan,
	                
	                "megustac26" => $resultado['sergiosilva']->Megusta,
	                "seguidoresc26" => $resultado['sergiosilva']->PersonasHablan,
	                
	                "megustac27" => $resultado['leticiamendoza']->Megusta,
	                "seguidoresc27" => $resultado['leticiamendoza']->PersonasHablan,

	                "megustac28" => $resultado['getzemaniibarra']->Megusta,
	                "seguidoresc28" => $resultado['getzemaniibarra']->PersonasHablan,
	                
	                //DISTRITO VII
	                "megustac29" => $resultado['franciscoceballo']->Megusta,
	                "seguidoresc29" => $resultado['franciscoceballo']->PersonasHablan,
	                
	                "megustac30" => $resultado['alfredohernandez']->Megusta,
	                "seguidoresc30" => $resultado['alfredohernandez']->PersonasHablan,

	                "megustac31" => $resultado['saracernas']->Megusta,
	                "seguidoresc31" => $resultado['saracernas']->PersonasHablan,
	                
	                "megustac32" => $resultado['jooelpadilla']->Megusta,
	                "seguidoresc32" => $resultado['jooelpadilla']->PersonasHablan,
	                
	                "megustac33" => $resultado['socorrobayardo']->Megusta,
	                "seguidoresc33" => $resultado['socorrobayardo']->PersonasHablan,

	                "megustac34" => $resultado['erendiraandrade']->Megusta,
	                "seguidoresc34" => $resultado['erendiraandrade']->PersonasHablan,
	                
	                //DISTRITO VIII
	                "megustac35" => $resultado['meylypastora']->Megusta,
	                "seguidoresc35" => $resultado['meylypastora']->PersonasHablan,
	                
	                "megustac36" => $resultado['hectormagana']->Megusta,
	                "seguidoresc36" => $resultado['hectormagana']->PersonasHablan,

	                "megustac37" => $resultado['alfredoherrera']->Megusta,
	                "seguidoresc37" => $resultado['alfredoherrera']->PersonasHablan,
	                
	                "megustac38" => $resultado['adelaidafernandez']->Megusta,
	                "seguidoresc38" => $resultado['adelaidafernandez']->PersonasHablan,

	                "megustac39" => $resultado['juanjuarez']->Megusta,
	                "seguidoresc39" => $resultado['juanjuarez']->PersonasHablan,

	                //DISTRITO IX
	                "megustac40" => $resultado['eusebiomesina']->Megusta,
	                "seguidoresc40" => $resultado['eusebiomesina']->PersonasHablan,

	                "megustac41" => $resultado['beatrizinsunza']->Megusta,
	                "seguidoresc41" => $resultado['beatrizinsunza']->PersonasHablan,

	                "megustac42" => $resultado['selenelopez']->Megusta,
	                "seguidoresc42" => $resultado['selenelopez']->PersonasHablan,

	                "megustac43" => $resultado['angelicaochoa']->Megusta,
	                "seguidoresc43" => $resultado['angelicaochoa']->PersonasHablan,
	                
	                "megustac44" => $resultado['mauriciobarreto']->Megusta,
	                "seguidoresc44" => $resultado['mauriciobarreto']->PersonasHablan,

	                //DISTRITO X
	                "megustac45" => $resultado['juanpinto']->Megusta,
	                "seguidoresc45" => $resultado['juanpinto']->PersonasHablan,

	                "megustac46" => $resultado['ricardosevilla']->Megusta,
	                "seguidoresc46" => $resultado['ricardosevilla']->PersonasHablan,
	                
	                "megustac47" => $resultado['raquelcardenas']->Megusta,
	                "seguidoresc47" => $resultado['raquelcardenas']->PersonasHablan,

	                "megustac48" => $resultado['marcorodarte']->Megusta,
	                "seguidoresc48" => $resultado['marcorodarte']->PersonasHablan,

	                "megustac49" => $resultado['salvadorjuarez']->Megusta,
	                "seguidoresc49" => $resultado['salvadorjuarez']->PersonasHablan,		                

	                //DISTRITO XI
	                "megustac50" => $resultado['miguelgarcia']->Megusta,
	                "seguidoresc50" => $resultado['miguelgarcia']->PersonasHablan,		                

	                "megustac51" => $resultado['armidanunes']->Megusta,
	                "seguidoresc51" => $resultado['armidanunes']->PersonasHablan,		                

	                "megustac52" => $resultado['aldovega']->Megusta,
	                "seguidoresc52" => $resultado['aldovega']->PersonasHablan,		                

	                "megustac53" => $resultado['sebastianesparza']->Megusta,
	                "seguidoresc53" => $resultado['sebastianesparza']->PersonasHablan,		                

	                "megustac54" => $resultado['teresahernandez']->Megusta,
	                "seguidoresc54" => $resultado['teresahernandez']->PersonasHablan,	

	                "megustac55" => $resultado['dianatopete']->Megusta,
	                "seguidoresc55" => $resultado['dianatopete']->PersonasHablan,		                

	                //DISTRITO XII
	                "megustac56" => $resultado['marthasosa']->Megusta,
	                "seguidoresc56" => $resultado['marthasosa']->PersonasHablan,		                

	                "megustac57" => $resultado['rosarioyeme']->Megusta,
	                "seguidoresc57" => $resultado['rosarioyeme']->PersonasHablan,		                

	                "megustac58" => $resultado['noraayala']->Megusta,
	                "seguidoresc58" => $resultado['noraayala']->PersonasHablan,	

	                "megustac59" => $resultado['sarahinoriega']->Megusta,
	                "seguidoresc59" => $resultado['sarahinoriega']->PersonasHablan,		                

	                //DISTRITO XIII	
	                "megustac60" => $resultado['sergiosanchez']->Megusta,
	                "seguidoresc60" => $resultado['sergiosanchez']->PersonasHablan,		                

	                "megustac61" => $resultado['carlosvilla']->Megusta,
	                "seguidoresc61" => $resultado['carlosvilla']->PersonasHablan,		                

	                //DISTRITO XIV
	                "megustac62" => $resultado['luisayala']->Megusta,
	                "seguidoresc62" => $resultado['luisayala']->PersonasHablan,	

	                "megustac63" => $resultado['lilafigueroa']->Megusta,
	                "seguidoresc63" => $resultado['lilafigueroa']->PersonasHablan,

	                "megustac64" => $resultado['marthameza']->Megusta,
	                "seguidoresc64" => $resultado['marthameza']->PersonasHablan,	

	                "megustac65" => $resultado['veronicatorres']->Megusta,
	                "seguidoresc65" => $resultado['veronicatorres']->PersonasHablan,

	                "megustac66" => $resultado['gustavorerenteria']->Megusta,
	                "seguidoresc66" => $resultado['gustavorerenteria']->PersonasHablan,	

	                "megustac67" => $resultado['josefinaroblada']->Megusta,
	                "seguidoresc67" => $resultado['josefinaroblada']->PersonasHablan,

	                "megustac68" => $resultado['eliasnunez']->Megusta,
	                "seguidoresc68" => $resultado['eliasnunez']->PersonasHablan,	

	                //DISTRITO XV
	                "megustac69" => $resultado['felicitaspena']->Megusta,
	                "seguidoresc69" => $resultado['felicitaspena']->PersonasHablan,

					"megustac70" => $resultado['hildamoreno']->Megusta,
	                "seguidoresc70" => $resultado['hildamoreno']->PersonasHablan,

	                "megustac71" => $resultado['almarincon']->Megusta,
	                "seguidoresc71" => $resultado['almarincon']->PersonasHablan,		                		                		                		                		                	                		                

	                //DISTRITO XVI
					"megustac72" => $resultado['santiagochavez']->Megusta,
	                "seguidoresc72" => $resultado['santiagochavez']->PersonasHablan,

	                "megustac73" => $resultado['judithgodinez']->Megusta,
	                "seguidoresc73" => $resultado['judithgodinez']->PersonasHablan,

	                "megustac74" => $resultado['sergiomendoza']->Megusta,
	                "seguidoresc74" => $resultado['sergiomendoza']->PersonasHablan,

	                "megustac75" => $resultado['angelesrodriguez']->Megusta,
	                "seguidoresc75" => $resultado['angelesrodriguez']->PersonasHablan,

	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab,
	                'ultima_fecha' => $fecha
	            );
		$this->load->view('facebook/chars/char_dipLocales',$datos);
	}

	public function alcaldias()
	{
		$this->load->library('fechas');
		//Colocar nuevo formato a la fecha para guardar en la base como date
		$fecha = $this->input->post('fecha');	
		$vtab = $this->input->post('vtab');

		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
		$ultima_fecha = $ultima_fecha->ultima_fecha;

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
			$resultado = $this->modelo_consultas->obtener_cuenta_alcaldias($fecha_nueva); 
			$existe = 1;
		}
		else
		{//Si no existe la fecha consultada se cargan los datos de la ultima fecha existente			
			$resultado = $this->modelo_consultas->obtener_cuenta_alcaldias($ultima_fecha); 			
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			$existe = 2;
		}

		$ultima_fecha=$this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);

		$datos = array(
	                "seguidoresh" => $resultado['hector']->seguidores,
	                "siguiendoh" => $resultado['hector']->siguiendo,
	                "tweetsh" => $resultado['hector']->tweets,

	                "seguidoresma" => $resultado['maria']->seguidores,
	                "siguiendoma" => $resultado['maria']->siguiendo,
	                "tweetsma" => $resultado['maria']->tweets,

	                "seguidoreses" => $resultado['esmeralda']->seguidores,
	                "siguiendoes" => $resultado['esmeralda']->siguiendo,
	                "tweetses" => $resultado['esmeralda']->tweets,

	                "seguidoresp" => $resultado['pico']->seguidores,
	                "siguiendop" => $resultado['pico']->siguiendo,
	                "tweetsp" => $resultado['pico']->tweets,

	                "seguidoresmarc" => $resultado['marcos']->seguidores,
	                "siguiendomarc" => $resultado['marcos']->siguiendo,
	                "tweetsmarc" => $resultado['marcos']->tweets,

	                "seguidores_yulenny" => $resultado['yulenny']->seguidores,
	                "siguiendo_yulenny" => $resultado['yulenny']->siguiendo,
	                "tweets_yulenny" => $resultado['yulenny']->tweets,

	                "seguidores_oswy" => $resultado['oswy']->seguidores,
	                "siguiendo_oswy" => $resultado['oswy']->siguiendo,
	                "tweets_oswy" => $resultado['oswy']->tweets,

	                "seguidores_salomon" => $resultado['salomon']->seguidores,
	                "siguiendo_salomon" => $resultado['salomon']->siguiendo,
	                "tweets_salomon" => $resultado['salomon']->tweets,

	                "seguidores_mario" => $resultado['mario']->seguidores,
	                "siguiendo_mario" => $resultado['mario']->siguiendo,
	                "tweets_mario" => $resultado['mario']->tweets,

	                "seguidores_arturo" => $resultado['arturo']->seguidores,
	                "siguiendo_arturo" => $resultado['arturo']->siguiendo,
	                "tweets_arturo" => $resultado['arturo']->tweets,

	                "seguidores_blanca" => $resultado['blanca']->seguidores,
	                "siguiendo_blanca" => $resultado['blanca']->siguiendo,
	                "tweets_blanca" => $resultado['blanca']->tweets,

	                "seguidores_manuel" => $resultado['manuel']->seguidores,
	                "siguiendo_manuel" => $resultado['manuel']->siguiendo,
	                "tweets_manuel" => $resultado['manuel']->tweets,

	                "seguidores_esperanza" => $resultado['esperanza']->seguidores,
	                "siguiendo_esperanza" => $resultado['esperanza']->siguiendo,
	                "tweets_esperanza" => $resultado['esperanza']->tweets,

	                "seguidores_hiram" => $resultado['hiram']->seguidores,
	                "siguiendo_hiram" => $resultado['hiram']->siguiendo,
	                "tweets_hiram" => $resultado['hiram']->tweets,

	                "seguidores_oscar" => $seguidores_oscar,
	                "siguiendo_oscar" => $siguiendo_oscar,
	                "tweets_oscar" => $tweets_oscar,

	                "seguidores_jaime" => $seguidores_jaime,
	                "siguiendo_jaime" => $siguiendo_jaime,
	                "tweets_jaime" => $tweets_jaime,

	                "seguidores_ruben" => $seguidores_ruben,
	                "siguiendo_ruben" => $siguiendo_ruben,
	                "tweets_ruben" => $tweets_ruben,

	                "seguidores_blancaU" => $seguidores_blancaU,
	                "siguiendo_blancaU" => $siguiendo_blancaU,
	                "tweets_blancaU" => $tweets_blancaU,	                

	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab,
	                'ultima_fecha' => $ultima_fecha
	            );
		$this->load->view('twitter/chars/char_Alcaldias',$datos);	
	}

	public function nube_gobernadores()
	{
		$mes = $this->input->post('mes');	
		$hashtags = $this->modelo_inicio->obtener_hashtags_gobernadores($mes);
		$datos = array(
	                "hashtags" => $hashtags,
	                "mes" => $mes
	            );
		$this->load->view('twitter/chars/char_nube',$datos);
	}

	public function partidos_RangoFechas()
	{
		$this->load->library('fechas');
		$fecha_inicio = $this->input->post('fecha_inicio');
		$fecha_inicio=$this->fechas->fecha_dd_mes_aaaa($fecha_inicio);
		$ExisteFechaInicio = $this->modelo_consultas->ExisteFecha2($fecha_inicio);

		$fecha_fin = $this->input->post('fecha_fin');
		$fecha_fin=$this->fechas->fecha_dd_mes_aaaa($fecha_fin);
		$ExisteFechaFin = $this->modelo_consultas->ExisteFecha2($fecha_fin);
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha2();
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
			$cuentas = $this->modelo_consultas->obtener_cuenta_partidos_rango($fecha_inicio,$fecha_fin);	
			$datos = array(
							"pri" => $cuentas['pri'],
							"pan" => $cuentas['pan'],
							"pna" => $cuentas['pna'],
							"pv" => $cuentas['pv'],
							"prd" => $cuentas['prd'],
							"pt" => $cuentas['pt'],
							"pmc" => $cuentas['pmc'],
							"pm" => $cuentas['pm'],
							"pes" => $cuentas['pes'],
							"ph" => $cuentas['ph'],
							"fecha_inicio" => $fecha_inicio,
		                	"fecha_fin" => $fecha_fin,
		                	"vtab" => $vtab,
		                	"fechaInicioMayor" => $fechaInicioMayor,
		                	"existe" => $existe
		            	  );
			$this->load->view('facebook/chars/char_partidos',$datos);
		}				
	}
}