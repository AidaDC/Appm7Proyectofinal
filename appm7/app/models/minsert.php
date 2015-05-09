<?php
class mInsert extends Model
{
    function __construct(){parent::__construct();}
/**
    *A *description* esta funcion hace un select del dni del usuario
    */
     public function dni($dni)
    {
        try {
            $sql   = "SELECT nif FROM usuarios WHERE nif=? ";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $dni);
            $query->execute(); //fetch per rol

            if ($query->rowCount() == 1) {
                $fetch           = $query->fetchColumn();
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
        
    }
/**
    *A *description* esta funcion hace un select del email del usuario
    */
    public function email($email)
    {
        try {
            $sql   = "SELECT email FROM usuarios WHERE email=? ";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $email);
            $query->execute(); //fetch per rol

            if ($query->rowCount() == 1) {
                $fetch           = $query->fetchColumn();
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
        
    }


  /**
    *A *description* esta funcion hace un insert con los datos introducidos desde el controlador, 
    *para insertarlos en la base de datos,aunque compruena que el email y el dni no se encuentren ya.
    */

    function insert($dni, $nombre, $nusuario, $telefono, $direccion, $poblacion, $email, $password, $rpassword)
    {

    
        if($this->dni($dni) && $this->email($email)){
          return FALSE;

        }else{
        try {
            $rol    = 0;
            $sql    = "INSERT INTO usuarios VALUES (";
            $vector = array($dni,$nusuario,$nombre,$telefono,$direccion,$poblacion,$email,$password,$rpassword,$rol);
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
             //Coder::code($sql);
             //die;
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

     


}

