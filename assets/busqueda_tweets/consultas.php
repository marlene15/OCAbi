<?php
include_once('inc/connect.php');
if(isset($_POST['id']))
{
	switch($_POST['id'])
	{
		case 'fecha':
			$sql='SELECT fecha, count(fecha) from twitt group by fecha order by fecha;';
			$result = mysql_query($sql);
			$c=0;        

			while($row = mysql_fetch_array($result)){
				$fecha_separada = explode("-",$row['fecha']);
		        $anio=$fecha_separada[0];
		        $mes=$fecha_separada[1]; 
		        $dia=$fecha_separada[2];
		        $fecha_texto=$dia.'-'.$mes.'-'.$anio;

				$ret[$c]['date'] = $fecha_texto;
				$ret[$c]['value'] = (int)$row[1];
				$c++;
			}
			echo json_encode($ret);
			
			break;

			default:
			break;
		case 'palabra':
			if(isset($_POST['palabra'])){
				$palabra = $_POST['palabra'];
				$palabra = explode(" ",$palabra);
				foreach($palabra as $val){
					if(trim($val) != ""){
						$str[]='texto like "%' . $val . '%"';
					}
				}
				$palabra = implode(" AND ", $str);
				$sql='select count(texto),fecha from twitt where ' . $palabra . ' group by fecha';
				$result = mysql_query($sql);

				if(mysql_affected_rows()>0){
					$c=0;
					while($row = mysql_fetch_array($result)){
						$ret[$c]['year'] = $row['fecha'];
						$ret[$c]['value'] = (int)$row[0];
						$c++;
					}
				}
				else{
					$ret['error']="No se encontraron resultados";
				}
				echo json_encode($ret);
			}
			break;
	}
}
?>