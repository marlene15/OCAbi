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