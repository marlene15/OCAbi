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
		
		$mes='03';
		// echo "a =".$ultima_fecha;
		// print_r($gobernadores);
		// echo "a2 =".$ultima_fecha2;
		$data = array(
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

			                'ultima_fecha' => $fecha
			            );
			$this->load->view('facebook/gobernador',$data);
	}

//CANDIDATO A DIPUTADOS FEDERAL DISTRITIO I y DITRITO II
	public function DFDistritoI()
	{
		$this->load->library('fechas'); //Cargar la librería que convierte las fechas			
		$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();
		$ultima_fecha = $ultima_fecha->ultima_fecha;
		$ultima_fecha2 = $this->fechas->fecha_dd_mes_aaaa2($ultima_fecha);
		$dip1 = $this->modelo_consultas->obtener_cuenta_dip_federales1($ultima_fecha); 		
		$dip2 = $this->modelo_consultas->obtener_cuenta_dip_federales2($ultima_fecha); 				
		$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);	
		$data = array(
			                //Distrito I
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

			                'ultima_fecha' => $fecha
			            );
			$this->load->view('facebook/diputadofederal',$data);								
	}

//CANDIDATO A PRESIDENTE MUNICIPAL (ALCALDIA)
	public function CAlcaldias()
		{
			//PRESIDENTE MUNICIPAL COLIMA
			$hectorinsua = $this->modelo_inicio->Obtener_CPMColimaHectorinsua();
			$oscarvaldovinos = $this->modelo_inicio->Obtener_CPMColimaOscarvaldovinos();
			$esmeraldacardenas = $this->modelo_inicio->Obtener_CPMColimaEsmeraldacardenas();
			$juanvazquez = $this->modelo_inicio->Obtener_CPMColimaJuanvazquez();
			$paulovelazquez = $this->modelo_inicio->Obtener_CPMColimaPaulovelazquez();
			$elenaabaroa = $this->modelo_inicio->Obtener_CPMColimaElenaabaroa();
			$brendamayoral = $this->modelo_inicio->Obtener_CPMColimaBrendamayoral();

			// //PRESIDENTE MUNICIPAL MANZANILLO
			$gabrielabenavides = $this->modelo_inicio->Obtener_CPMManzanilloGB();
			$franciscozepeda = $this->modelo_inicio->Obtener_CPMManzanilloFZ();
			$marthaleal = $this->modelo_inicio->Obtener_CPMManzanilloML();
			$marcosbarajas = $this->modelo_inicio->Obtener_CPMManzanilloMB();
			$rubenromo = $this->modelo_inicio->Obtener_CPMManzanilloRR();
			$hectorlara = $this->modelo_inicio->Obtener_CPMManzanilloHL();
			$victorgranados = $this->modelo_inicio->Obtener_CPMManzanilloVG();

			// //PRESIDENTE MUNICIPAL VILLA DE ALVAREZ
			$yulennycortes = $this->modelo_inicio->Obtener_CPMVilladeAlvarezYC();
			$oswydelgado = $this->modelo_inicio->Obtener_CPMVilladeAlvarezOD();
			$jaimesotelo = $this->modelo_inicio->Obtener_CPMVilladeAlvarezJS();
			$berenicegonzalez = $this->modelo_inicio->Obtener_CPMVilladeAlvarezBG();
			$hectoranaya = $this->modelo_inicio->Obtener_CPMVilladeAlvarezHA();
			$melchorarroyo = $this->modelo_inicio->Obtener_CPMVilladeAlvarezMA();
			$edgargonzalez = $this->modelo_inicio->Obtener_CPMVilladeAlvarezEG();			

			// //PRESIDENTE MUNICIPAL COMALA
			$salomonsalazar = $this->modelo_inicio->Obtener_CPMComalaSS();
			$mariopena = $this->modelo_inicio->Obtener_CPMComalaMP();
			$zenaidavicente = $this->modelo_inicio->Obtener_CPMComalaZV();
			$mariocarrillo = $this->modelo_inicio->Obtener_CPMComalaMC();

			// //PRESIDENTE MUNICIPAL TECOMAN
			$arturogarcia = $this->modelo_inicio->Obtener_CPMTecomanAG();
			$rubensantos = $this->modelo_inicio->Obtener_CPMTecomanRS();
			$angelvenegas = $this->modelo_inicio->Obtener_CPMTecomanAV();

			// //PRESIDENTE MUNICIPAL COQUIMATLAN
			$orlandolino = $this->modelo_inicio->Obtener_CPMCoquimatlanOL();
			$enriquepreciado = $this->modelo_inicio->Obtener_CPMCoquimatlanEP();
			$sergiopolanco = $this->modelo_inicio->Obtener_CPMCoquimatlanSP();

			// //PRESIDENTE MUNICIPAL CUAHUTEMOC
			$rafaelmendoza = $this->modelo_inicio->Obtener_CPMCuahutemocRM();
			$blancarocha = $this->modelo_inicio->Obtener_CPMCuahutemocBR();
			$anazamora = $this->modelo_inicio->Obtener_CPMCuahutemocAZ();
			$gilbertoascencio = $this->modelo_inicio->Obtener_CPMCuahutemocGA();
			$blancaursua = $this->modelo_inicio->Obtener_CPMCuahutemocBU();

			// //PRESIDENTE MUNICIPAL MINATITLAN
			$manuelpalacio = $this->modelo_inicio->Obtener_CPMMinatitlanMP();
			$berthapicasso = $this->modelo_inicio->Obtener_CPMMinatitlanBP();
			$normacampos = $this->modelo_inicio->Obtener_CPMMinatitlanNC();	

			// //PRESIDENTE MUNICIPAL IXTLAHUACAN
			$crispingutierrez = $this->modelo_inicio->Obtener_CPMIxtlahuacanCG();
			$hiramamador = $this->modelo_inicio->Obtener_CPMIxtlahuacanHA();
			$germanruelas = $this->modelo_inicio->Obtener_CPMIxtlahuacanGR();	
			$ignaciagutierrez = $this->modelo_inicio->Obtener_CPMIxtlahuacanIG();	


			// //PRESIDENTE MUNICIPAL ARMERIA
			$esperanzaalcaraz = $this->modelo_inicio->Obtener_CPMArmeriaEA();
			$miguelruelas = $this->modelo_inicio->Obtener_CPMArmeriaMR();
			$salvadorbueno = $this->modelo_inicio->Obtener_CPMArmeriaSB();


			if($hectorinsua != FALSE and $oscarvaldovinos != FALSE and $esmeraldacardenas != FALSE and $juanvazquez != FALSE and $paulovelazquez != FALSE and $elenaabaroa != FALSE and $brendamayoral != FALSE) 
				// and
				// $gabrielabenavides != FALSE and $franciscozepeda != FALSE and $marthaleal != FALSE and $marcosbarajas != FALSE and $rubenromo != FALSE and $hectorlara != FALSE and $victorgranados != FALSE and
				// $yulennycortes != FALSE and $oswydelgado != FALSE and $jaimesotelo != FALSE and $berenicegonzalez != FALSE and $hectoranaya != FALSE and $melchorarroyo != FALSE and $edgargonzalez != FALSE and
				// $salomonsalazar != FALSE and $mariopena != FALSE and $zenaidavicente != FALSE and $mariocarrillo != FALSE and $arturogarcia != FALSE and $rubensantos != FALSE and $angelvenegas != FALSE and 
				// $orlandolino != FALSE and $enriquepreciado != FALSE and $sergiopolanco != FALSE and $rafaelmendoza != FALSE and $blancarocha != FALSE and $anazamora != FALSE and $gilbertoascencio != FALSE and
				// $blancaursua != FALSE and $manuelpalacio != FALSE and $berthapicasso != FALSE and $normacampos != FALSE and $esperanzaalcaraz != FALSE and $miguelruelas != FALSE and $salvadorbueno != FALSE and
				// $crispingutierrez != FALSE and $hiramamador != FALSE and $germanruelas != FALSE and $ignaciagutierrez != FALSE)
			{
				$data = array(
							  //COLIMA
							  'megustac1' => $hectorinsua->Megusta, 'seguidoresc1' => $hectorinsua->PersonasHablan,
					          'megustac2' => $oscarvaldovinos->Megusta, 'seguidoresc2' => $oscarvaldovinos->PersonasHablan,
					          'megustac3' => $esmeraldacardenas->Megusta, 'seguidoresc3' => $esmeraldacardenas->PersonasHablan,
					          'megustac4' => $juanvazquez->Megusta, 'seguidoresc4' => $juanvazquez->PersonasHablan,
					          'megustac5' => $paulovelazquez->Megusta, 'seguidoresc5' => $paulovelazquez->PersonasHablan,
					          'megustac6' => $elenaabaroa->Megusta, 'seguidoresc6' => $elenaabaroa->PersonasHablan,
					          'megustac7' => $brendamayoral->Megusta, 'seguidoresc7' => $brendamayoral->PersonasHablan,
					          // //MANZANILLO	
					          'megustac8' => $gabrielabenavides->Megusta, 'seguidoresc8' => $gabrielabenavides->PersonasHablan,
					          // 'megustacn9' => $franciscozepeda->Megusta, 'seguidorescn9' => $franciscozepeda->PersonasHablan,
					          'megustac10' => $marthaleal->Megusta, 'seguidoresc10' => $marthaleal->PersonasHablan,
					          'megustac11' => $marcosbarajas->Megusta, 'seguidoresc11' => $marcosbarajas->PersonasHablan,
					          'megustac12' => $rubenromo->Megusta, 'seguidoresc12' => $rubenromo->PersonasHablan,
					          'megustac13' => $hectorlara->Megusta, 'seguidoresc13' => $hectorlara->PersonasHablan,					          					          
					          'megustac14' => $victorgranados->Megusta, 'seguidoresc14' => $victorgranados->PersonasHablan,
					          // //VILLA DE ALVAREZ
					          'megustac15' => $yulennycortes->Megusta, 'seguidoresc15' => $yulennycortes->PersonasHablan,
					          'megustac16' => $oswydelgado->Megusta, 'seguidoresc16' => $oswydelgado->PersonasHablan,					          
					          'megustac17' => $jaimesotelo->Megusta, 'seguidoresc17' => $jaimesotelo->PersonasHablan,
					          'megustac18' => $berenicegonzalez->Megusta, 'seguidoresc18' => $berenicegonzalez->PersonasHablan,
					          'megustac19' => $hectoranaya->Megusta, 'seguidoresc19' => $hectoranaya->PersonasHablan,
					          'megustac20' => $melchorarroyo->Megusta, 'seguidoresc20' => $melchorarroyo->PersonasHablan,
					          'megustac21' => $edgargonzalez->Megusta, 'seguidoresc21' => $edgargonzalez->PersonasHablan,
					          //COMALA
					          'megustac22' => $salomonsalazar->Megusta, 'seguidoresc22' => $salomonsalazar->PersonasHablan,
					          'megustac23' => $mariopena->Megusta, 'seguidoresc23' => $mariopena->PersonasHablan,					          
					          'megustac24' => $zenaidavicente->Megusta, 'seguidoresc24' => $zenaidavicente->PersonasHablan,
					          'megustac25' => $mariocarrillo->Megusta, 'seguidoresc25' => $mariocarrillo->PersonasHablan,
					          // //TECOMAN
					          'megustac26' => $arturogarcia->Megusta, 'seguidoresc26' => $arturogarcia->PersonasHablan,
					          'megustac27' => $rubensantos->Megusta, 'seguidoresc27' => $rubensantos->PersonasHablan,
					          'megustac28' => $angelvenegas->Megusta, 'seguidoresc28' => $angelvenegas->PersonasHablan,
					          //COQUIMATLAN
					          'megustac29' => $orlandolino->Megusta, 'seguidoresc29' => $orlandolino->PersonasHablan,					          					          
					          'megustac30' => $enriquepreciado->Megusta, 'seguidoresc30' => $enriquepreciado->PersonasHablan,
					          'megustac31' => $sergiopolanco->Megusta, 'seguidoresc31' => $sergiopolanco->PersonasHablan,
					          // //CUAHUTEMOC
					          'megustac32' => $rafaelmendoza->Megusta, 'seguidoresc32' => $rafaelmendoza->PersonasHablan,					          
					          'megustac33' => $blancarocha->Megusta, 'seguidoresc33' => $blancarocha->PersonasHablan,
					          'megustac34' => $anazamora->Megusta, 'seguidoresc34' => $anazamora->PersonasHablan,					          
					          'megustac35' => $gilbertoascencio->Megusta, 'seguidoresc35' => $gilbertoascencio->PersonasHablan,
					          'megustac36' => $blancaursua->Megusta, 'seguidoresc36' => $blancaursua->PersonasHablan,					          					          
					          // //IXTLAHUACAN
					          'megustac43' => $crispingutierrez->Megusta, 'seguidoresc43' => $crispingutierrez->PersonasHablan,					          
					          'megustac44' => $hiramamador->Megusta, 'seguidoresc44' => $hiramamador->PersonasHablan,
					          'megustac45' => $germanruelas->Megusta, 'seguidoresc45' => $germanruelas->PersonasHablan,					          
					          'megustac46' => $ignaciagutierrez->Megusta, 'seguidoresc46' => $ignaciagutierrez->PersonasHablan,
					          // //MINATITLAN
					          'megustac37' => $manuelpalacio->Megusta, 'seguidoresc37' => $manuelpalacio->PersonasHablan,
					          'megustac38' => $berthapicasso->Megusta, 'seguidoresc38' => $berthapicasso->PersonasHablan,
					          'megustac39' => $normacampos->Megusta, 'seguidoresc39' => $normacampos->PersonasHablan,					          
					          // //ARMERIA
					          'megustac40' => $esperanzaalcaraz->Megusta, 'seguidoresc40' => $esperanzaalcaraz->PersonasHablan,
					          'megustac41' => $miguelruelas->Megusta, 'seguidoresc41' => $miguelruelas->PersonasHablan,					          
					          'megustac42' => $salvadorbueno->Megusta, 'seguidoresc42' => $salvadorbueno->PersonasHablan);

				$this->load->view('facebook/alcaldias',$data);	
			}
		}
//CANDIDATO A DIPUTADO LOCAL DISTRITO I al XVI
	public function CDLDISTRITOIALXVI()
		{
			$this->load->library('fechas'); //Cargar la librería que convierte las fechas			
			$ultima_fecha = $this->modelo_inicio->obtener_ultima_fecha();	
			$ultima_fecha = $ultima_fecha->ultima_fecha;
			$ultima_fecha2 = $this->fechas->fecha_dd_mes_aaaa2($ultima_fecha);
			$resultado = $this->modelo_consultas->obtener_cuenta_dip_locales($ultima_fecha); 	
			$fecha = $this->fechas->fecha_dd_mes_aaaa_edita($ultima_fecha);
			
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

		                'ultima_fecha' => $fecha
		            );
			$this->load->view('facebook/diputadolocal',$datos);	


		}
	//CANDIDATOS POR PARTIDO
	public function partidost()
	{
		$gobernadores = $this->modelo_consultas->obtener_cuenta_partidos(); 
		$data = array(
			                "pri" => $gobernadores['pri'],
			                "pan" => $gobernadores['pan'],
			                "pna" => $gobernadores['pna'],
			                "pv" => $gobernadores['pv'],
			                "prd" => $gobernadores['prd'],
			                "pt" => $gobernadores['pt'],
			                "pmc" => $gobernadores['pmc'],
			                "pm" => $gobernadores['pm'],
			                "pes" => $gobernadores['pes'],
			                "ph" => $gobernadores['ph']
			            );
			$this->load->view('facebook/partidos',$data);
	}


	//Valoracion de comentarios para gobernador
	public function valoracion_gobernadores()
	{
		$nacho = $this->modelo_inicio->valoracion_nacho();
		$jorge = $this->modelo_inicio->valoracion_jorge();
		$martha = $this->modelo_inicio->valoracion_martha();
		$locho = $this->modelo_inicio->valoracion_locho();
		$david = $this->modelo_inicio->valoracion_david();
		$jose = $this->modelo_inicio->valoracion_jose();
		$gerardo = $this->modelo_inicio->valoracion_gerardo();
		$carlos = $this->modelo_inicio->valoracion_carlos();						

		$datos = array(
					  'nachoP' => $nacho['positivos'],
					  'nachoNe' => $nacho['negativos'],
					  'nachoN' => $nacho['neutros'],
					  'jorgeP' => $jorge['positivos'],
					  'jorgeNe' => $jorge['negativos'],
					  'jorgeN' => $jorge['neutros'],
					  'marthaP' => $martha['positivos'],
					  'marthaNE' => $martha['negativos'],
					  'marthaN' => $martha['neutros'],
					  'lochoP' => $locho['positivos'],
					  'lochoNe' => $locho['negativos'],
					  'lochoN' => $locho['neutros'],
					  'davidP' => $david['positivos'],
					  'davidNe' => $david['negativos'],
					  'davidN' => $david['neutros'],
					  'joseP' => $jose['positivos'],
					  'joseNe' => $jose['negativos'],
					  'joseN' => $jose['neutros'],
					  'gerardoP' => $gerardo['positivos'],
					  'gerardoNe' => $gerardo['negativos'],
					  'gerardoN' => $gerardo['neutros'],
					  'carlosP' => $carlos['positivos'],
					  'carlosNe' => $carlos['negativos'],
					  'carlosN' => $carlos['neutros']
					  );
		$this->load->view('facebook/valoracionGobernadores',$datos);
	}	
	public function valoracion_DF()
	{
		$enriquerojas = $this->modelo_inicio->valoracion_enrique();
		$josemanuel = $this->modelo_inicio->valoracion_josemanuel();
		$indiravizcaino = $this->modelo_inicio->valoracion_indira();
		$silviadias = $this->modelo_inicio->valoracion_silvia();

		$datos = array(
					  'enriqueP' => $enriquerojas['positivos'],
					  'enriqueNe' => $enriquerojas['negativos'],
					  'enriqueN' => $enriquerojas['neutros'],
					  'joseP' => $josemanuel['positivos'],
					  'joseNe' => $josemanuel['negativos'],
					  'joseN' => $josemanuel['neutros'],
					  'indiraP' => $indiravizcaino['positivos'],
					  'indiraNE' => $indiravizcaino['negativos'],
					  'indiraN' => $indiravizcaino['neutros'],
					  'silviaP' => $silviadias['positivos'],
					  'silviaNe' => $silviadias['negativos'],
					  'silviaN' => $silviadias['neutros']
					  );
		$this->load->view('facebook/valoracionDF',$datos);
	}
	public function valoracion_DL()
		{
			$hildamoreno = $this->modelo_inicio->valoracion_hilda();
			$jose = $this->modelo_inicio->valoracion_jose2();
			$Leonardo = $this->modelo_inicio->valoracion_leonardo();
			$nicolas = $this->modelo_inicio->valoracion_nicolas();
			$guillermo = $this->modelo_inicio->valoracion_guillermo();

			$datos = array(
						  'hildaP' => $hildamoreno['positivos'],
						  'hildaNe' => $hildamoreno['negativos'],
						  'hildaN' => $hildamoreno['neutros'],
						  'joseP' => $jose['positivos'],
						  'joseNe' => $jose['negativos'],
						  'joseN' => $jose['neutros'],
						  'leonardoP' => $Leonardo['positivos'],
						  'leonardoNE' => $Leonardo['negativos'],
						  'leonardoN' => $Leonardo['neutros'],
						  'nicolasP' => $nicolas['positivos'],
						  'nicolasNe' => $nicolas['negativos'],
						  'nicolasN' => $nicolas['neutros'],
						  'guillermoP' => $guillermo['positivos'],
						  'guillermoNe' => $guillermo['negativos'],
						  'guillermoN' => $guillermo['neutros']						  
						  );
			$this->load->view('facebook/valoracionDL',$datos);
		}			

	public function valoracion_PM()
	{
		$esperanzapm = $this->modelo_inicio->valoracion_pm1();
		$Miguelpm = $this->modelo_inicio->valoracion_pm2();
		$Héctorpm = $this->modelo_inicio->valoracion_pm3();
		$Oscarpm = $this->modelo_inicio->valoracion_pm4();
		$Zenaidapm = $this->modelo_inicio->valoracion_pm5();
		$Mariopm1 = $this->modelo_inicio->valoracion_pm6();
		$Mariopm2 = $this->modelo_inicio->valoracion_pm7();
		$salomonpm = $this->modelo_inicio->valoracion_pm8();

		$datos = array(
					  'cpm1P' => $esperanzapm['positivos'],
					  'cpm1Ne' => $esperanzapm['negativos'],
					  'cpm1N' => $esperanzapm['neutros'],
					  'cpm2P' => $Miguelpm['positivos'],
					  'cpm2Ne' => $Miguelpm['negativos'],
					  'cpm2N' => $Miguelpm['neutros'],
					  'cpm3P' => $Héctorpm['positivos'],
					  'cpm3NE' => $Héctorpm['negativos'],
					  'cpm3N' => $Héctorpm['neutros'],
					  'cpm4P' => $Oscarpm['positivos'],
					  'cpm4Ne' => $Oscarpm['negativos'],
					  'cpm4N' => $Oscarpm['neutros'],
					  'cpm5P' => $Zenaidapm['positivos'],
					  'cpm5Ne' => $Zenaidapm['negativos'],
					  'cpm1N' => $Zenaidapm['neutros'],
					  'cpm6P' => $Mariopm1['positivos'],
					  'cpm6Ne' => $Mariopm1['negativos'],
					  'cpm6N' => $Mariopm1['neutros'],	
					  'cpm7P' => $Mariopm2['positivos'],
					  'cpm7Ne' => $Mariopm2['negativos'],
					  'cpm7N' => $Mariopm2['neutros'],		
					  'cpm8P' => $salomonpm['positivos'],
					  'cpm8Ne' => $salomonpm['negativos'],
					  'cpm8N' => $salomonpm['neutros']							  					  							  
					  );
		$this->load->view('facebook/valoracionPM',$datos);
	}
	//Rumbo al 7 de Junio
	public function rumbo()
	{
		$resultado = $this->modelo_inicio->obtener_cuenta_rumboal7dejunio();	
		$datos = array(
						"rumbo" => $resultado['rumbo']
	            	  );
		$this->load->view('facebook/rumbo',$datos);
	}	
}