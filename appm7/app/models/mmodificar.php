<?php 
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/  

	class mModificar extends Model{
  
		function __construct(){
			parent::__construct();
		}



/**
    *A *description* Esta funcion modifica los usuarios o datos que el usuario quiera modificar
    */

 function modificar($nombre,$nusuario,$telefono,$direccion,$poblacion,$email,$password,$rpassword,$dni){

 try{

$sql = "UPDATE usuarios SET nom_usuario=?,nombre=?,telefono =?,direccion=?,poblacion=?,email=?,contrasenya=?,password=? where nif = ?";
$query = $this->db->prepare($sql);
$query->bindParam(1,"'".$nusuario."'");
$query->bindParam(2,"'".$nombre."'");
$query->bindParam(3,"'".$telefono."'");
$query->bindParam(4,"'".$direccion."'");
$query->bindParam(5,"'".$poblacion."'");
$query->bindParam(6,"'".$email."'");
$query->bindParam(7,"'".$password."'");
$query->bindParam(8,"'".$rpassword."'");
$query->bindParam(9,"'".$dni."'");
$query->execute();



if($query->rowCount() ==1){
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

    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
    

     }
}

}