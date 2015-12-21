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
									  where fecha >= '2015-12-01' and usuario = 'Comovamoscolima' ORDER BY fecha ASC");			

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

		public function obtener_cuenta_comoVamos_rango($fecha_inicio,$fecha_fin)
		{
			$comoVamos = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'Comovamoscolima' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$a = array(
                "comoVamos" => $comoVamos->result()
            );
            return $a;
		}

		public function obtener_cuenta_afmedios()
		{
			$afmedios = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where fecha >= '2015-12-01' and usuario = 'AFmedios' ORDER BY fecha ASC");			

			if($afmedios->num_rows()>0)
			{
				$a = array(
	                "afmedios" => $afmedios->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		public function obtener_cuenta_afmedios_rango($fecha_inicio,$fecha_fin)
		{
			$afmedios = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'AFmedios' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$a = array(
                "afmedios" => $afmedios->result()
            );
            return $a;
		}

		public function obtener_cuenta_angel()
		{
			$angel = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where fecha >= '2015-12-01' and usuario = 'angelguardianmx' ORDER BY fecha ASC");			

			if($angel->num_rows()>0)
			{
				$a = array(
	                "angel" => $angel->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		public function obtener_cuenta_angel_rango($fecha_inicio,$fecha_fin)
		{
			$angel = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'angelguardianmx' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$a = array(
                "angel" => $angel->result()
            );
            return $a;
		}

		public function obtener_cuenta_jmcoello()
		{
			$jmcoello = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where fecha >= '2015-12-01' and usuario = 'RomeroCoello' ORDER BY fecha ASC");			

			if($jmcoello->num_rows()>0)
			{
				$a = array(
	                "jmcoello" => $jmcoello->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		public function obtener_cuenta_jmcoello_rango($fecha_inicio,$fecha_fin)
		{
			$jmcoello = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'RomeroCoello' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$a = array(
                "jmcoello" => $jmcoello->result()
            );
            return $a;
		}

		public function obtener_cuenta_soyNachista()
		{
			$soyNachista = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where fecha >= '2015-12-01' and usuario = 'SoyNachista' ORDER BY fecha ASC");			

			if($soyNachista->num_rows()>0)
			{
				$a = array(
	                "soyNachista" => $soyNachista->result()
	            );
	            return $a;
			}
			else
			{
				return FALSE;
			}
		}

		public function obtener_cuenta_soyNachista_rango($fecha_inicio,$fecha_fin)
		{
			$soyNachista = $this->db->query("SELECT usuario, seguidores, siguiendo, tweets, fecha from cuentas 
									  where usuario = 'SoyNachista' and fecha BETWEEN '$fecha_inicio' AND '$fecha_fin' 
									  ORDER BY fecha ASC");
			$a = array(
                "soyNachista" => $soyNachista->result()
            );
            return $a;
		}
	}

?>