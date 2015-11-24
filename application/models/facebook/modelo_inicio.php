<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Modelo_inicio extends CI_Model 
{
	function __construct() 
	{
		parent::__construct();
		//con esta línea cargamos la base de datos facebook
		$db_facebook = $this->load->database('facebook', TRUE);
	}	
	
	//Consulta que prueba la conexión a la base de datos
	public function consulta()
	{	
		$db_facebook = $this->load->database('facebook', TRUE);
		$consulta = $db_facebook->query("SELECT * FROM candidatos where Partido='PAN' and Nombre='Jorge Luis Preciado Rodríguez'");
	
		if($consulta->num_rows()>0)
		{
			return $consulta->row(); //Con el row solo se obtiene una fila de resulTA
	} 
 
	//********CANDIDATOS A PRESIDENTE MUNICIPAL DE COLIMA*********

	//Obteniendo los likes y los posts del candidato a PMColima Hector Insua
	public function Obtener_CPMColimaHectorinsua()
	{ 
		$db_facebook = $this->load->database('facebook', TRUE);
		$hectorinsua = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Héctor Insúa García'");
	
		if($hectorinsua->num_rows()>0)
		{
			return $hectorinsua->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	//Obteniendo los likes y los posts del candidato a PMColima Oscar Valdovinos
	public function Obtener_CPMColimaOscarvaldovinos()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$oscarvaldovinos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Oscar Valdovinos Anguiano'");
	
		if($oscarvaldovinos->num_rows()>0)
		{
			return $oscarvaldovinos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
		
	}

	//Obteniendo los likes y los posts del candidato a PMColima Esmeralda Cardenas
	public function Obtener_CPMColimaEsmeraldacardenas()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$esmeraldacardenas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Esmeralda Cárdenas Sánchez'");
	
		if($esmeraldacardenas->num_rows()>0)
		{
			return $esmeraldacardenas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}		
	}

	//Obteniendo los likes y los posts del candidato a PMColima Juan Vazquez
	public function Obtener_CPMColimaJuanvazquez()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$juanvazquez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Juan Óscar Vázquez Chávez'");
	
		if($juanvazquez->num_rows()>0)
		{
			return $juanvazquez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMColima Paulo Velazquez
	public function Obtener_CPMColimaPaulovelazquez()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$paulovelazquez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Paulo Galileo Velázquez Rueda'");
	
		if($paulovelazquez->num_rows()>0)
		{
			return $paulovelazquez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}						
	}

	//Obteniendo los likes y los posts del candidato a PMColima Elena Abaroa
	public function Obtener_CPMColimaElenaabaroa()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$elenaabaroa = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='María Elena Abaroa López'");
	
		if($elenaabaroa->num_rows()>0)
		{
			return $elenaabaroa->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}		
	}
	
	//Obteniendo los likes y los posts del candidato a PMColima Brenda Mayoral
	public function Obtener_CPMColimaBrendamayoral()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$brendamayoral = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Colima') and Nombre='Brenda Natalí Mayoral Gutiérrez'");
	
		if($brendamayoral->num_rows()>0)
		{
			return $brendamayoral->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMManzanillo Gabriela Benavides Cobos
	public function Obtener_CPMManzanilloGB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$gabrielabenavides = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Gabriela Benavides Cobos'");
	
		if($gabrielabenavides->num_rows()>0)
		{
			return $gabrielabenavides->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMManzanillo Francisco Zepeda González
	public function Obtener_CPMManzanilloFZ()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$franciscozepeda = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Francisco Zepeda González'");
	
		if($franciscozepeda->num_rows()>0)
		{
			return $franciscozepeda->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Rosa Martha Leal Molina
	public function Obtener_CPMManzanilloML()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marthaleal = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Rosa Martha Leal Molina'");
	
		if($marthaleal->num_rows()>0)
		{
			return $marthaleal->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMManzanillo Marcos Barajas Yescas
	public function Obtener_CPMManzanilloMB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$marcosbarajas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Marcos Barajas Yescas'");
	
		if($marcosbarajas->num_rows()>0)
		{
			return $marcosbarajas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Rubén Romo Ochoa
	public function Obtener_CPMManzanilloRR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rubenromo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Rubén Romo Ochoa'");
	
		if($rubenromo->num_rows()>0)
		{
			return $rubenromo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Héctor Jesús Lara Chávez
	public function Obtener_CPMManzanilloHL()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hectorlara = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Héctor Jesús Lara Chávez'");
	
		if($hectorlara->num_rows()>0)
		{
			return $hectorlara->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMManzanillo Héctor Víctor Manuel Granados Rangel
	public function Obtener_CPMManzanilloVG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$victorgranados = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Manzanillo') and Nombre='Víctor Manuel Granados Rangel'");
	
		if($victorgranados->num_rows()>0)
		{
			return $victorgranados->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Yulenny Cortés León
	public function Obtener_CPMVilladeAlvarezYC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$yulennycortes = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Yulenny Cortés León'");
	
		if($yulennycortes->num_rows()>0)
		{
			return $yulennycortes->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Oswy Delgado
	public function Obtener_CPMVilladeAlvarezOD()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$oswydelgado = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Oswy Delgado Rodríguez'");
	
		if($oswydelgado->num_rows()>0)
		{
			return $oswydelgado->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Jaime Sotelo García 
	public function Obtener_CPMVilladeAlvarezJS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$jaimesotelo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Jaime Sotelo García '");
	
		if($jaimesotelo->num_rows()>0)
		{
			return $jaimesotelo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Berenice González Gutiérrez
	public function Obtener_CPMVilladeAlvarezBG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$berenicegonzalez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Berenice González Gutiérrez '");
	
		if($berenicegonzalez->num_rows()>0)
		{
			return $berenicegonzalez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Héctor Anaya Villanueva
	public function Obtener_CPMVilladeAlvarezHA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hectoranaya = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Héctor Anaya Villanueva '");
	
		if($hectoranaya->num_rows()>0)
		{
			return $hectoranaya->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Melchor Arroyo Manriquez
	public function Obtener_CPMVilladeAlvarezMA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$melchorarroyo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Melchor Arroyo Manriquez '");
	
		if($melchorarroyo->num_rows()>0)
		{
			return $melchorarroyo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMVilladeAlvarez Edgar Octavio González Medina
	public function Obtener_CPMVilladeAlvarezEG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$edgargonzalez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Villa de Álvarez') and Nombre='Edgar Octavio González Medina '");
	
		if($edgargonzalez->num_rows()>0)
		{
			return $edgargonzalez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMComala Salomón Salazar Barragán
	public function Obtener_CPMComalaSS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$salomonsalazar = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Salomón Salazar Barragán'");
	
		if($salomonsalazar->num_rows()>0)
		{
			return $salomonsalazar->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	

	//Obteniendo los likes y los posts del candidato a PMComala Mario Peña Jiménez
	public function Obtener_CPMComalaMP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$mariopena = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Mario Peña Jiménez'");
	
		if($mariopena->num_rows()>0)
		{
			return $mariopena->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	

	//Obteniendo los likes y los posts del candidato a PMComala Zenaida Vicente Olivares
	public function Obtener_CPMComalaZV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$zenaidavicente = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Zenaida Vicente Olivares'");
	
		if($zenaidavicente->num_rows()>0)
		{
			return $zenaidavicente->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMComala Mario Carrillo Llerenas
	public function Obtener_CPMComalaMC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$mariocarrillo = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Comala') and Nombre='Mario Carrillo Llerenas'");
	
		if($mariocarrillo->num_rows()>0)
		{
			return $mariocarrillo->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMTecoman Arturo García Arias
	public function Obtener_CPMTecomanAG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$arturogarcia = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Tecoman') and Nombre='Arturo García Arias'");
	
		if($arturogarcia->num_rows()>0)
		{
			return $arturogarcia->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMTecoman Rubén Santos Álvarez
	public function Obtener_CPMTecomanRS()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rubensantos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Tecoman') and Nombre='Rubén Santos Álvarez'");
	
		if($rubensantos->num_rows()>0)
		{
			return $rubensantos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMTecoman Ángel Venegas López
	public function Obtener_CPMTecomanAV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$angelvenegas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Tecoman') and Nombre='Ángel Venegas López'");
	
		if($angelvenegas->num_rows()>0)
		{
			return $angelvenegas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCoquimatlan Orlando Lino Castellanos
	public function Obtener_CPMCoquimatlanOL()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$orlandolino = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Coquimatlan') and Nombre='Orlando Lino Castellanos'");
	
		if($orlandolino->num_rows()>0)
		{
			return $orlandolino->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCoquimatlan Enrique Preciado Beas
	public function Obtener_CPMCoquimatlanEP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$enriquepreciado = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Coquimatlan') and Nombre='Enrique Preciado Beas'");
	
		if($enriquepreciado->num_rows()>0)
		{
			return $enriquepreciado->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCoquimatlan Sergio Polanco Ceballos
	public function Obtener_CPMCoquimatlanSP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$sergiopolanco = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Coquimatlan') and Nombre='Sergio Polanco Ceballos'");
	
		if($sergiopolanco->num_rows()>0)
		{
			return $sergiopolanco->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Rafael Mendoza Godínez
	public function Obtener_CPMCuahutemocRM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$rafaelmendoza = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Rafael Mendoza Godínez'");
	
		if($rafaelmendoza->num_rows()>0)
		{
			return $rafaelmendoza->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Blanca Isabel Rocha Cobián
	public function Obtener_CPMCuahutemocBR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$blancarocha = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Blanca Isabel Rocha Cobián'");
	
		if($blancarocha->num_rows()>0)
		{
			return $blancarocha->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
		
	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Ana Bertha Zamora Prieto
	public function Obtener_CPMCuahutemocAZ()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$anazamora = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Ana Bertha Zamora Prieto'");
	
		if($anazamora->num_rows()>0)
		{
			return $anazamora->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
		
	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Gilberto Ascencio Villalpando
	public function Obtener_CPMCuahutemocGA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$gilbertoascencio = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Gilberto Ascencio Villalpando'");
	
		if($gilbertoascencio->num_rows()>0)
		{
			return $gilbertoascencio->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMCuahutemoc Blanca Ursúa Blanco
	public function Obtener_CPMCuahutemocBU()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$blancaursua = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Cuahutemoc') and Nombre='Blanca Ursúa Blanco'");
	
		if($blancaursua->num_rows()>0)
		{
			return $blancaursua->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMMinatitlan Manuel Palacios Rodríguez
	public function Obtener_CPMMinatitlanMP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$manuelpalacio = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Minatitlan') and Nombre='Manuel Palacios Rodríguez'");
	
		if($manuelpalacio->num_rows()>0)
		{
			return $manuelpalacio->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMMinatitlan Bertha Alicia Picasso Morán
	public function Obtener_CPMMinatitlanBP()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$berthapicasso = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Minatitlan') and Nombre='Bertha Alicia Picasso Morán'");
	
		if($berthapicasso->num_rows()>0)
		{
			return $berthapicasso->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMMinatitlan Norma Campos Arias
	public function Obtener_CPMMinatitlanNC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$normacampos = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Minatitlan') and Nombre='Norma Campos Arias'");
	
		if($normacampos->num_rows()>0)
		{
			return $normacampos->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMArmeria Esperanza Alcaraz Alcaraz
	public function Obtener_CPMArmeriaEA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$esperanzaalcaraz = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Armeria') and Nombre='Esperanza Alcaraz Alcaraz'");
	
		if($esperanzaalcaraz->num_rows()>0)
		{
			return $esperanzaalcaraz->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	
	//Obteniendo los likes y los posts del candidato a PMArmeria Miguel Ruelas Jaramillo
	public function Obtener_CPMArmeriaMR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$miguelruelas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Armeria') and Nombre='Miguel Ruelas Jaramillo'");
	
		if($miguelruelas->num_rows()>0)
		{
			return $miguelruelas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	
	//Obteniendo los likes y los posts del candidato a PMArmeria Salvador Bueno Arceo
	public function Obtener_CPMArmeriaSB()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$salvadorbueno = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Armeria') and Nombre='Salvador Bueno Arceo'");
	
		if($salvadorbueno->num_rows()>0)
		{
			return $salvadorbueno->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Crispín Gutiérrez Moreno
	public function Obtener_CPMIxtlahuacanCG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$crispingutierrez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Crispín Gutiérrez Moreno'");
	
		if($crispingutierrez->num_rows()>0)
		{
			return $crispingutierrez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Hiram Amador Ruiz Mancilla
	public function Obtener_CPMIxtlahuacanHA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$hiramamador = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Hiram Amador Ruiz Mancilla'");
	
		if($hiramamador->num_rows()>0)
		{
			return $hiramamador->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Germán Ruelas Verduzco
	public function Obtener_CPMIxtlahuacanGR()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$germanruelas = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Germán Ruelas Verduzco'");
	
		if($germanruelas->num_rows()>0)
		{
			return $germanruelas->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	
	//Obteniendo los likes y los posts del candidato a PMIxtlahuacan Ignacia Gutiérrez Cortez
	public function Obtener_CPMIxtlahuacanIG()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ignaciagutierrez = $db_facebook->query("select Megusta, PersonasHablan from candidatos where (Cargo='Presidente Municipal Ixtlahuacan') and Nombre='Ignacia Gutiérrez Cortez'");
	
		if($ignaciagutierrez->num_rows()>0)
		{
			return $ignaciagutierrez->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}

	//***************************PARTIDOS*******************************
	
	//Obteniendo los likes y los posts del partido PAN
	public function Obtener_CPAN()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pan = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PAN'");
	
		if($pan->num_rows()>0)
		{
			return $pan->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PRI
	public function Obtener_CPRI()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pri = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRI'");
	
		if($pri->num_rows()>0)
		{
			return $pri->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PNA
	public function Obtener_CPNA()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pna = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='NUEVA ALIANZA'");
	
		if($pna->num_rows()>0)
		{
			return $pna->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}		
	//Obteniendo los likes y los posts del partido PV
	public function Obtener_CPV()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pv = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='VERDE'");
	
		if($pv->num_rows()>0)
		{
			return $pv->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}			
	//Obteniendo los likes y los posts del partido PRD
	public function Obtener_CPRD()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$prd = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRD'");
	
		if($prd->num_rows()>0)
		{
			return $prd->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PT
	public function Obtener_CPT()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pt = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PT'");
	
		if($pt->num_rows()>0)
		{
			return $pt->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}		
	//Obteniendo los likes y los posts del partido PMC
	public function Obtener_CPMC()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pmc = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MOVIMIENTO CIUDADANO'");
	
		if($pmc->num_rows()>0)
		{
			return $pmc->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}			
	//Obteniendo los likes y los posts del partido PM
	public function Obtener_CPM()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pm = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MORENA'");
	
		if($pm->num_rows()>0)
		{
			return $pm->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PES
	public function Obtener_CPES()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pes = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='ENCUENTRO SOCIAL'");
	
		if($pes->num_rows()>0)
		{
			return $pes->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido Ph
	public function Obtener_CPH()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ph = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PARTIDO HUMANISTA'");
	
		if($ph->num_rows()>0)
		{
			return $ph->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PAN
	public function Obtener_CPAN2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pan2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PAN2'");
	
		if($pan2->num_rows()>0)
		{
			return $pan2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PRI
	public function Obtener_CPRI2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pri2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRI2'");
	
		if($pri2->num_rows()>0)
		{
			return $pri2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PNA
	public function Obtener_CPNA2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pna2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='NUEVA ALIANZA2'");
	
		if($pna2->num_rows()>0)
		{
			return $pna2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PV
	public function Obtener_CPV2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pv2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='VERDE2'");
	
		if($pv2->num_rows()>0)
		{
			return $pv2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PRD
	public function Obtener_CPRD2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$prd2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PRD2'");
	
		if($prd2->num_rows()>0)
		{
			return $prd2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}		
	//Obteniendo los likes y los posts del partido PT
	public function Obtener_CPT2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pt2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PT2'");
	
		if($pt2->num_rows()>0)
		{
			return $pt2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}	
	//Obteniendo los likes y los posts del partido PMC
	public function Obtener_CPMC2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pmc2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MOVIMIENTO CIUDADANO2'");
	
		if($pmc2->num_rows()>0)
		{
			return $pmc2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PM
	public function Obtener_CPM2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pm2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='MORENA2'");
	
		if($pm2->num_rows()>0)
		{
			return $pm2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PES
	public function Obtener_CPES2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$pes2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='ENCUENTRO SOCIAL2'");
	
		if($pes2->num_rows()>0)
		{
			return $pes2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}
	//Obteniendo los likes y los posts del partido PH
	public function Obtener_CPH2()
	{
		$db_facebook = $this->load->database('facebook', TRUE);
		$ph2 = $db_facebook->query("select Megusta, PersonasHablan from partido where (Cargo='Partido') and Partido='PARTIDO HUMANISTA2'");
	
		if($ph2->num_rows()>0)
		{
			return $ph2->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}				
	}			
	//OBTENIENDO LA VALORACION DE LOS CANDIDATOS A GOBERBANDOR	
	
	//Obtener valoracion de comentarios de Jorge Luis
		public function valoracion_jorge()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Jorge Luis Preciado'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Jorge Luis Preciado'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Jorge Luis Preciado'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}	
	//Obtener valoracion de comentarios de Jorge Luis
		public function valoracion_nacho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Ignacio Peralta'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Ignacio Peralta'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Ignacio Peralta'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}	
		//Obtener valoracion de comentarios de martha zepeda
		public function valoracion_martha()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Martha Zepeda'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Martha Zepeda'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Martha Zepeda'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}	
		//Obtener valoracion de comentarios de locho
		public function valoracion_locho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Locho Morán'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Locho Morán'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Locho Morán'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de locho
		public function valoracion_david()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'David Munro González'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'David Munro González'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'David Munro González'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de jose
		public function valoracion_jose()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'José Gallardo'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'José Gallardo'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'José Gallardo'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}		
		//Obtener valoracion de comentarios de gerardo
		public function valoracion_gerardo()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Gerardo Galván'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Gerardo Galván'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Gerardo Galván'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de carlos
		public function valoracion_carlos()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Carlos Barbazán'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Carlos Barbazán'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Carlos Barbazán'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de enrique
		public function valoracion_enrique()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Enrique Rojas'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Enrique Rojas'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Enrique Rojas'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de josemanuel
		public function valoracion_josemanuel()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Jose Manuel'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Jose Manuel'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Jose Manuel'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de indira
		public function valoracion_indira()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Indira Vizcaíno'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Indira Vizcaíno'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Indira Vizcaíno'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}		
		//Obtener valoracion de comentarios de silvia
		public function valoracion_silvia()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Silvía Díaz'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Silvía Díaz'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Silvía Díaz'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de hilda
		public function valoracion_hilda()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Hilda Ceballos'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Hilda Ceballos'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Hilda Ceballos'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de jose
		public function valoracion_jose2()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'José Cardenas'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'José Cardenas'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'José Cardenas'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}	
		//Obtener valoracion de comentarios de leoanrdo
		public function valoracion_leonardo()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Leonardo Gutiérrez'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Leonardo Gutiérrez'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Leonardo Gutiérrez'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}	
		//Obtener valoracion de comentarios de nicolas
		public function valoracion_nicolas()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Nicólas Contreras'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Nicólas Contreras'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Nicólas Contreras'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}		
		//Obtener valoracion de comentarios de nicolas
		public function valoracion_guillermo()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Guillermo Rángel'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Guillermo Rángel'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Guillermo Rángel'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}	

		//Obtener valoracion de comentarios de pm1
		public function valoracion_pm1()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Esperanza Alcaraz'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Esperanza Alcaraz'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Esperanza Alcaraz'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}	

		//Obtener valoracion de comentarios de pm2
		public function valoracion_pm2()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Miguel Ruelas'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Miguel Ruelas'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Miguel Ruelas'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de pm3
		public function valoracion_pm3()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Héctor Insúa'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Héctor Insúa'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Héctor Insúa'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de pm4
		public function valoracion_pm4()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Oscar Valdovinos'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Oscar Valdovinos'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Oscar Valdovinos'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de pm5
		public function valoracion_pm5()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Zenaida Vicente'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Zenaida Vicente'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Zenaida Vicente'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}
		//Obtener valoracion de comentarios de pm6
		public function valoracion_pm6()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Mario Carrillo'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Mario Carrillo'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Mario Carrillo'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}		
		//Obtener valoracion de comentarios de pm7
		public function valoracion_pm7()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Mario Peña'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Mario Peña'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Mario Peña'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}		
		//Obtener valoracion de comentarios de pm8
		public function valoracion_pm8()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 NombreCandidato = 'Salomón Salazar'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 NombreCandidato = 'Salomón Salazar'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 NombreCandidato = 'Salomón Salazar'"
										);

			$row_positivos = $positivos->row();
			$row_negativos = $negativos->row();
			$row_neutros = $neutros->row();
			$total = $row_positivos->positivos+$row_negativos->negativos+$row_neutros->neutros;

			$a = array(
                "positivos" => ($row_positivos->positivos*100)/$total,
                "negativos" => ($row_negativos->negativos*100)/$total,
                "neutros" => ($row_neutros->neutros*100)/$total,
                "total" => $total
            );
            return $a;
		}		
		//Obtener cuenta de Comovamoscolima
		public function obtener_cuenta_comoVamos()
		{
			$comoVamos2 = $this->db->query("select Megusta, PersonasHablan, Fecha from partido where (Cargo='Sociedad') and Partido='Como Vamos Colima' ORDER BY Fecha ASC");

			if($comoVamos2->num_rows()>0)
			{
				$a2 = array(
	                "comoVamos2" => $comoVamos2->result()
	            );
	            return $a2;
			}
			else
			{
				return FALSE;
			}
		}		
		//Obtener cuenta de Comovamoscolima
		public function obtener_cuenta_rumboal7dejunio()
		{
			$rumbo = $this->db->query("select Megusta, PersonasHablan, fecha from partido where (Cargo='Sociedad') and Partido='Rumbo al 7 de junio' ORDER BY Fecha ASC");

			if($rumbo->num_rows()>0)
			{
				$a2 = array(
	                "rumbo" => $rumbo->result()
	            );
	            return $a2;
			}
			else
			{
				return FALSE;
			}
		}						
	public function obtener_ultima_fecha()
	{
		// $db_facebook = $this->load->database('facebook', TRUE);
		$ultima_fecha = $this->db->query("SELECT max(fecha) as ultima_fecha from candidatos");

		if($ultima_fecha->num_rows()>0)
		{
			return $ultima_fecha->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}

	public function obtener_ultima_fecha2()
	{
		// $db_facebook = $this->load->database('facebook', TRUE);
		$ultima_fecha = $this->db->query("SELECT max(fecha) as ultima_fecha from partido");

		if($ultima_fecha->num_rows()>0)
		{
			return $ultima_fecha->row(); //Con el row solo se obtiene una fila de resultados
		}
		else
		{
			return FALSE;
		}
	}	
	#Obtener datos de los Gobernadores
	public function obtener_cuenta_gobernadores($fecha)
	{
		$nacho = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'José Ignacio Peralta Sánchez'");
		$jorge = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Jorge Luis Preciado Rodríguez'");
		$locho = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Leoncio Morán Sánchez'");
		$martha = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Martha Zepeda del Toro'");
		$david = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'David Munro González'");
		$francisco = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'José Francisco Gallardo Rodríguez'");
		$gerardo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Gerardo Galván Pinto'");
		$carlos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Carlos Barbazán Martínez'");

		if($nacho->num_rows()>0 and $jorge->num_rows()>0 and $locho->num_rows()>0 and $martha->num_rows()>0 and $david->num_rows()>0 and $francisco->num_rows()>0 and $gerardo->num_rows()>0 and $carlos->num_rows()>0)
		{
			$nacho = $nacho->row();
			$jorge = $jorge->row();
			$locho = $locho->row();
			$martha = $martha->row();
			$david = $david->row();
			$francisco = $francisco->row();
			$gerardo = $gerardo->row();
			$carlos = $carlos->row();
			$a = array(
                "nacho" => $nacho,
                "jorge" => $jorge,
                "locho" => $locho,
                "martha" => $martha,
                "david" => $david,
				"francisco" => $francisco,
				"gerardo" => $gerardo,
				"carlos" => $carlos
            );
            return $a;
		}
		else
		{
			return FALSE;
		}
	}

	//Obtener datos de los diputados federales
	public function obtener_cuenta_dipitadofederal($fecha)
	{
		//Distrito I
		$josemanuel = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'José Manuel Moreno González'");
		$enriquerojas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Enrique Rojas Orozco'");
		$indiravizcaino = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Indira Vizcaíno Silva'");
		$silviadias = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Silvia Elena Díaz Márquez'");
		$angelesmarquez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Ángeles Márquez Gileta'");
		$rosalinagarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Rosalina García Torres'");
		$claudiaibarra = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Claudia Jasmín Ibarra Ávalos'");
		//Distrito II
		$normagalindo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Norma Galindo Matías'");
		$pedrofernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Pedro Fernández Rodríguez'");
		$eliasvalencia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Elías Eduardo Valencia Cervantes'");
		$juancarlos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Juan Carlos Olave'");
		$marisamesina = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
								  where fecha = '$fecha' and Nombre = 'Marisa Mesina Polanco'");

		if($josemanuel->num_rows()>0 and $enriquerojas->num_rows()>0 and $indiravizcaino->num_rows()>0 and $silviadias->num_rows()>0 and $angelesmarquez->num_rows()>0 and $rosalinagarcia->num_rows()>0 and $claudiaibarra->num_rows()>0 and $normagalindo->num_rows()>0 and $pedrofernandez->num_rows()>0 and $eliasvalencia->num_rows()>0 and $juancarlos->num_rows()>0 and $marisamesina->num_rows()>0)
		{
			//Distrito I
			$josemanuel = $josemanuel->row();
			$enriquerojas = $enriquerojas->row();
			$indiravizcaino = $indiravizcaino->row();
			$silviadias = $silviadias->row();
			$angelesmarquez = $angelesmarquez->row();
			$rosalinagarcia = $rosalinagarcia->row();
			$claudiaibarra = $claudiaibarra->row();
			//Distrito II
			$normagalindo = $normagalindo->row();
			$pedrofernandez = $pedrofernandez->row();
			$eliasvalencia = $eliasvalencia->row();
			$juancarlos = $juancarlos->row();
			$marisamesina = $marisamesina->row();

			$a = array(
                "josemanuel" => $josemanuel,
                "enriquerojas" => $enriquerojas,
                "indiravizcaino" => $indiravizcaino,
                "silviadias" => $silviadias,
                "angelesmarquez" => $angelesmarquez,
				"rosalinagarcia" => $rosalinagarcia,
				"claudiaibarra" => $claudiaibarra,
				"normagalindo" => $normagalindo,
				"pedrofernandez" => $pedrofernandez,
				"eliasvalencia" => $eliasvalencia,
				"juancarlos" => $juancarlos,
				"marisamesina" => $marisamesina
            );
            return $a;
		}
		else
		{
			return FALSE;
		}
	}
	//Obtener datos de los partidos politicos ACOMODARLA BIEN
	public function obtener_cuenta_partidos()
	{
		$pri = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
								  where Partido = 'PRI' ORDER BY fecha ASC");
		$pan = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'PAN' ORDER BY fecha ASC");
		$pna = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'NUEVA ALIANZA' ORDER BY fecha ASC");
		$pv = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'VERDE' ORDER BY fecha ASC");
		$prd = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'PRD' ORDER BY fecha ASC");
		$pt = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'PT' ORDER BY fecha ASC");
		$pmc = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'MOVIMIENTO CIUDADANO' ORDER BY fecha ASC");
		$pm = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'MORENA' ORDER BY fecha ASC");
		$pes = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'ENCUENTRO SOCIAL' ORDER BY fecha ASC");
		$ph = $this->db->query("SELECT Megusta, PersonasHablan from partido 
								  where Partido = 'PARTIDO HUMANISTA' ORDER BY fecha ASC");

		if($pri->num_rows()>0)
		{
			// $pri = $pri->result(),
			// $pan = $pan->result();
			// $pna = $pna->result();
			// $pv = $pv->result();
			// $prd = $prd->result();
			// $pt = $pt->result();
			// $pmc = $pmc->result();
			// $pm = $pm->result();			
			// $pes = $pes->result();
			// $ph = $ph->result();						
			$a = array(
                "pri" => $pri->result(),
                "pan" => $pan->result(),
                "pna" => $pna->result(),
                "pv" => $pv->result(),
                "prd" => $prd->result(),
                "pt" => $pt->result(),
                "pmc" => $pmc->result(),
                "pm" => $pm->result(),
                "pes" => $pes->result(),
                "ph" => $ph->result()
            );
            return $a;
		}
		else
		{
			return FALSE;
		}
	}	
}	