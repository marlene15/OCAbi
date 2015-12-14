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
	} 
 		
	//OBTENIENDO LA VALORACION DE LOS CANDIDATOS A GOBERBANDOR	
	
	//Obtener valoracion de comentarios de Jorge Luis
		public function valoracion_jorge()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 	Id_Candidato = 'JorgeLuisPreciadoR'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 	Id_Candidato = 'JorgeLuisPreciadoR'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 	Id_Candidato = 'JorgeLuisPreciadoR'"
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
	//Obtener valoracion de comentarios de nacho

		public function valoracion_nacho()
		{
			$positivos = $this->db->query("SELECT count(*) as positivos FROM post WHERE Valoracion = 1 and 
										 	Id_Candidato = 'NachoPeraltaCol'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 	Id_Candidato = 'NachoPeraltaCol'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 	Id_Candidato = 'NachoPeraltaCol'"
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
										 	Id_Candidato = 'MarthaZepedaPRD'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 	Id_Candidato = 'MarthaZepedaPRD'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 	Id_Candidato = 'MarthaZepedaPRD'"
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
										 	Id_Candidato = 'LeoncioMoranL8'"
										);
			$negativos = $this->db->query("SELECT count(*) as negativos FROM post WHERE Valoracion = 2 and 
										 	Id_Candidato = 'LeoncioMoranL8'"
										);
			$neutros = $this->db->query("SELECT count(*) as neutros FROM post WHERE Valoracion = 3 and 
										 	Id_Candidato = 'LeoncioMoranL8'"
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

		if($nacho->num_rows()>0 and $jorge->num_rows()>0 and $locho->num_rows()>0 and $martha->num_rows()>0)
		{
			$nacho = $nacho->row();
			$jorge = $jorge->row();
			$locho = $locho->row();
			$martha = $martha->row();

			$a = array(
                "nacho" => $nacho,
                "jorge" => $jorge,
                "locho" => $locho,
                "martha" => $martha
            );
            return $a;
		}
		else
		{
			return FALSE;
		}
	}
}	