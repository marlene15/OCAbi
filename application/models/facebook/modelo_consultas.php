<?php
	class Modelo_consultas extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}

		public function ExisteFecha($fecha)
		{
			$usuarios_fechas = $this->db->query("SELECT Nombre From candidatos WHERE fecha = '$fecha'");
			if($usuarios_fechas->num_rows()>0)
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}

		public function ExisteFecha2($fecha)
		{
			$usuarios_fechas = $this->db->query("SELECT Partido From partido WHERE fecha = '$fecha'");
			if($usuarios_fechas->num_rows()>0)
			{
				return 1;
			}
			else
			{
				return 2;
			}
		}		
		#Gobernadores
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

		#Diputados federales
		public function obtener_cuenta_dip_federales1($fecha)
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

			if($josemanuel->num_rows()>0 and $enriquerojas->num_rows()>0 and $indiravizcaino->num_rows()>0 and $silviadias->num_rows()>0 and $angelesmarquez->num_rows()>0 and $rosalinagarcia->num_rows()>0 and $claudiaibarra->num_rows()>0)
			{
				$josemanuel = $josemanuel->row();
				$enriquerojas = $enriquerojas->row();
				$indiravizcaino = $indiravizcaino->row();
				$silviadias = $silviadias->row();
				$angelesmarquez = $angelesmarquez->row();
				$rosalinagarcia = $rosalinagarcia->row();
				$claudiaibarra = $claudiaibarra->row();																
				$a = array(
	                "josemanuel" => $josemanuel,
	                "enriquerojas" => $enriquerojas,
	                "indiravizcaino" => $indiravizcaino,
	                "silviadias" => $silviadias,
	                "angelesmarquez" => $angelesmarquez,
	                "rosalinagarcia" => $rosalinagarcia,
	                "claudiaibarra" => $claudiaibarra	                	                	                	                
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}
		public function obtener_cuenta_dip_federales2($fecha)
		{
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

		
			if($normagalindo->num_rows()>0 and $pedrofernandez->num_rows()>0 and $eliasvalencia->num_rows()>0 and $juancarlos->num_rows()>0 and $marisamesina->num_rows()>0)
			{
				//Distrito II
				$normagalindo = $normagalindo->row();
				$pedrofernandez = $pedrofernandez->row();
				$eliasvalencia = $eliasvalencia->row();
				$juancarlos = $juancarlos->row();
				$marisamesina = $marisamesina->row();

				$a = array(
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

		public function obtener_cuenta_dip_locales($fecha)
		{
			$Hildaceballos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Hilda Ceballos Llerenas'");
			$Josecardenas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Cárdenas Sánchez'");
			$Leonardogutierrez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Leonardo Cesar Gutiérrez Chávez'");

			$nicolascontreras = $this->db->query("SELECT  Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Nicolás Contreras Cortés'");
			$guillermorangel = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Guillermo Rángel Lozano'");
			$SandraRammirez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sandra Viviana Ramírez Anguiano'");
			$joseGarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Luis García Solache'");
			$arturogarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Arturo García Arias'");
			$lilianarodriguez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Liliana Rodríguez Vejar'");
			
			$crispinguerra = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Crispín Guerra Cárdenas'");
			$almaarreola = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alma Delia Arreola Cruz'");
			$marthafarias = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Martha Elia Farías Ríos'");
			$isisvillasernor = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Isis Baudella Guadalupe Villaseñor Silva'");
			$octavioaguilar = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Octavio Aguilar Montaño'");
			$patriciaperegrina = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Patricia Inés Peregrina Larios'");
			$gloriaarceo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Gloria Arceo Chávez'");
			
			$janethpaz = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Janeth Paz Ponce'");
			$juanaandres = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Juana Andrés Rivera'");
			$sergioricardo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Ricardo Ruiz'");
			$andresorozco = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Andrés Fernando Orozco Soto'");

			$ramirotoscano = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ramiro Toscano Sánchez'");
			$josebenavides = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'José Guadalupe Benavides Florián'");
			$yulianaaguilar = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Yuliana Lizzet Aguilar Mora'");
			
			$SandrayolandaRammirez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sandra Yolanda Ramírez Santillán'");
			$octaviotintos = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Octavio Tintos Trujillo'");
			$sergiosilva = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Silva Sánchez'");
			$leticiamendoza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Leticia Mendoza Gordillo'");
			$getzemaniibarra = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Niza Getsemani Ibarra Ávalos'");
			
			$franciscoceballo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Francisco Javier Ceballos Galindo'");
			$alfredohernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alfredo Hernández Ramos'");
			$saracernas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sara Elizabeth Cernas Verduzco'");
			$jooelpadilla = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Joel Padilla Peña'");
			$socorrobayardo = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Socorro Bayardo Gaitán'");
			$erendiraandrade = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Erendira Noemí Andrade Ochoa'");
			
			$meylypastora = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Meyly Pastora Beltrán rolón'");
			$hectormagana = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Héctor Magaña Lara'");
			$alfredoherrera = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alfredo Cuauhtémoc Herrera Díaz'");
			$adelaidafernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Adelaida Fernández Ramos'");
			$juanjuarez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Juan Francisco Juárez Rodríguez'");
			
			$eusebiomesina = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Eusebio Mesina Reyes'");
			$beatrizinsunza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Beatríz Guadalupe Isunza Burciaga'");
			$selenelopez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Selene Margarita López'");
			$angelicaochoa = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ma Angélica Ochoa Muñoz'");
			$mauriciobarreto = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Mauricio Barreto Peralta'");
			
			$juanpinto = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Juan Carlos Pinto Rodríguez'");
			$ricardosevilla = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ricardo Sevilla Cárdenas'");
			$raquelcardenas = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Raquel Cárdenas Corona'");
			$marcorodarte = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Marco Antonio Rodarte Quintana'");
			$salvadorjuarez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Salvador Juárez Figueroa'");
			
			$miguelgarcia = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Miguel Alejandro García'");
			$armidanunes = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Armida Nuñez García'");
			$aldovega = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Aldo Leonardo Vega Petriz'");
			$sebastianesparza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sebastián Esparza Hernández'");
			$teresahernandez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Teresa Hernández Ortiz'");
			$dianatopete = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Diana Monserrat Topete Vargas'");
			
			$marthasosa = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Martha Leticia Sosa'");
			$rosarioyeme = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Rosario Yeme López'");
			$noraayala = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Nora Mireya Ayala Ochoa'");
			$sarahinoriega = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Iveth Sarahí Noriega Mondragón'");
			
			$sergiosanchez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Sánchez Ochoa'");
			$carlosvilla = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Carlos Iván Villa González'");
			
			$luisayala = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Luis Ayala Campos'");
			$lilafigueroa = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Lilia Figueroa Larios'");
			$marthameza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Martha Alicia Meza Obregón'");
			$veronicatorres = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Verónica Torres Rolón'");
			$gustavorerenteria = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Gustavo Rentería Gonzalez'");
			$josefinaroblada = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Josefina Roblada Lara'");
			$eliasnunez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Elías Octavio Núñez Campos'");
			
			$felicitaspena = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Felícitas Peña Cisneros'");
			$hildamoreno = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Hilda Moreno Díaz'");
			$almarincon = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Alma Elvira Rincón Rodríguez'");
			
			$santiagochavez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Santiago Chávez Chávez'");
			$judithgodinez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Judith Godínez Cabrera'");
			$sergiomendoza = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Sergio Mendoza Lomelí'");
			$angelesrodriguez = $this->db->query("SELECT Megusta, PersonasHablan from candidatos 
									  where fecha = '$fecha' and Nombre = 'Ma de Los Ángeles Rodríguez Silva'");
			

			if ($Leonardogutierrez->num_rows()>0){
				$Leonardogutierrez=$Leonardogutierrez->row();
			}
			else{
				$Leonardogutierrez='FALSO';
			}

			if ($lilianarodriguez->num_rows()>0){
				$lilianarodriguez=$lilianarodriguez->row();
			}
			else{
				$lilianarodriguez='FALSO';
			}

			if ($gloriaarceo->num_rows()>0){
				$gloriaarceo=$gloriaarceo->row();
			}
			else{
				$gloriaarceo='FALSO';
			}

			if ($andresorozco->num_rows()>0){
				$andresorozco=$andresorozco->row();
			}
			else{
				$andresorozco='FALSO';
			}

			if ($yulianaaguilar->num_rows()>0){
				$yulianaaguilar=$yulianaaguilar->row();
			}
			else{
				$yulianaaguilar='FALSO';
			}
			if ($getzemaniibarra->num_rows()>0){
				$getzemaniibarra=$getzemaniibarra->row();
			}
			else{
				$getzemaniibarra='FALSO';
			}
			if ($erendiraandrade->num_rows()>0){
				$erendiraandrade=$erendiraandrade->row();
			}
			else{
				$erendiraandrade='FALSO';
			}
			if ($juanjuarez->num_rows()>0){
				$juanjuarez=$juanjuarez->row();
			}
			else{
				$juanjuarez='FALSO';
			}
			if ($mauriciobarreto->num_rows()>0){
				$mauriciobarreto=$mauriciobarreto->row();
			}
			else{
				$mauriciobarreto='FALSO';
			}
			if ($salvadorjuarez->num_rows()>0){
				$salvadorjuarez=$salvadorjuarez->row();
			}
			else{
				$salvadorjuarez='FALSO';
			}
			if ($dianatopete->num_rows()>0){
				$dianatopete=$dianatopete->row();
			}
			else{
				$dianatopete='FALSO';
			}
			if ($sarahinoriega->num_rows()>0){
				$sarahinoriega=$sarahinoriega->row();
			}
			else{
				$sarahinoriega='FALSO';
			}
			if ($carlosvilla->num_rows()>0){
				$carlosvilla=$carlosvilla->row();
			}
			else{
				$carlosvilla='FALSO';
			}
			if ($eliasnunez->num_rows()>0){
				$eliasnunez=$eliasnunez->row();
			}
			else{
				$eliasnunez='FALSO';
			}
			if ($almarincon->num_rows()>0){
				$almarincon=$almarincon->row();
			}
			else{
				$almarincon='FALSO';
			}
			if ($angelesrodriguez->num_rows()>0){
				$angelesrodriguez=$angelesrodriguez->row();
			}
			else{
				$angelesrodriguez='FALSO';
			}
			
			$a = array(
	            	"Hildaceballos" => $Hildaceballos->row(),
	              	"Josecardenas" => $Josecardenas->row(),
	              	// "Leonardogutierrez" => $Leonardogutierrez->row(),
	              	
	              	"nicolascontreras" => $nicolascontreras->row(),
	              	"guillermorangel" => $guillermorangel,
	              	"SandraRammirez" => $SandraRammirez->row(),
	              	"joseGarcia" => $joseGarcia->row(),
	              	"arturogarcia" => $arturogarcia->row(),
	              	// "lilianarodriguez" => $lilianarodriguez->row(),

	              	"crispinguerra" => $crispinguerra->row(),
	              	"almaarreola" => $almaarreola->row(),
	              	"marthafarias" => $marthafarias->row(),
	              	"isisvillasernor" => $isisvillasernor->row(),
	              	"octavioaguilar" => $octavioaguilar->row(),
	              	"patriciaperegrina" => $patriciaperegrina->row(),
	              	// "gloriaarceo" => $gloriaarceo->row(),

	              	"janethpaz" => $janethpaz->row(),
	              	"juanaandres" => $juanaandres->row(),
	              	"sergioricardo" => $sergioricardo->row(),
	              	// "andresorozco" => $andresorozco->row(),

	              	"ramirotoscano" => $ramirotoscano->row(),
	              	"josebenavides" => $josebenavides,
	              	// "yulianaaguilar" => $yulianaaguilar,

	              	"SandrayolandaRammirez" => $SandrayolandaRammirez,
	              	"octaviotintos" => $octaviotintos->row(),
	              	"sergiosilva" => $sergiosilva,
	              	"leticiamendoza" => $leticiamendoza,
	              	// "getzemaniibarra" => $getzemaniibarra,

	              	"franciscoceballo" => $franciscoceballo->row(),
	              	"alfredohernandez" => $alfredohernandez,
	              	"saracernas" => $saracernas,
	              	"jooelpadilla" => $jooelpadilla,
	              	"socorrobayardo" => $socorrobayardo->row(),
	              	"erendiraandrade" => $erendiraandrade,

	              	"meylypastora" => $meylypastora,
	              	"hectormagana" => $hectormagana,
	              	"alfredoherrera" => $alfredoherrera->row(),
	              	"adelaidafernandez" => $adelaidafernandez,
	              	"juanjuarez" => $juanjuarez,

	              	"eusebiomesina" => $eusebiomesina,
	              	"beatrizinsunza" => $beatrizinsunza->row(),
	              	"selenelopez" => $selenelopez,
	              	"angelicaochoa" => $angelicaochoa,
	              	"mauriciobarreto" => $mauriciobarreto,

	              	"juanpinto" => $juanpinto->row(),
	              	"ricardosevilla" => $ricardosevilla,
	              	"raquelcardenas" => $raquelcardenas,
	              	"marcorodarte" => $marcorodarte,
	              	// "salvadorjuarez" => $salvadorjuarez->row(),

	              	"miguelgarcia" => $miguelgarcia,
	              	"armidanunes" => $armidanunes,
	              	"aldovega" => $aldovega,
	              	"sebastianesparza" => $sebastianesparza->row(),
	              	"teresahernandez" => $teresahernandez,
	              	"dianatopete" => $dianatopete,

	              	"marthasosa" => $marthasosa,
	              	"rosarioyeme" => $rosarioyeme->row(),
	              	"noraayala" => $noraayala,
	              	"sarahinoriega" => $sarahinoriega,

	              	"sergiosanchez" => $sergiosanchez,
	              	// "carlosvilla" => $carlosvilla->row(),

	              	"luisayala" => $luisayala,
	              	"lilafigueroa" => $lilafigueroa,
	              	"marthameza" => $marthameza,
	              	"veronicatorres" => $veronicatorres->row(),
	              	"gustavorerenteria" => $gustavorerenteria,
	              	"josefinaroblada" => $josefinaroblada,
	              	"eliasnunez" => $eliasnunez,

	              	"felicitaspena" => $felicitaspena->row(),
	              	"hildamoreno" => $hildamoreno,
	              	"almarincon" => $almarincon,
	              	
	               	"santiagochavez" => $santiagochavez,
	              	"judithgodinez" => $judithgodinez,
	              	"sergiomendoza" => $sergiomendoza,
	              	"angelesrodriguez" => $angelesrodriguez
	         	);
	        return $a;			
		}

		public function obtener_cuenta_alcaldias($fecha)
		{
			$hector = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'hectorinsua'");
			$maria = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'meabaroa'");
			$esmeralda = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'EsmePresidenta'");
			$pico = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'PicoZepeda'");
			$marcos = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'BarajasYescas'");
			$yulenny = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'Yulenny_Cortes'");
			$oswy = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'OswyDelgado'");
			$salomon = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'salo_salazar1'");
			$mario = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'MarioCarrillo01'");
			$arturo = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'DipArturoGarcia'");
			$blanca = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'BlancaPRI2015'");
			$manuel = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'DipManuelPR'");
			$esperanza = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'DipEsperanzaA'");
			$hiram = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'hiram1447'");
			#NUEVOS
			$oscar = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'OVPresidente'");
			$jaime = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'JaimeSoteloG'");
			$ruben = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'romo_ochoa'");
			$blancaU = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets from cuentas 
									  where fecha = '$fecha' and usuario = 'UrsuaBlanca'");
			if ($oscar->num_rows()>0){
				$oscar=$oscar->row();
			}
			else{
				$oscar='FALSO';
			}

			if ($jaime->num_rows()>0){
				$jaime=$jaime->row();
			}
			else{
				$jaime='FALSO';
			}

			if ($ruben->num_rows()>0){
				$ruben=$ruben->row();
			}
			else{
				$ruben='FALSO';
			}

			if ($blancaU->num_rows()>0){
				$blancaU=$blancaU->row();
			}
			else{
				$blancaU='FALSO';
			}

			$a = array(
	            "hector" => $hector->row(),
	            "maria" => $maria->row(),
	            "esmeralda" => $esmeralda->row(),
	            "pico" => $pico->row(),
	            "marcos" => $marcos->row(),
	            "yulenny" => $yulenny->row(),
	            "oswy" => $oswy->row(),
	            "salomon" => $salomon->row(),
	            "mario" => $mario->row(),
	            "arturo" => $arturo->row(),
	            "blanca" => $blanca->row(),
	            "manuel" => $manuel->row(),
	            "esperanza" => $esperanza->row(),
	            "hiram" => $hiram->row(),
	            "oscar" => $oscar,
	            "jaime" => $jaime,
	            "ruben" => $ruben,
	            "blancaU" => $blancaU
	        );
	        return $a;		
		}

		public function obtener_cuenta_partidos()
		{
			$pri = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRI' ORDER BY fecha ASC");
			$pan = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PAN' ORDER BY fecha ASC");
			$pna = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'NUEVA ALIANZA' ORDER BY fecha ASC");
			$pv = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'VERDE' ORDER BY fecha ASC");
			$prd = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRD' ORDER BY fecha ASC");
			$pt = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PT' ORDER BY fecha ASC");
			$pmc = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'MOVIMIENTO CIUDADANO' ORDER BY fecha ASC");
			$pm = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'MORENA' ORDER BY fecha ASC");
			$pes = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'ENCUENTRO SOCIAL' ORDER BY fecha ASC");
			$ph = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PARTIDO HUMANISTA' ORDER BY fecha ASC");
			
			if($pri->num_rows()>0)
			{
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
		public function obtener_cuenta_partidos_rango($fecha_inicio,$fecha_fin)
		{
			$pri = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRI' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$pan = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PAN' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pna = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'NUEVA ALIANZA' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pv = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'VERDE' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$prd = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PRD' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pt = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PT' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pmc = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'MOVIMIENTO CIUDADANO' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pm = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'MORENA' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$pes = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'ENCUENTRO SOCIAL' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
			$ph = $this->db->query("SELECT Megusta, PersonasHablan, fecha from partido 
									  where Partido = 'PARTIDO HUMANISTA' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin'
									  ORDER BY fecha ASC");
		
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


		public function obtener_cuenta_comoVamos()
		{
			$comoVamos = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'Comovamoscolima' ORDER BY fecha ASC");			

			if($comoVamos->num_rows()>0)
			{
				$a = array(
	                "comoVamos" => $comoVamos->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}
	}

?>