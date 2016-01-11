<?php
	class Modelo_inicio extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		//PRESIDENTES MUNICIPALES
		//Obtiene los datos de la cuenta de hector
		public function obtener_cuenta_hector()
		{
			$hector = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'hectorinsua'");
		
			if($hector->num_rows()>0)
			{
				return $hector->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de maria
		public function obtener_cuenta_maria()
		{
			$maria = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'meabaroa'");
		
			if($maria->num_rows()>0)
			{
				return $maria->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de esmeralda
		public function obtener_cuenta_esmeralda()
		{
			$esmeralda = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'EsmePresidenta'");
		
			if($esmeralda->num_rows()>0)
			{
				return $esmeralda->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de pico
		public function obtener_cuenta_pico()
		{
			$pico = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'PicoZepeda'");
		
			if($pico->num_rows()>0)
			{
				return $pico->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtiene los datos de la cuenta de marcos
		public function obtener_cuenta_marcos()
		{
			$marcos = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'BarajasYescas'");
		
			if($marcos->num_rows()>0)
			{
				return $marcos->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta Yulenny_Cortes
		public function obtener_cuenta_yulenny()
		{
			$yulenny = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Yulenny_Cortes'");
		
			if($yulenny->num_rows()>0)
			{
				return $yulenny->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta OswyDelgado
		public function obtener_cuenta_oswy()
		{
			$oswy = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'OswyDelgado'");
		
			if($oswy->num_rows()>0)
			{
				return $oswy->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta salo_salazar1
		public function obtener_cuenta_salomon()
		{
			$salomon = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'salo_salazar1'");
		
			if($salomon->num_rows()>0)
			{
				return $salomon->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta MarioCarrillo01
		public function obtener_cuenta_mario()
		{
			$mario = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MarioCarrillo01'");
		
			if($mario->num_rows()>0)
			{
				return $mario->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta DipArturoGarcia
		public function obtener_cuenta_arturo()
		{
			$arturo = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'DipArturoGarcia'");
		
			if($arturo->num_rows()>0)
			{
				return $arturo->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta BlancaPRI2015
		public function obtener_cuenta_blanca()
		{
			$blanca = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'BlancaPRI2015'");
		
			if($blanca->num_rows()>0)
			{
				return $blanca->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta DipManuelPR
		public function obtener_cuenta_manuel()
		{
			$manuel = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'DipManuelPR'");
		
			if($manuel->num_rows()>0)
			{
				return $manuel->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta DipEsperanzaA
		public function obtener_cuenta_esperanza()
		{
			$esperanza = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'DipEsperanzaA'");
		
			if($esperanza->num_rows()>0)
			{
				return $esperanza->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtiene los datos de la cuenta hiram1447
		public function obtener_cuenta_hiram()
		{
			$hiram = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'hiram1447'");
		
			if($hiram->num_rows()>0)
			{
				return $hiram->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}


		//DIPUTADOS LOCALES
		//Obtener cuenta de HildaCeballos01
		public function obtener_cuenta_hilda()
		{
			$hilda = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'HildaCeballos01'");
		
			if($hilda->num_rows()>0)
			{
				return $hilda->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		//Obtener cuenta de Rangel_G_
		public function obtener_cuenta_rangel()
		{
			$rangel = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Rangel_G_'");
		
			if($rangel->num_rows()>0)
			{
				return $rangel->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Vivi_Ram_A
		public function obtener_cuenta_viviana()
		{
			$viviana = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Vivi_Ram_A'");
		
			if($viviana->num_rows()>0)
			{
				return $viviana->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de crispindiputado 
		public function obtener_cuenta_crispin()
		{
			$crispin = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'crispindiputado'");
		
			if($crispin->num_rows()>0)
			{
				return $crispin->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de isisvillasil
		public function obtener_cuenta_isis()
		{
			$isis = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'isisvillasil'");
		
			if($isis->num_rows()>0)
			{
				return $isis->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JanethPazPonce
		public function obtener_cuenta_janeth()
		{
			$janeth = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JanethPazPonce'");
		
			if($janeth->num_rows()>0)
			{
				return $janeth->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JuanitaAndres
		public function obtener_cuenta_juanita()
		{
			$juanita = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JuanitaAndres'");
		
			if($juanita->num_rows()>0)
			{
				return $juanita->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de LupeBenavidesF
		public function obtener_cuenta_lupe()
		{
			$lupe = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'LupeBenavidesF'");
		
			if($lupe->num_rows()>0)
			{
				return $lupe->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de octaviotintos
		public function obtener_cuenta_octavio()
		{
			$octavio = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'octaviotintos'");
		
			if($octavio->num_rows()>0)
			{
				return $octavio->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de saracernas
		public function obtener_cuenta_sara()
		{
			$sara = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'saracernas'");
		
			if($sara->num_rows()>0)
			{
				return $sara->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de JoelPadilla2012
		public function obtener_cuenta_joel()
		{
			$joel = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'JoelPadilla2012'");
		
			if($joel->num_rows()>0)
			{
				return $joel->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de MeylyPastora
		public function obtener_cuenta_meyly()
		{
			$meyly = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MeylyPastora'");
		
			if($meyly->num_rows()>0)
			{
				return $meyly->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de hectormlara
		public function obtener_cuenta_hectorM()
		{
			$hector = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'hectormlara'");
		
			if($hector->num_rows()>0)
			{
				return $hector->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de eusebiomesina
		public function obtener_cuenta_eusebio()
		{
			$eusebio = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'eusebiomesina'");
		
			if($eusebio->num_rows()>0)
			{
				return $eusebio->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de MesinaTena
		public function obtener_cuenta_mesina()
		{
			$mesina = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'MesinaTena'");
		
			if($mesina->num_rows()>0)
			{
				return $mesina->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de PintoRgz
		public function obtener_cuenta_pinto()
		{
			$pinto = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'PintoRgz'");
		
			if($pinto->num_rows()>0)
			{
				return $pinto->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Armida_NG
		public function obtener_cuenta_armida()
		{
			$armida = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Armida_NG'");
		
			if($armida->num_rows()>0)
			{
				return $armida->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de amary_landa
		public function obtener_cuenta_amary()
		{
			$amary = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'amary_landa'");
		
			if($amary->num_rows()>0)
			{
				return $amary->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Sergio_SanchezO
		public function obtener_cuenta_sergio()
		{
			$sergio = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Sergio_SanchezO'");
		
			if($sergio->num_rows()>0)
			{
				return $sergio->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de Martha_Meza_ 
		public function obtener_cuenta_marthaM()
		{
			$martha = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'Martha_Meza_'");
		
			if($martha->num_rows()>0)
			{
				return $martha->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de marserranos
		public function obtener_cuenta_felicitas()
		{
			$felicitas = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'marserranos'");
		
			if($felicitas->num_rows()>0)
			{
				return $felicitas->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}
		
		//Obtener cuenta de SantiagoCh2Tec
		public function obtener_cuenta_santiago()
		{
			$santiago = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
									   siguiendo, tweets from cuentas where fecha 
									   in (select max(fecha) from cuentas) and 
									   usuario = 'SantiagoCh2Tec'");
		
			if($santiago->num_rows()>0)
			{
				return $santiago->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener valoracion de comentarios de nacho
		public function valoracion_nacho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and fecha >= '2015-12-01' and
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%ConNachoSeguro%' 
										  or texto LIKE '%FormulaGanadora%' or texto LIKE '%jips%'
										  or texto LIKE '%JuntosNadieNosPara%' or texto LIKE '%JTConNacho%'
										  or texto LIKE '%JuntosHacemosMás%' or texto LIKE '%JuntosLoEstamosLogrando%' or texto LIKE '%JIPS2015%'
										  or texto LIKE '%JIPSColima%' or texto LIKE '%jipsvdea%' or texto LIKE '%jips_usuario%'
										  or texto LIKE '%JoveNachos%' or texto LIKE '%LoEstamosLogrando%' or texto LIKE '%SoyNachista%'
										  or texto LIKE '%MiSelfiecoNacho%' or texto LIKE '%#Responsabilidad%' or texto LIKE '%QueTuGanes%'
										  or texto LIKE '%nachoperalta%' or texto LIKE '%NachoPropone%' or texto LIKE '%NachoGobernador%'
										  or texto LIKE '%NachoVotoSeguro%' or texto LIKE '%NachoGano%' or texto LIKE '%VotaPri%' or texto LIKE '%NachoColimaEstaContigo%'
										  or hashtags LIKE '%ElBuenoEsNacho%')"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and fecha >= '2015-12-01' and
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%ConNachoSeguro%' 
										  or texto LIKE '%FormulaGanadora%' or texto LIKE '%jips%'
										  or texto LIKE '%JuntosNadieNosPara%' or texto LIKE '%JTConNacho%'
										  or texto LIKE '%JuntosHacemosMás%' or texto LIKE '%JuntosLoEstamosLogrando%' or texto LIKE '%JIPS2015%'
										  or texto LIKE '%JIPSColima%' or texto LIKE '%jipsvdea%' or texto LIKE '%jips_usuario%'
										  or texto LIKE '%JoveNachos%' or texto LIKE '%LoEstamosLogrando%' or texto LIKE '%SoyNachista%'
										  or texto LIKE '%MiSelfiecoNacho%' or texto LIKE '%#Responsabilidad%' or texto LIKE '%QueTuGanes%'
										  or texto LIKE '%nachoperalta%' or texto LIKE '%NachoPropone%' or texto LIKE '%NachoGobernador%'
										  or texto LIKE '%NachoVotoSeguro%' or texto LIKE '%NachoGano%' or texto LIKE '%VotaPri%' or texto LIKE '%NachoColimaEstaContigo%'
										  or hashtags LIKE '%ElBuenoEsNacho%')"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and fecha >= '2015-12-01' and
										  (texto LIKE '%nachoperaltacol%' or texto LIKE '%ConNachoSeguro%' 
										  or texto LIKE '%FormulaGanadora%' or texto LIKE '%jips%'
										  or texto LIKE '%JuntosNadieNosPara%' or texto LIKE '%JTConNacho%'
										  or texto LIKE '%JuntosHacemosMás%' or texto LIKE '%JuntosLoEstamosLogrando%' or texto LIKE '%JIPS2015%'
										  or texto LIKE '%JIPSColima%' or texto LIKE '%jipsvdea%' or texto LIKE '%jips_usuario%'
										  or texto LIKE '%JoveNachos%' or texto LIKE '%LoEstamosLogrando%' or texto LIKE '%SoyNachista%'
										  or texto LIKE '%MiSelfiecoNacho%' or texto LIKE '%#Responsabilidad%' or texto LIKE '%QueTuGanes%'
										  or texto LIKE '%nachoperalta%' or texto LIKE '%NachoPropone%' or texto LIKE '%NachoGobernador%'
										  or texto LIKE '%NachoVotoSeguro%' or texto LIKE '%NachoGano%' or texto LIKE '%VotaPri%' or texto LIKE '%NachoColimaEstaContigo%'
										  or hashtags LIKE '%ElBuenoEsNacho%')"
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
		public function valoracion_jorge()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and fecha >= '2015-12-01' and
										  (texto LIKE '%JL_Preciado_%' or texto LIKE '%DesdeAbajoConTrabajo%' 
										  or texto LIKE '%ClaroQuePodemos%' or texto LIKE '%AlegrateYaSeVan%'
										  or texto LIKE '%JorgeLuis %' or texto LIKE '%YaSeVan%' 
										  or texto LIKE '%AlégrateDeQueSeVanSeVan%' or texto LIKE '%DeQueSeVanSeVan%'
										  or texto LIKE '%YoSoy1DeLos7%')"  
										);

			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and fecha >= '2015-12-01' and
										  (texto LIKE '%JL_Preciado_%' or texto LIKE '%DesdeAbajoConTrabajo%' 
										  or texto LIKE '%ClaroQuePodemos%' or texto LIKE '%AlegrateYaSeVan%'
										  or texto LIKE '%JorgeLuis %' or texto LIKE '%YaSeVan%' 
										  or texto LIKE '%AlégrateDeQueSeVanSeVan%' or texto LIKE '%DeQueSeVanSeVan%'
										  or texto LIKE '%YoSoy1DeLos7%')"   
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and fecha >= '2015-12-01' and
										  (texto LIKE '%JL_Preciado_%' or texto LIKE '%DesdeAbajoConTrabajo%' 
										  or texto LIKE '%ClaroQuePodemos%' or texto LIKE '%AlegrateYaSeVan%'
										  or texto LIKE '%JorgeLuis %' or texto LIKE '%YaSeVan%' 
										  or texto LIKE '%AlégrateDeQueSeVanSeVan%' or texto LIKE '%DeQueSeVanSeVan%'
										  or texto LIKE '%YoSoy1DeLos7%')"    
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

		//Obtener valoracion de comentarios de Locho
		public function valoracion_locho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and fecha >= '2015-12-01' and
										  (texto LIKE '%leonciomoranL8%' or texto LIKE '%DefiendeColima%' 
										  or texto LIKE '%MovimientoCiudadano%' or texto LIKE '%CambiarLaHistoria%'
										  or texto LIKE '%TodosConL8cho%' or texto LIKE '%SigueColima%'
										  or texto LIKE '%AlcaldesCiudadanos%' or texto LIKE '%LochoSi%'
										  or texto LIKE '%8DeLocho%')"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and fecha >= '2015-12-01' and
										  (texto LIKE '%leonciomoranL8%' or texto LIKE '%DefiendeColima%' 
										  or texto LIKE '%MovimientoCiudadano%' or texto LIKE '%CambiarLaHistoria%'
										  or texto LIKE '%TodosConL8cho%' or texto LIKE '%SigueColima%'
										  or texto LIKE '%AlcaldesCiudadanos%' or texto LIKE '%LochoSi%'
										  or texto LIKE '%8DeLocho%')"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and fecha >= '2015-12-01' and
										  (texto LIKE '%leonciomoranL8%' or texto LIKE '%DefiendeColima%' 
										  or texto LIKE '%MovimientoCiudadano%' or texto LIKE '%CambiarLaHistoria%'
										  or texto LIKE '%TodosConL8cho%' or texto LIKE '%SigueColima%'
										  or texto LIKE '%AlcaldesCiudadanos%' or texto LIKE '%LochoSi%'
										  or texto LIKE '%8DeLocho%')"
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

		//Obtener valoracion de comentarios de Martha
		public function valoracion_martha()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and fecha >= '2015-12-01' and
										  (texto LIKE '%MarthaZepeda_%' or texto LIKE '%PRDcolima%' 
										  or texto LIKE '%PRD%' or texto LIKE '%ComoTú%'
										  or texto LIKE '%ComoTu%' or texto LIKE '%EsHoraDelPRD%'
										  or texto LIKE '%SomosPRD%' or texto LIKE '%SabemosGobernar%'
										  or texto LIKE '%NuevaIzquierda%' or texto LIKE '%GobernadoraHonesta%'
										  or texto LIKE '%MejorMujer%' or texto LIKE '%votaPRD%'
										  or texto LIKE '%YoPropongo%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and fecha >= '2015-12-01' and
										  (texto LIKE '%MarthaZepeda_%' or texto LIKE '%PRDcolima%' 
										  or texto LIKE '%PRD%' or texto LIKE '%ComoTú%'
										  or texto LIKE '%ComoTu%' or texto LIKE '%EsHoraDelPRD%'
										  or texto LIKE '%SomosPRD%' or texto LIKE '%SabemosGobernar%'
										  or texto LIKE '%NuevaIzquierda%' or texto LIKE '%GobernadoraHonesta%'
										  or texto LIKE '%MejorMujer%' or texto LIKE '%votaPRD%'
										  or texto LIKE '%YoPropongo%')" 
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and fecha >= '2015-12-01' and
										  (texto LIKE '%MarthaZepeda_%' or texto LIKE '%PRDcolima%' 
										  or texto LIKE '%PRD%' or texto LIKE '%ComoTú%'
										  or texto LIKE '%ComoTu%' or texto LIKE '%EsHoraDelPRD%'
										  or texto LIKE '%SomosPRD%' or texto LIKE '%SabemosGobernar%'
										  or texto LIKE '%NuevaIzquierda%' or texto LIKE '%GobernadoraHonesta%'
										  or texto LIKE '%MejorMujer%' or texto LIKE '%votaPRD%'
										  or texto LIKE '%YoPropongo%')" 
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

		//Obtener valoracion de comentarios de Indira
		public function valoracion_indira()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%indira_vizcaino%' or texto LIKE '%ConIndiraYoSi%' 
										   or texto LIKE '%ComoTú%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%indira_vizcaino%' or texto LIKE '%ConIndiraYoSi%'
										   or texto LIKE '%ComoTú%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%indira_vizcaino%' or texto LIKE '%ConIndiraYoSi%'
										   or texto LIKE '%ComoTú%')"
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

		//Obtener valoracion de comentarios de Kike
		public function valoracion_kike()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%kikerojas007%' or texto LIKE '%KikeSí%' 
										   or texto LIKE '%KikeEsMejor%' or texto LIKE '%PRI_Colima%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%kikerojas007%' or texto LIKE '%KikeSí%' 
										   or texto LIKE '%KikeEsMejor%' or texto LIKE '%PRI_Colima%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%kikerojas007%' or texto LIKE '%KikeSí%' 
										   or texto LIKE '%KikeEsMejor%' or texto LIKE '%PRI_Colima%')"
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

		//Obtener valoracion de comentarios de Norma Galindo
		public function valoracion_norma()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%NormaGdeV%' or texto LIKE '%NormaGalindo%' 
										   or texto LIKE '%NormaDiputadaFederal%' or texto LIKE '%TrabajemosyDecidamosJuntos%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%NormaGdeV%' or texto LIKE '%NormaGalindo%' 
										   or texto LIKE '%NormaDiputadaFederal%' or texto LIKE '%TrabajemosyDecidamosJuntos%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%NormaGdeV%' or texto LIKE '%NormaGalindo%' 
										   or texto LIKE '%NormaDiputadaFederal%' or texto LIKE '%TrabajemosyDecidamosJuntos%')"
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

		//Obtener valoracion de comentarios de Hilda
		public function valoracion_hilda()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%HildaCeballos01%' or texto LIKE '%Distrito1%' 
										   or texto LIKE '%BrigadaEmetista%' or texto LIKE '%DistritoLocal1%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%HildaCeballos01%' or texto LIKE '%Distrito1%' 
										   or texto LIKE '%BrigadaEmetista%' or texto LIKE '%DistritoLocal1%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%HildaCeballos01%' or texto LIKE '%Distrito1%' 
										   or texto LIKE '%BrigadaEmetista%' or texto LIKE '%DistritoLocal1%')"
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

		//Obtener valoracion de comentarios de Yadira
		public function valoracion_yadira()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%yadiraturquesa%' or texto LIKE '%juventudturquesa%' 
										   or texto LIKE '%EligeTurquesa%' or texto LIKE '%VotaNuevaAlianza%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%yadiraturquesa%' or texto LIKE '%juventudturquesa%' 
										   or texto LIKE '%EligeTurquesa%' or texto LIKE '%VotaNuevaAlianza%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%yadiraturquesa%' or texto LIKE '%juventudturquesa%' 
										   or texto LIKE '%EligeTurquesa%' or texto LIKE '%VotaNuevaAlianza%')"
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

		//Obtener valoracion de comentarios de Guillermo
		public function valoracion_guillermo()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%Rangel_G_%' or texto LIKE '%TUPALABRACUENTA%' 
										   or texto LIKE '%TuPalabraCuenta%' or texto LIKE '%YoConMemo%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%Rangel_G_%' or texto LIKE '%TUPALABRACUENTA%' 
										   or texto LIKE '%TuPalabraCuenta%' or texto LIKE '%YoConMemo%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%Rangel_G_%' or texto LIKE '%TUPALABRACUENTA%' 
										   or texto LIKE '%TuPalabraCuenta%' or texto LIKE '%YoConMemo%')"
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

		//Obtener valoracion de comentarios de Alma Delia
		public function valoracion_alma()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%AlmaDelia_D3%' or texto LIKE '%AlmaDeliaVotoSeguro%' 
										   or texto LIKE '%ConAlmaYCorazónPorTi%' or texto LIKE '%VotaAlmaDelia%'
										   or texto LIKE '%YoSoyAD3%')"  
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%AlmaDelia_D3%' or texto LIKE '%AlmaDeliaVotoSeguro%' 
										   or texto LIKE '%ConAlmaYCorazónPorTi%' or texto LIKE '%VotaAlmaDelia%'
										   or texto LIKE '%YoSoyAD3%')"  
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%AlmaDelia_D3%' or texto LIKE '%AlmaDeliaVotoSeguro%' 
										   or texto LIKE '%ConAlmaYCorazónPorTi%' or texto LIKE '%VotaAlmaDelia%'
										   or texto LIKE '%YoSoyAD3%')"
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

		//Obtener valoracion de comentarios de Janeth
		public function valoracion_janeth()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%JanethPazPonce%'
										or texto LIKE '%TrabajamosParaTi%'
										or texto LIKE '%DistritoIV%'
										or texto LIKE '%JanethDiputada%'
										or texto LIKE '%ComalaVotaPAN%'
										or texto LIKE '%YaGanamos%'
										or texto LIKE '%EnriquePresidente%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%JanethPazPonce%'
										or texto LIKE '%TrabajamosParaTi%'
										or texto LIKE '%DistritoIV%'
										or texto LIKE '%JanethDiputada%'
										or texto LIKE '%ComalaVotaPAN%'
										or texto LIKE '%YaGanamos%'
										or texto LIKE '%EnriquePresidente%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%JanethPazPonce%'
										or texto LIKE '%TrabajamosParaTi%'
										or texto LIKE '%DistritoIV%'
										or texto LIKE '%JanethDiputada%'
										or texto LIKE '%ComalaVotaPAN%'
										or texto LIKE '%YaGanamos%'
										or texto LIKE '%EnriquePresidente%')" 
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

		//Obtener valoracion de comentarios de juanita
		public function valoracion_juanita()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%JuanitaAndres%'
										or texto LIKE '%ResultadosParaTi%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%JuanitaAndres%'
										or texto LIKE '%ResultadosParaTi%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%JuanitaAndres%'
										or texto LIKE '%ResultadosParaTi%')" 
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

		//Obtener valoracion de comentarios de lupe benavides
		public function valoracion_lupe()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%LupeBenavidesF%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%LupeBenavidesF%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%LupeBenavidesF%')" 
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

		//Obtener valoracion de comentarios de octavio
		public function valoracion_octavio()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%octaviotintos%'
										or texto LIKE '%HonestamenteTeVoyAServir%'
										or texto LIKE '%YoPropongo%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%octaviotintos%'
										or texto LIKE '%HonestamenteTeVoyAServir%'
										or texto LIKE '%YoPropongo%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%octaviotintos%'
										or texto LIKE '%HonestamenteTeVoyAServir%'
										or texto LIKE '%YoPropongo%')" 
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

		//Obtener valoracion de comentarios de sara
		public function valoracion_sara()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%saracernas%'
										or texto LIKE '%TuVozEsMiVoz%'
										or texto LIKE '%DiputadaDistrito7%'
										or texto LIKE '%PorLasCausasDeLaGente%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%saracernas%'
										or texto LIKE '%TuVozEsMiVoz%'
										or texto LIKE '%DiputadaDistrito7%'
										or texto LIKE '%PorLasCausasDeLaGente%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%saracernas%'
										or texto LIKE '%TuVozEsMiVoz%'
										or texto LIKE '%DiputadaDistrito7%'
										or texto LIKE '%PorLasCausasDeLaGente%')" 
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

		//Obtener valoracion de comentarios de meyly
		public function valoracion_meyly()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%MeylyPastora%'
										or texto LIKE '%Atrévete%'
										or texto LIKE '%MeylyDiputadaLocal%'
										or texto LIKE '%VIII%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%MeylyPastora%'
										or texto LIKE '%Atrévete%'
										or texto LIKE '%MeylyDiputadaLocal%'
										or texto LIKE '%VIII%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%MeylyPastora%'
										or texto LIKE '%Atrévete%'
										or texto LIKE '%MeylyDiputadaLocal%'
										or texto LIKE '%VIII%')" 
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

		//Obtener valoracion de comentarios de hector
		public function valoracion_hector()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%hectormlara%'
										or texto LIKE '%DistritoVIII%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%hectormlara%'
										or texto LIKE '%DistritoVIII%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%hectormlara%'
										or texto LIKE '%DistritoVIII%')" 
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

		//Obtener valoracion de comentarios de juan carlos
		public function valoracion_juan()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%PintoRgz%'
										or texto LIKE '%BeneficiosParaTodos%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%PintoRgz%'
										or texto LIKE '%BeneficiosParaTodos%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%PintoRgz%'
										or texto LIKE '%BeneficiosParaTodos%')" 
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

		//Obtener valoracion de comentarios de armida
		public function valoracion_armida()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%Armida_NG%'
										or texto LIKE '%ArmidaDiputada%'
										or texto LIKE '%VotaPRI%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%Armida_NG%'
										or texto LIKE '%ArmidaDiputada%'
										or texto LIKE '%VotaPRI%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%Armida_NG%'
										or texto LIKE '%ArmidaDiputada%'
										or texto LIKE '%VotaPRI%')" 
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
		//Obtener valoracion de comentarios de martha
		public function valoracion_marthaS()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%martha_sosa1%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%martha_sosa1%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%martha_sosa1%')" 
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

		//Obtener valoracion de comentarios de esperanza
		public function valoracion_esperanza()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%DipEsperanzaA%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%DipEsperanzaA%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%DipEsperanzaA%')" 
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

		//Obtener valoracion de comentarios de oscar
		public function valoracion_oscar()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%OVPresidente%' 
										or texto LIKE '%renovaciondinamica%'
										or texto LIKE '%vamoscontodo%'
										or texto LIKE '%RenovarladinamicadelaCiudad%' 										
										or texto LIKE '%yoconoscarsi%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%OVPresidente%' 
										or texto LIKE '%renovaciondinamica%'
										or texto LIKE '%vamoscontodo%'
										or texto LIKE '%RenovarladinamicadelaCiudad%' 										
										or texto LIKE '%yoconoscarsi%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%OVPresidente%' 
										or texto LIKE '%renovaciondinamica%'
										or texto LIKE '%vamoscontodo%'
										or texto LIKE '%RenovarladinamicadelaCiudad%' 										
										or texto LIKE '%yoconoscarsi%')" 
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

		//Obtener valoracion de comentarios de héctor
		public function valoracion_hectorI()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%hectorinsua%' 
										or texto LIKE '%ElCambioQueQuiereLaGente%' 
										or texto LIKE '%VotaHectorInsua%' 
										or texto LIKE '%VotaPan%' 
										or texto LIKE '%VotaUtil%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%hectorinsua%' 
										or texto LIKE '%ElCambioQueQuiereLaGente%' 
										or texto LIKE '%VotaHectorInsua%' 
										or texto LIKE '%VotaPan%' 
										or texto LIKE '%VotaUtil%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%hectorinsua%' 
										or texto LIKE '%ElCambioQueQuiereLaGente%' 
										or texto LIKE '%VotaHectorInsua%' 
										or texto LIKE '%VotaPan%' 
										or texto LIKE '%VotaUtil%')" 
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

		//Obtener valoracion de comentarios de abaroa
		public function valoracion_abaroa()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%meabaroa%'
										or texto LIKE '%ImpactoUrbano%'
										or texto LIKE '%ImpactoEconómico%'
										or texto LIKE '%CeroCorrucpión%'
										or texto LIKE '%ImpactoRural%'
										or texto LIKE '%ImpactoSocial%'
										or texto LIKE '%GobiernoCiudadano%'
										or texto LIKE '%MovimientoCiudadano%'
										or texto LIKE '%CuentasClaras%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%meabaroa%'
										or texto LIKE '%ImpactoUrbano%'
										or texto LIKE '%ImpactoEconómico%'
										or texto LIKE '%CeroCorrucpión%'
										or texto LIKE '%ImpactoRural%'
										or texto LIKE '%ImpactoSocial%'
										or texto LIKE '%GobiernoCiudadano%'
										or texto LIKE '%MovimientoCiudadano%'
										or texto LIKE '%CuentasClaras%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%meabaroa%'
										or texto LIKE '%ImpactoUrbano%'
										or texto LIKE '%ImpactoEconómico%'
										or texto LIKE '%CeroCorrucpión%'
										or texto LIKE '%ImpactoRural%'
										or texto LIKE '%ImpactoSocial%'
										or texto LIKE '%GobiernoCiudadano%'
										or texto LIKE '%MovimientoCiudadano%'
										or texto LIKE '%CuentasClaras%')" 
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

		//Obtener valoracion de comentarios de esmeralda
		public function valoracion_esmeralda()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%EsmePresidenta%'
										or texto LIKE '%EsNuestroMomento%'
										or texto LIKE '%YoMeMuevo%'
										or texto LIKE '%EsmeraldaSíCumple%'
										or texto LIKE '%EsmeraldaEsGarantía%'
										or texto LIKE '%EsmeraldaPresidenta%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%EsmePresidenta%'
										or texto LIKE '%EsNuestroMomento%'
										or texto LIKE '%YoMeMuevo%'
										or texto LIKE '%EsmeraldaSíCumple%'
										or texto LIKE '%EsmeraldaEsGarantía%'
										or texto LIKE '%EsmeraldaPresidenta%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%EsmePresidenta%'
										or texto LIKE '%EsNuestroMomento%'
										or texto LIKE '%YoMeMuevo%'
										or texto LIKE '%EsmeraldaSíCumple%'
										or texto LIKE '%EsmeraldaEsGarantía%'
										or texto LIKE '%EsmeraldaPresidenta%')" 
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

		//Obtener valoracion de comentarios de salomon
		public function valoracion_salomon()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%salo_salazar1%'
										or texto LIKE '%ResultadosParaComala%'
										or texto LIKE '%ResultadosParaTi%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%salo_salazar1%'
										or texto LIKE '%ResultadosParaComala%'
										or texto LIKE '%ResultadosParaTi%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%salo_salazar1%'
										or texto LIKE '%ResultadosParaComala%'
										or texto LIKE '%ResultadosParaTi%')" 
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

		//Obtener valoracion de comentarios de mario
		public function valoracion_mario()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%MarioCarrillo01%'
										or texto LIKE '%HagámosloNosotros%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%MarioCarrillo01%'
										or texto LIKE '%HagámosloNosotros%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%MarioCarrillo01%'
										or texto LIKE '%HagámosloNosotros%')" 
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

		//Obtener valoracion de comentarios de blanca Rocha
		public function valoracion_blanca()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%BlancaPRI2015%'
										or texto LIKE '%TeMerecesUnMejorCuauhtémoc%'
										or texto LIKE '%SeMerecenUnMejorCuauhtémoc%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%BlancaPRI2015%'
										or texto LIKE '%TeMerecesUnMejorCuauhtémoc%'
										or texto LIKE '%SeMerecenUnMejorCuauhtémoc%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%BlancaPRI2015%'
										or texto LIKE '%TeMerecesUnMejorCuauhtémoc%'
										or texto LIKE '%SeMerecenUnMejorCuauhtémoc%')" 
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

		//Obtener valoracion de comentarios de francisco (pico)
		public function valoracion_pico()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%PicoZepeda%'
										or texto LIKE '%PicoPresidente%'
										or texto LIKE '%TeQuieroManzanilloMejor%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%PicoZepeda%'
										or texto LIKE '%PicoPresidente%'
										or texto LIKE '%TeQuieroManzanilloMejor%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%PicoZepeda%'
										or texto LIKE '%PicoPresidente%'
										or texto LIKE '%TeQuieroManzanilloMejor%')" 
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

		//Obtener valoracion de comentarios de arturo
		public function valoracion_arturo()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%DipArturoGarcia%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%DipArturoGarcia%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%DipArturoGarcia%')" 
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

		//Obtener valoracion de comentarios de oswy
		public function valoracion_oswy()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM twitt WHERE valoracion = 1 and 
										  (texto LIKE '%OswyDelgado%'
										or texto LIKE '%CercaDeTiGanaremos%'
										or texto LIKE '%CercaDeTi%')" 
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM twitt WHERE valoracion = 2 and 
										  (texto LIKE '%OswyDelgado%'
										or texto LIKE '%CercaDeTiGanaremos%'
										or texto LIKE '%CercaDeTi%')"    
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM twitt WHERE valoracion = 3 and 
										  (texto LIKE '%OswyDelgado%'
										or texto LIKE '%CercaDeTiGanaremos%'
										or texto LIKE '%CercaDeTi%')" 
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
		
		//Obtener coordenadas de los comentarios sobre politica
		public function obtener_coordenadas($municipio)
		{
			$resultado_gobernadores=$this->db->query("SELECT DISTINCT latitud,longitud,municipio from coordenadas 
										inner join twitt on twitt.id=coordenadas.id_twitt
										where twitt.municipio='$municipio' and fecha >= '2015-12-01' and
										  (texto LIKE '%nachoperaltacol%' 
										  or texto LIKE '%jips%' 
										  or texto LIKE '%JuntosNadieNosPara%' 
										  or texto LIKE '%JIPS2015%' 
										  or texto LIKE '%SoyNachista%' 
										  or texto LIKE '%MiSelfiecoNacho%'	
										  or texto LIKE '%ConNachoSeguro%' 
										  or texto LIKE '%NachoGobernador%' 
										  or texto LIKE '%VotaPri%'
										  or texto LIKE '%NachoVotoSeguro%' 
										  or texto LIKE '%NachoColimaEstaContigo%' 
										  or texto LIKE '%NachoGano%' 
										  or texto LIKE '%FormulaGanadora%' 
										  or texto LIKE '%JoveNachos%' 
										  or texto LIKE '%JTConNacho%' 
										  or texto LIKE '%JuntosHacemosMás%' 
										  or texto LIKE '%JuntosLoEstamosLogrando%' 
										  or texto LIKE '%LoEstamosLogrando%' 
										  or texto LIKE '%nacho peralta%' 
										  or texto LIKE '%nacho%' 
										  or texto LIKE '%pri%'	
										  or texto LIKE '%NachoPropone%' 
										  or texto LIKE '%JorgeLuis%' 
										  or texto LIKE '%AlegrateYaSeVan%' 
										  or texto LIKE '%DesdeAbajoConTrabajo%' 
										  or texto LIKE '%ClaroQuePodemos%' 
										  or texto LIKE '%YaSeVan%' 
										  or texto LIKE '%JL_Preciado_%' 
										  or texto LIKE '%AlégrateDeQueSeVanSeVan%' 
										  or texto LIKE '%HagámosloNosotros%' 
										  or texto LIKE '%TúTienesElPodio%' 
										  or texto LIKE '%EncuentroSocial%' 
										  or texto LIKE '%PartidoEncuentroSocial%' 
										  or texto LIKE '%PASALAVOZ%' 
										  or texto LIKE '%SoyHumanista%' 
										  or texto LIKE '%PartidoHumanista%' 
										  or texto LIKE '%UnidadHumanista%' 
										  or texto LIKE '%Humanista%' 
										  or texto LIKE '%TodosConL8cho%' 
										  or texto LIKE '%CambiarLaHistoria%' 
										  or texto LIKE '%MovimientoCiudadano%' 
										  or texto LIKE '%DefiendeColima%' 
										  or texto LIKE '%leonciomoranL8%' 
										  or texto LIKE '%CambiarLaHistoria%' 
										  or texto LIKE '%SigueColima%' 
										  or texto LIKE '%Locho%' 
										  or texto LIKE '%Locho Morán%' 
										  or texto LIKE '%PRDcolima%' 
										  or texto LIKE '%PRD%' 
										  or texto LIKE '%ComoTú%' 
										  or texto LIKE '%ComoTu%' 
										  or texto LIKE '%EsHoraDelPRD%' 
										  or texto LIKE '%SomosPRD%' 
										  or texto LIKE '%SabemosGobernar%' 
										  or texto LIKE '%NuevaIzquierda%'
										  or texto LIKE '%MarthaZepeda_%' 
										  or texto LIKE '%DebateColima%')");
			$a = array(
                "gobernadores" => $resultado_gobernadores->result()
	        );	            
	        return $a;
		}

		//Obtener hashtags Gobernadores para la Nube de palabras
		public function obtener_hashtags_gobernadores($mes)
		{	
			$hashtags=$this->db->query("SELECT hashtags FROM `twitt` WHERE (hashtags LIKE '%nachoperaltacol%' 
										  or hashtags LIKE '%jips%' 
										  or hashtags LIKE '%ElBuenoEsNacho%' 
										  or hashtags LIKE '%JuntosNadieNosPara%' 
										  or hashtags LIKE '%JIPS2015%' 
										  or hashtags LIKE '%SoyNachista%' 
										  or hashtags LIKE '%MiSelfiecoNacho%'	
										  or hashtags LIKE '%ConNachoSeguro%' 
										  or hashtags LIKE '%NachoGobernador%' 
										  or hashtags LIKE '%VotaPri%'
										  or hashtags LIKE '%NachoVotoSeguro%' 
										  or hashtags LIKE '%NachoColimaEstaContigo%' 
										  or hashtags LIKE '%NachoGano%' 
										  or hashtags LIKE '%FormulaGanadora%' 
										  or hashtags LIKE '%JoveNachos%' 
										  or hashtags LIKE '%JTConNacho%' 
										  or hashtags LIKE '%JuntosHacemosMás%' 
										  or hashtags LIKE '%JuntosLoEstamosLogrando%' 
										  or hashtags LIKE '%LoEstamosLogrando%' 
										  or hashtags LIKE '%nachoperalta%' 
										  or hashtags LIKE '%NachoPropone%' 
										  or hashtags LIKE '%JorgeLuis%' 
										  or hashtags LIKE '%presiadoasesino%' 
										  or hashtags LIKE '%AlegrateYaSeVan%' 
										  or hashtags LIKE '%DesdeAbajoConTrabajo%' 
										  or hashtags LIKE '%ClaroQuePodemos%' 
										  or hashtags LIKE '%YaSeVan%' 
										  or hashtags LIKE '%JL_Preciado_%' 
										  or hashtags LIKE '%AlégrateDeQueSeVanSeVan%' 
										  or hashtags LIKE '%HagámosloNosotros%' 
										  or hashtags LIKE '%TúTienesElPodio%' 
										  or hashtags LIKE '%EncuentroSocial%' 
										  or hashtags LIKE '%PartidoEncuentroSocial%' 
										  or hashtags LIKE '%SoyHumanista%' 
										  or hashtags LIKE '%PartidoHumanista%' 
										  or hashtags LIKE '%UnidadHumanista%' 
										  or hashtags LIKE '%Humanista%' 
										  or hashtags LIKE '%TodosConL8cho%' 
										  or hashtags LIKE '%CambiarLaHistoria%' 
										  or hashtags LIKE '%MovimientoCiudadano%' 
										  or hashtags LIKE '%DefiendeColima%' 
										  or hashtags LIKE '%leonciomoranL8%' 
										  or hashtags LIKE '%CambiarLaHistoria%' 
										  or hashtags LIKE '%SigueColima%' 
										  or hashtags LIKE '%LochoMorán%' 
										  or hashtags LIKE '%PRDcolima%' 
										  or hashtags LIKE '%PRD%' 
										  or hashtags LIKE '%ComoTú%' 
										  or hashtags LIKE '%ComoTu%' 
										  or hashtags LIKE '%EsHoraDelPRD%' 
										  or hashtags LIKE '%SomosPRD%' 
										  or hashtags LIKE '%SabemosGobernar%' 
										  or hashtags LIKE '%NuevaIzquierda%'
										  or hashtags LIKE '%MarthaZepeda_%' 
										  or hashtags LIKE '%DebateColima%') 
										and MONTH(fecha) = '$mes'and hashtags <>''");
			if($hashtags->num_rows()>0)
			{
				return $hashtags->result();
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener hashtags Dip_federales
		public function obtener_hashtags_dip_federales($mes)
		{
			$hashtags=$this->db->query("SELECT hashtags FROM `twitt` WHERE (hashtags LIKE '%soygp%' or hashtags 
										LIKE '%kikerojas007%' or hashtags LIKE '%indira_vizcaino%' or hashtags LIKE '%NormaGdeV%' 
										or hashtags LIKE '%olave_nery%'or hashtags LIKE '%TrabajandoPorLoQueMásQuieres%' 										
										or hashtags LIKE '%KikeSí%' or hashtags LIKE '%KikeEsMejor%' or hashtags 
										LIKE '%PRI_Colima%' or hashtags LIKE '%ConIndiraYoSi%' or hashtags LIKE '%ComoTú%' 
										or hashtags LIKE '%Elecciones2015%' or hashtags LIKE '%NormaGalindo%' or hashtags LIKE '%NormaDiputadaFederal%'
										or hashtags LIKE '%TrabajemosyDecidamosJuntos%') and MONTH(fecha) = '$mes' and hashtags <>''");
			if($hashtags->num_rows()>0)
			{
				return $hashtags->result();
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener hashtags Dip_locales
		public function obtener_hashtags_dip_locales($mes)
		{
			$hashtags=$this->db->query("SELECT hashtags FROM `twitt` WHERE (
										hashtags LIKE '%HildaCeballos01%' 
										or hashtags LIKE '%Distrito1%' 
										or hashtags LIKE '%BrigadaEmetista%' 
										or hashtags LIKE '%yadiraturquesa%' 
										or hashtags LIKE '%NuevaAlianza%'
										or hashtags LIKE '%turquesa%' 										
										or hashtags LIKE '%VotaTurquesa%' 
										or hashtags LIKE '%juventudturquesa%' 
										or hashtags LIKE '%EligeTurquesa%' 
										or hashtags LIKE '%VotaNuevaAlianza%' 
										or hashtags LIKE '%Rangel_G_%' 
										or hashtags LIKE '%TUPALABRACUENTA%' 
										or hashtags LIKE '%TuPalabraCuenta %' 
										or hashtags LIKE '%YoConMemo%'
										or hashtags LIKE '%Vivi_Ram_A%'
										or hashtags LIKE '%Trabajarporlafamilia%'
										or hashtags LIKE '%crispindiputado%'
										or hashtags LIKE '%TrabajoporTi%'
										or hashtags LIKE '%TrabajoParaTi%'
										or hashtags LIKE '%IsisColimaVerde%'
										or hashtags LIKE '%VamosVerdes%'
										or hashtags LIKE '%AlmaDelia_D3%'
										or hashtags LIKE '%AlmaDeliaVotoSeguro%'
										or hashtags LIKE '%ConAlmaYCorazónPorTi%'
										or hashtags LIKE '%VotaAlmaDelia%'
										or hashtags LIKE '%YoSoyAD3%'
										or hashtags LIKE '%JanethPazPonce%'
										or hashtags LIKE '%TrabajamosParaTi%'
										or hashtags LIKE '%DistritoIV%'
										or hashtags LIKE '%JanethDiputada%'
										or hashtags LIKE '%ComalaVotaPAN%'
										or hashtags LIKE '%YaGanamos%'
										or hashtags LIKE '%EnriquePresidente%'
										or hashtags LIKE '%JuanitaAndres%'
										or hashtags LIKE '%ResultadosParaTi%'
										or hashtags LIKE '%LupeBenavidesF%'
										or hashtags LIKE '%octaviotintos%'
										or hashtags LIKE '%HonestamenteTeVoyAServir%'
										or hashtags LIKE '%YoPropongo%'
										or hashtags LIKE '%saracernas%'
										or hashtags LIKE '%TuVozEsMiVoz%'
										or hashtags LIKE '%DiputadaDistrito7%'
										or hashtags LIKE '%PorLasCausasDeLaGente%'
										or hashtags LIKE '%JoelPadilla2012%'
										or hashtags LIKE '%MeylyPastora%'
										or hashtags LIKE '%Atrévete%'
										or hashtags LIKE '%MeylyDiputadaLocal%'
										or hashtags LIKE '%VIII%'
										or hashtags LIKE '%hectormlara%'
										or hashtags LIKE '%DistritoVIII%'
										or hashtags LIKE '%eusebiomesina%'
										or hashtags LIKE '%MesinaTena%'
										or hashtags LIKE '%PintoRgz%'
										or hashtags LIKE '%BeneficiosParaTodos%'
										or hashtags LIKE '%Armida_NG%'
										or hashtags LIKE '%ArmidaDiputada%'
										or hashtags LIKE '%VotaPRI%'
										or hashtags LIKE '%martha_sosa1%'
										or hashtags LIKE '%Sergio_SanchezO%'
										or hashtags LIKE '%ComoDebeDeSer%'
										or hashtags LIKE '%Martha_Meza_%'
										or hashtags LIKE '%VerdeSíCumple%'
										or hashtags LIKE '%FDiputada%'
										or hashtags LIKE '%SantiagoCh2Tec%'
										or hashtags LIKE '%ConSantiatoSí%') and MONTH(fecha) = '$mes' and hashtags <>''");
			if($hashtags->num_rows()>0)
			{
				return $hashtags->result();
			}
			else
			{
				return FALSE;
			}
		}

		//Obtener hashtags Dip_locales
		public function obtener_hashtags_alcaldes($mes)
		{
			$hashtags=$this->db->query("SELECT hashtags FROM `twitt` WHERE (
										hashtags LIKE '%DipEsperanzaA%' 
										or hashtags LIKE '%OVPresidente%' 
										or hashtags LIKE '%renovaciondinamica%'
										or hashtags LIKE '%vamoscontodo%'
										or hashtags LIKE '%RenovarladinamicadelaCiudad%' 										
										or hashtags LIKE '%yoconoscarsi%' 
										or hashtags LIKE '%hectorinsua%' 
										or hashtags LIKE '%ElCambioQueQuiereLaGente%' 
										or hashtags LIKE '%VotaHectorInsua%' 
										or hashtags LIKE '%VotaPan%' 
										or hashtags LIKE '%VotaUtil%' 
										or hashtags LIKE '%meabaroa%'
										or hashtags LIKE '%ImpactoUrbano%'
										or hashtags LIKE '%ImpactoEconómico%'
										or hashtags LIKE '%CeroCorrucpión%'
										or hashtags LIKE '%ImpactoRural%'
										or hashtags LIKE '%ImpactoSocial%'
										or hashtags LIKE '%GobiernoCiudadano%'
										or hashtags LIKE '%MovimientoCiudadano%'
										or hashtags LIKE '%CuentasClaras%'
										or hashtags LIKE '%EsmePresidenta%'
										or hashtags LIKE '%EsNuestroMomento%'
										or hashtags LIKE '%YoMeMuevo%'
										or hashtags LIKE '%EsmeraldaSíCumple%'
										or hashtags LIKE '%EsmeraldaEsGarantía%'
										or hashtags LIKE '%EsmeraldaPresidenta%'
										or hashtags LIKE '%salo_salazar1%'
										or hashtags LIKE '%ResultadosParaComala%'
										or hashtags LIKE '%ResultadosParaTi%'
										or hashtags LIKE '%MarioCarrillo01%'
										or hashtags LIKE '%HagámosloNosotros%'
										or hashtags LIKE '%BlancaPRI2015%'
										or hashtags LIKE '%TeMerecesUnMejorCuauhtémoc%'
										or hashtags LIKE '%SeMerecenUnMejorCuauhtémoc%'
										or hashtags LIKE '%UrsuaBlanca%'
										or hashtags LIKE '%VotoConsciente%'
										or hashtags LIKE '%SiCambioYoCambiaMéxico%'
										or hashtags LIKE '%pasalavoz%'
										or hashtags LIKE '%hiram1447%'
										or hashtags LIKE '%PicoZepeda%'
										or hashtags LIKE '%PicoPresidente%'
										or hashtags LIKE '%TeQuieroManzanilloMejor%'
										or hashtags LIKE '%BarajasYescas%'
										or hashtags LIKE '%GenteNuevaTrabajaMejor%'
										or hashtags LIKE '%romo_ochoa%'
										or hashtags LIKE '%DipManuelPR%'
										or hashtags LIKE '%DipArturoGarcia%'
										or hashtags LIKE '%OswyDelgado%'
										or hashtags LIKE '%CercaDeTiGanaremos%'
										or hashtags LIKE '%OswyDelgado%'
										or hashtags LIKE '%CercaDeTi%'
										or hashtags LIKE '%Yulenny_Cortes%'
										or hashtags LIKE '%ConYulennyTúGanas%'
										or hashtags LIKE '%JaimeSoteloG%') and MONTH(fecha) = '$mes' and hashtags <>''");
			if($hashtags->num_rows()>0)
			{
				return $hashtags->result();
			}
			else
			{
				return FALSE;
			}
		}

		// //CUENTAS NACHO
		// //Obtener cuenta de PRI_Colima
		// public function obtener_cuenta_priColima()
		// {
		// 	$priColima = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
		// 							   siguiendo, tweets from cuentas where fecha 
		// 							   in (select max(fecha) from cuentas) and 
		// 							   usuario = 'PRI_Colima'");
		
		// 	if($priColima->num_rows()>0)
		// 	{
		// 		return $priColima->row(); //Con el row solo se obtiene una fila de resultados
		// 	}
		// 	else
		// 	{
		// 		return FALSE;
		// 	}
		// }
		
		// //Obtener cuenta de JIPS2015
		// public function obtener_cuenta_jips2015()
		// {
		// 	$jips2015 = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
		// 							   siguiendo, tweets from cuentas where fecha 
		// 							   in (select max(fecha) from cuentas) and 
		// 							   usuario = 'JIPS2015'");
		
		// 	if($jips2015->num_rows()>0)
		// 	{
		// 		return $jips2015->row(); //Con el row solo se obtiene una fila de resultados
		// 	}
		// 	else
		// 	{
		// 		return FALSE;
		// 	}
		// }
		
		// //Obtener cuenta de JIPSColima
		// public function obtener_cuenta_jipsColima()
		// {
		// 	$jipsColima = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
		// 							   siguiendo, tweets from cuentas where fecha 
		// 							   in (select max(fecha) from cuentas) and 
		// 							   usuario = 'JIPSColima'");
		
		// 	if($jipsColima->num_rows()>0)
		// 	{
		// 		return $jipsColima->row(); //Con el row solo se obtiene una fila de resultados
		// 	}
		// 	else
		// 	{
		// 		return FALSE;
		// 	}
		// }
		
		// //Obtener cuenta de jipsvdea
		// public function obtener_cuenta_jipsVilla()
		// {
		// 	$jipsVilla = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
		// 							   siguiendo, tweets from cuentas where fecha 
		// 							   in (select max(fecha) from cuentas) and 
		// 							   usuario = 'jipsvdea'");
		
		// 	if($jipsVilla->num_rows()>0)
		// 	{
		// 		return $jipsVilla->row(); //Con el row solo se obtiene una fila de resultados
		// 	}
		// 	else
		// 	{
		// 		return FALSE;
		// 	}
		// }
		
		// //Obtener cuenta de MiSelfiecoNacho
		// public function obtener_cuenta_selfieNacho()
		// {
		// 	$selfieNacho = $this->db->query("SELECT max(hora) as hora, fecha, usuario, seguidores, 
		// 							   siguiendo, tweets from cuentas where fecha 
		// 							   in (select max(fecha) from cuentas) and 
		// 							   usuario = 'MiSelfiecoNacho'");
		
		// 	if($selfieNacho->num_rows()>0)
		// 	{
		// 		return $selfieNacho->row(); //Con el row solo se obtiene una fila de resultados
		// 	}
		// 	else
		// 	{
		// 		return FALSE;
		// 	}
		// }

		public function obtener_ultima_fecha()
		{
			$ultima_fecha = $this->db->query("SELECT max(fecha) as ultima_fecha from cuentas");

			if($ultima_fecha->num_rows()>0)
			{
				return $ultima_fecha->row(); //Con el row solo se obtiene una fila de resultados
			}
			else
			{
				return FALSE;
			}
		}

	}
?>