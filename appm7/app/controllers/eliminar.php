<?php

/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/	
class Eliminar extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();


      $this->model=new mEliminar;
      $this->view=new vEliminar;
		}
		function home(){
						echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";	
		}

/**
    * 
    * A *description* Esta funcion elimina el usuario, siempre que la contrasenya sea la del administrador, sino mandaría 
    *al modelo de error, cosa que haría que la vista cargada fuese la vista de error.
    */

		function eliminar(){
		if(isset($_POST['nusuario'])){ 
		    $nusuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
        $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
        $user=$this->model->eliminar($nusuario,$password);
         if ($user==TRUE){
               // cap a la pàgina principal
               header('Location:'.APP_W.'eliminar');
               //echo $email;
         }
         else{
             // no hi és l'usuari, cal registrar
               header('Location:'.APP_W.'error');
             }
  		  }
		}

	}