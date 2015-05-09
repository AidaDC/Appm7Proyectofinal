<?php
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/	


	final class insert extends Controller{
		
		function __construct($params){
			parent::__construct($params);
			$this->conf=Registry::getInstance();
			$this->model=new minsert;
			$this->view=new vinsert;
		}
		

		function home(){
						echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";
			/*echo ("hola".$_SESSION['usuario']);
			var_dump($_SESSION['usuario']);*/
			
		}

		/**
*A *description* Esta funcion manda los datos recogidos en las cajas de texto,
*/
		
		function insert(){
		if(isset($_POST['email'])){ 
		$dni=filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);
		$nombre=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$nusuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
        $telefono=filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
        $direccion=filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);          
		$poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
		$rpassword=md5(filter_input(INPUT_POST, 'rpassword', FILTER_SANITIZE_STRING));
		$user=$this->model->insert($dni,$nombre,$nusuario,$telefono,$direccion,$poblacion,$email,$password,$rpassword);
        if ($user==TRUE){
               // cap a la pàgina principal
               header('Location:'.APP_W.'insert/home');
               //echo $email;
         }
         else{
             // no hi és l'usuari, cal registrar
               header('Location:'.APP_W.'error');
             }
  		  }
		}

	
          } 
   