<?php

final class mHome extends Model
{
    
    
    
    function __construct($params)
    {
        parent::__construct($params);
        $this->db       = DB::singleton();
        // a litle prove in--->out
        $this->data_out = $params;
    }
    function get_out()
    {
        return $this->data_out;
    }

    /**
    *A *description* esta funcion hace un select del rol del usuario
    */
    
    public function rol($nusuario)
    {
        try {
            $sql   = "SELECT rol FROM usuarios WHERE nom_usuario=? ";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $nusuario);
            $query->execute(); //fetch per rol

            if ($query->rowCount() == 1) {
                $fetch           = $query->fetchColumn();
                $_SESSION['rol'] = $fetch;
                return TRUE;
            } else {
                //Session::set('islogged',FALSE);
                $_SESSION['rol'] = "ERRor";
                return FALSE;
            }
            
            
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
        
    }
    
    /**
    *A *description* esta funcion comprueba que el usuario esta en la base de datos y lo logea
    */
    function login($nusuario, $password)
    {
        try {
            $sql   = "SELECT * FROM usuarios WHERE nom_usuario=? AND contrasenya=?";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $nusuario);
            $query->bindParam(2, $password);
            $query->execute(); //fetch per rol
            if ($query->rowCount() == 1) {
                
                $_SESSION['user']  = $_REQUEST['usuario'];
                $_SESSION['email'] = $_REQUEST['password'];
                $this->rol($nusuario);
                return TRUE;
                
            } else {
                //Session::set('islogged',FALSE);
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
    

}