<?php
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/  
	class Modificar extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mModificar;
			$this->view=new vModificar;
		}
		function home(){
						echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";	
		}
/**
* A *description* Esta funcion agarra datos de las cajas de texto de la vista y los manda al modelo
*/  


		function modificar(){
		if(isset($_POST['email'])){ 
        $nombre=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		    $nusuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
        $telefono=filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
        $direccion=filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);          
        $dni=filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING); 
        $poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
        $rpassword=md5(filter_input(INPUT_POST, 'rpassword', FILTER_SANITIZE_STRING));
        $user=$this->model->modificar($nombre,$nusuario,$telefono,$direccion,$poblacion,$email,$password,$rpassword,$dni);
         
         if ($user==TRUE){
               header('Location:'.APP_W.'modificarc');
               //echo $email;
         }
         else{
             // no hi és l'usuari, cal registrar
               header('Location:'.APP_W.'error');
             }
  		  }
		}

	}