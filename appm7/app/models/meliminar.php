<?php

/**
* @author Aida Dahdah
*/
	class mEliminar extends Model{

/**
*A *description* esta funcion devuelve true si los datos introducidos son correctos en cas de serlo borra el usuario
*datos mandados por el controlador,desde la vista.
*/
 function eliminar($nusuario,$password){
  try{
    $consulta="SELECT contrasenya FROM usuarios WHERE rol=1";
    $query1=$this->db->prepare($consulta);
     $query1->bindParam(1,$password);
     $query1->execute();//fetch per rol

 if($query1->rowCount()==1){
$sql = "DELETE FROM usuarios WHERE nom_usuario = ?";
/* Ejecutar la sentencia */
     $query=$this->db->prepare($sql);
     $query->bindParam(1,$nusuario);
     $query->execute();//fetch per rol

     if($query->rowCount()==1){
//Session::set('usuario',$email);
/*
$_SESSION['usuario']=$_REQUEST[$email];
$_SESSION['clave']=$_REQUEST[$password];
*/

           return TRUE;

     }
     else {
         //Session::set('islogged',FALSE);
          return FALSE;}
  }
    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
     }
  }	

		
	}