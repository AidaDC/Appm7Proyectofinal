<?php
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/  
	class minsertViajes extends Model{

		function __construct(){
			parent::__construct();
		}
/**
    *A *description* esta funcion inserta en la tabla reservas cuando el usuario hace una reserva
    */
		function insertar($fechain, $fechafin, $destino, $origen,$dni)
    {
    
        try {
            $sql    = "INSERT INTO reservas (fecha_inicio,fecha_fin,destino,origen,usuarios_nif) VALUES (";
            $vector = array($fechain, $fechafin, $destino, $origen,$dni);
            $max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .= "'" . $vector[$i - 1] . "',";
                } else {
                    $sql .= "'" . $vector[$i - 1] . "')";
                }
            }
            $query = $this->db->prepare($sql);
            $query->execute();
            // COMPROBAR CONSULTAS
            Coder::code($sql);
             die;
            if ($query->rowCount() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

      }
  }
	