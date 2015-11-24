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
		$this->load->model('twitter/modelo_consultas');		
		$this->load->model('twitter/modelo_inicio');
		$this->load->database('twitter');
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
	                "seguidoresn" => $gobernadores['nacho']->seguidores,
	                "siguiendon" => $gobernadores['nacho']->siguiendo,
	                "tweetsn" => $gobernadores['nacho']->tweets,
	                "seguidoresj" => $gobernadores['jorge']->seguidores,
	                "siguiendoj" => $gobernadores['jorge']->siguiendo,
	                "tweetsj" => $gobernadores['jorge']->tweets,
	                "seguidoresl" => $gobernadores['locho']->seguidores,
	                "siguiendol" => $gobernadores['locho']->siguiendo,
	                "tweetsl" => $gobernadores['locho']->tweets,
	                "seguidoresm" => $gobernadores['martha']->seguidores,
	                "siguiendom" => $gobernadores['martha']->siguiendo,
	                "tweetsm" => $gobernadores['martha']->tweets,
	                'ultima_fecha' => $fecha,
	                'existe' => $existe,
	                "vtab" => $vtab
	            );
		$this->load->view('twitter/chars/char_gobernadores',$datos);
	}

	public function dip_federales()
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
	                "seguidoresjm" => $dip1['jose']->seguidores,
	                "siguiendojm" => $dip1['jose']->siguiendo,
	                "tweetsjm" => $dip1['jose']->tweets,
	                "seguidoresk" => $dip1['kike']->seguidores,
	                "siguiendok" => $dip1['kike']->siguiendo,
	                "tweetsk" => $dip1['kike']->tweets,
	                "seguidoresi" => $dip1['indira']->seguidores,
	                "siguiendoi" => $dip1['indira']->siguiendo,
	                "tweetsi" => $dip1['indira']->tweets,
	                "seguidoresn" => $dip2['norma']->seguidores,
	                "siguiendon" => $dip2['norma']->siguiendo,
	                "tweetsn" => $dip2['norma']->tweets,
	                "seguidoresj" => $dip2['juan']->seguidores,
	                "siguiendoj" => $dip2['juan']->siguiendo,
	                "tweetsj" => $dip2['juan']->tweets,
	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab
	            );
		$this->load->view('twitter/chars/char_dipFederales',$datos);
	}

	public function dip_locales()
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
	                "seguidoresh" => $resultado['hilda']->seguidores,
	                "siguiendoh" => $resultado['hilda']->siguiendo,
	                "tweetsh" => $resultado['hilda']->tweets,

	                "seguidores_rangel" => $resultado['rangel']->seguidores,
	                "siguiendo_rangel" => $resultado['rangel']->siguiendo,
	                "tweets_rangel" => $resultado['rangel']->tweets,

	                "seguidores_viviana" => $resultado['viviana']->seguidores,
	                "siguiendo_viviana" => $resultado['viviana']->siguiendo,
	                "tweets_viviana" => $resultado['viviana']->tweets,

	                "seguidores_crispin" => $resultado['crispin']->seguidores,
	                "siguiendo_crispin" => $resultado['crispin']->siguiendo,
	                "tweets_crispin" => $resultado['crispin']->tweets,

	                "seguidores_isis" => $seguidores_isis,
	                "siguiendo_isis" => $siguiendo_isis,
	                "tweets_isis" => $tweets_isis,

	                "seguidores_janeth" => $resultado['janeth']->seguidores,
	                "siguiendo_janeth" => $resultado['janeth']->siguiendo,
	                "tweets_janeth" => $resultado['janeth']->tweets,

	                "seguidores_juanita" => $resultado['juanita']->seguidores,
	                "siguiendo_juanita" => $resultado['juanita']->siguiendo,
	                "tweets_juanita" => $resultado['juanita']->tweets,

	                "seguidores_lupe" => $resultado['lupe']->seguidores,
	                "siguiendo_lupe" => $resultado['lupe']->siguiendo,
	                "tweets_lupe" => $resultado['lupe']->tweets,

	                "seguidores_octavio" => $resultado['octavio']->seguidores,
	                "siguiendo_octavio" => $resultado['octavio']->siguiendo,
	                "tweets_octavio" => $resultado['octavio']->tweets,

	                "seguidores_sara" => $resultado['sara']->seguidores,
	                "siguiendo_sara" => $resultado['sara']->siguiendo,
	                "tweets_sara" => $resultado['sara']->tweets,

	                "seguidores_joel" => $resultado['joel']->seguidores,
	                "siguiendo_joel" => $resultado['joel']->siguiendo,
	                "tweets_joel" => $resultado['joel']->tweets,

	                "seguidores_meyly" => $resultado['meyly']->seguidores,
	                "siguiendo_meyly" => $resultado['meyly']->siguiendo,
	                "tweets_meyly" => $resultado['meyly']->tweets,

	                "seguidores_hector" => $resultado['hector']->seguidores,
	                "siguiendo_hector" => $resultado['hector']->siguiendo,
	                "tweets_hector" => $resultado['hector']->tweets,

	                "seguidores_eusebio" => $resultado['eusebio']->seguidores,
	                "siguiendo_eusebio" => $resultado['eusebio']->siguiendo,
	                "tweets_eusebio" => $resultado['eusebio']->tweets,

	                "seguidores_mesina" => $resultado['mesina']->seguidores,
	                "siguiendo_mesina" => $resultado['mesina']->siguiendo,
	                "tweets_mesina" => $resultado['mesina']->tweets,

	                "seguidores_pinto" => $resultado['pinto']->seguidores,
	                "siguiendo_pinto" => $resultado['pinto']->siguiendo,
	                "tweets_pinto" => $resultado['pinto']->tweets,

	                "seguidores_armida" => $resultado['armida']->seguidores,
	                "siguiendo_armida" => $resultado['armida']->siguiendo,
	                "tweets_armida" => $resultado['armida']->tweets,

	                "seguidores_amary" => $resultado['amary']->seguidores,
	                "siguiendo_amary" => $resultado['amary']->siguiendo,
	                "tweets_amary" => $resultado['amary']->tweets,

	                "seguidores_sergio" => $resultado['sergio']->seguidores,
	                "siguiendo_sergio" => $resultado['sergio']->siguiendo,
	                "tweets_sergio" => $resultado['sergio']->tweets,

	                "seguidores_martha" => $resultado['martha']->seguidores,
	                "siguiendo_martha" => $resultado['martha']->siguiendo,
	                "tweets_martha" => $resultado['martha']->tweets,

	                "seguidores_felicitas" => $seguidores_felicitas,
	                "siguiendo_felicitas" => $siguiendo_felicitas,
	                "tweets_felicitas" => $tweets_felicitas,

	                "seguidores_santiago" => $resultado['santiago']->seguidores,
	                "siguiendo_santiago" => $resultado['santiago']->siguiendo,
	                "tweets_santiago" => $resultado['santiago']->tweets,

	                "seguidores_yadira" => $seguidores_yadira,
	                "siguiendo_yadira" => $siguiendo_yadira,
	                "tweets_yadira" => $tweets_yadira,

	                "seguidores_alma" => $seguidores_alma,
	                "siguiendo_alma" => $siguiendo_alma,
	                "tweets_alma" => $tweets_alma,

	                "seguidores_marthaS" => $seguidores_marthaS,
	                "siguiendo_marthaS" => $siguiendo_marthaS,
	                "tweets_marthaS" => $tweets_marthaS,

	                'fecha' => $fecha,
	                'existe' => $existe,
	                'vtab' => $vtab,
	                'ultima_fecha' => $ultima_fecha
	            );
		$this->load->view('twitter/chars/char_dipLocales',$datos);
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

		if($resultado['oscar']=='FALSO'){
			$seguidores_oscar=0;
			$siguiendo_oscar=0;
			$tweets_oscar=0;
		}
		else{
			$seguidores_oscar=$resultado['oscar']->seguidores;
			$siguiendo_oscar=$resultado['oscar']->siguiendo;
			$tweets_oscar=$resultado['oscar']->tweets;
		}	

		if($resultado['jaime']=='FALSO'){
			$seguidores_jaime=0;
			$siguiendo_jaime=0;
			$tweets_jaime=0;
		}
		else{
			$seguidores_jaime=$resultado['jaime']->seguidores;
			$siguiendo_jaime=$resultado['jaime']->siguiendo;
			$tweets_jaime=$resultado['jaime']->tweets;
		}

		if($resultado['ruben']=='FALSO'){
			$seguidores_ruben=0;
			$siguiendo_ruben=0;
			$tweets_ruben=0;
		}
		else{
			$seguidores_ruben=$resultado['ruben']->seguidores;
			$siguiendo_ruben=$resultado['ruben']->siguiendo;
			$tweets_ruben=$resultado['ruben']->tweets;
		}

		if($resultado['blancaU']=='FALSO'){
			$seguidores_blancaU=0;
			$siguiendo_blancaU=0;
			$tweets_blancaU=0;
		}
		else{
			$seguidores_blancaU=$resultado['blancaU']->seguidores;
			$siguiendo_blancaU=$resultado['blancaU']->siguiendo;
			$tweets_blancaU=$resultado['blancaU']->tweets;
		}	
		
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

	public function nube_dipFederales()
	{
		$mes = $this->input->post('mes');	
		$hashtags = $this->modelo_inicio->obtener_hashtags_dip_federales($mes);
		$datos = array(
	                "hashtags" => $hashtags,
	                "mes" => $mes
	            );
		$this->load->view('twitter/chars/char_nube',$datos);
	}

	public function nube_dipLocales()
	{
		$mes = $this->input->post('mes');	
		$hashtags = $this->modelo_inicio->obtener_hashtags_dip_locales($mes);
		$datos = array(
	                "hashtags" => $hashtags,
	                "mes" => $mes
	            );
		$this->load->view('twitter/chars/char_nubeDipLocales',$datos);
	}

	public function nube_Alcaldes()
	{
		$mes = $this->input->post('mes');	
		$hashtags = $this->modelo_inicio->obtener_hashtags_alcaldes($mes);
		$datos = array(
	                "hashtags" => $hashtags,
	                "mes" => $mes
	            );
		$this->load->view('twitter/chars/char_nubeDipLocales',$datos);
	}

	public function partidos_RangoFechas()
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
			$this->load->view('twitter/chars/char_partidosError',$datos);
		}
		if ($ExisteFechaInicio==2 or $ExisteFechaFin==2) {
			$existe = 0;
			$datos = array(
							"existe" => $existe,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"fechaInicioMayor" => $fechaInicioMayor
		            	  );
			$this->load->view('twitter/chars/char_partidosError',$datos);
		}
		if ($fechaInicioMayor!=1 and $existe!=0){			
			$cuentas = $this->modelo_consultas->obtener_cuenta_partidos_rango($fecha_inicio,$fecha_fin);	
			$datos = array(
							"pri" => $cuentas['pri'],
							"jips_2015" => $cuentas['jips_2015'],
							"JIPSColima" => $cuentas['JIPSColima'],
							"jipsvdea" => $cuentas['jipsvdea'],
							"MiSelfiecoNacho" => $cuentas['MiSelfiecoNacho'],
							"PANDColima" => $cuentas['PANDColima'],
							"cdepancolima" => $cuentas['cdepancolima'],
							"PRDcolima" => $cuentas['PRDcolima'],
							"MovCiudadanoCol" => $cuentas['MovCiudadanoCol'],
							"ColPartidoVerde" => $cuentas['ColPartidoVerde'],
							"PT_Colima" => $cuentas['PT_Colima'],
							"MorenaColima1" => $cuentas['MorenaColima1'],
							"fecha_inicio" => $fecha_inicio,
		                	"fecha_fin" => $fecha_fin,
		                	"vtab" => $vtab,
		                	"fechaInicioMayor" => $fechaInicioMayor,
		                	"existe" => $existe
		            	  );
			$this->load->view('twitter/chars/char_partidos',$datos);
		}				
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
			$this->load->view('twitter/chars/char_partidosError',$datos);
		}
		if ($ExisteFechaInicio==2 or $ExisteFechaFin==2) {
			$existe = 0;
			$datos = array(
							"existe" => $existe,
							"ultima_fecha" => $ultima_fecha,
							"vtab" => $vtab,
							"fechaInicioMayor" => $fechaInicioMayor
		            	  );
			$this->load->view('twitter/chars/char_partidosError',$datos);
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
			$this->load->view('twitter/chars/char_comoVamos',$datos);
		}
	}

	public function mapas()
	{		
		$armeria = $this->modelo_inicio->obtener_coordenadas('Armería');	

		$datos = array(
						"gobernadores_armeria" => $armeria['gobernadores'],
						"dipFederales_armeria" => $armeria['dipFederales'],
						"dipLocales_armeria" => $armeria['dipLocales'],
						"presidentes_armeria" => $armeria['presidentes']
	            	  );
		$this->load->view('twitter/maps/mapa_coordenadas',$datos);	
	}

	public function mapa_colima()
	{	
		$colima = $this->modelo_inicio->obtener_coordenadas('Colima'); 

		$datos = array(
						"gobernadores_colima" => $colima['gobernadores'],
						"dipFederales_colima" => $colima['dipFederales'],
						"dipLocales_colima" => $colima['dipLocales'],
						"presidentes_colima" => $colima['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_colima',$datos);	
	}
	public function mapa_comala()
	{	
		$comala = $this->modelo_inicio->obtener_coordenadas('Comala'); 

		$datos = array(
						"gobernadores_comala" => $comala['gobernadores'],
						"dipFederales_comala" => $comala['dipFederales'],
						"dipLocales_comala" => $comala['dipLocales'],
						"presidentes_comala" => $comala['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_comala',$datos);	
	}

	public function mapa_coqui()
	{	
		$coqui = $this->modelo_inicio->obtener_coordenadas('Coquimatlán');

		$datos = array(
						"gobernadores_coqui" => $coqui['gobernadores'],
						"dipFederales_coqui" => $coqui['dipFederales'],
						"dipLocales_coqui" => $coqui['dipLocales'],
						"presidentes_coqui" => $coqui['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_coqui',$datos);	
	}

	public function mapa_cuau()
	{	
		$cuau = $this->modelo_inicio->obtener_coordenadas('Cuauhtémoc');

		$datos = array(
						"gobernadores_cuau" => $cuau['gobernadores'],
						"dipFederales_cuau" => $cuau['dipFederales'],
						"dipLocales_cuau" => $cuau['dipLocales'],
						"presidentes_cuau" => $cuau['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_cuau',$datos);	
	}

	public function mapa_ixtlahuacan()
	{	
		$ixtlahuacan = $this->modelo_inicio->obtener_coordenadas('Ixtlahuacán');

		$datos = array(
						"gobernadores_ixtlahuacan" => $ixtlahuacan['gobernadores'],
						"dipFederales_ixtlahuacan" => $ixtlahuacan['dipFederales'],
						"dipLocales_ixtlahuacan" => $ixtlahuacan['dipLocales'],
						"presidentes_ixtlahuacan" => $ixtlahuacan['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_ixtlahuacan',$datos);	
	}

	public function mapa_manzanillo()
	{	
		$manzanillo = $this->modelo_inicio->obtener_coordenadas('Manzanillo');

		$datos = array(
						"gobernadores_manzanillo" => $manzanillo['gobernadores'],
						"dipFederales_manzanillo" => $manzanillo['dipFederales'],
						"dipLocales_manzanillo" => $manzanillo['dipLocales'],
						"presidentes_manzanillo" => $manzanillo['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_manzanillo',$datos);	
	}

	public function mapa_mina()
	{	
		$mina = $this->modelo_inicio->obtener_coordenadas('Minatitlán');

		$datos = array(
						"gobernadores_mina" => $mina['gobernadores'],
						"dipFederales_mina" => $mina['dipFederales'],
						"dipLocales_mina" => $mina['dipLocales'],
						"presidentes_mina" => $mina['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_mina',$datos);	
	}

	public function mapa_tecoman()
	{	
		$tecoman = $this->modelo_inicio->obtener_coordenadas('Tecomán');

		$datos = array(
						"gobernadores_tecoman" => $tecoman['gobernadores'],
						"dipFederales_tecoman" => $tecoman['dipFederales'],
						"dipLocales_tecoman" => $tecoman['dipLocales'],
						"presidentes_tecoman" => $tecoman['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_tecoman',$datos);	
	}

	public function mapa_villa()
	{	
		$villa = $this->modelo_inicio->obtener_coordenadas('Villa de Álvarez'); 

		$datos = array(
						"gobernadores_villa" => $villa['gobernadores'],
						"dipFederales_villa" => $villa['dipFederales'],
						"dipLocales_villa" => $villa['dipLocales'],
						"presidentes_villa" => $villa['presidentes']
	            	  );
		$this->load->view('twitter/chars/mapas/char_mapa_villa',$datos);	
	}
}