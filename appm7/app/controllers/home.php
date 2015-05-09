<?php
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/	
	final class home extends Controller{
		
		function __construct($params){
			parent::__construct($params);
			$this->conf=Registry::getInstance();
			$this->model=new mHome($params);
			$this->view=new vHome;
		}
		function home(){
			//comprobamos con var_dump lo que pasa las variables
			//var_dump($this->params);
			//Se accede a los datos de configuración
			Coder::code_var($this->model->get_out());

			echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";

			
		}

		/**
    * 
    * A *description* this function, al agarrar los datos de las cajas de texto se las pasa al modelo, para que este compruebe
    *que el usuario existe, sino manda al error.
    */
		function login(){
		if(isset($_POST['usuario'])){
         $nusuario=filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
         $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
         $user=$this->model->login($nusuario,$password);
         if ($user== TRUE){
               // cap a la pàgina principal
               header('Location:'.APP_W.'login/home');
               //echo $email;
         }
         else{
             // no hi és l'usuari, cal registrar
               header('Location:'.APP_W.'reg');
             }
  		  }
		}


		/**
    * 
    * @return this function, destruye la sesion al deslogearse.
    */
function salir(){
      
     session_destroy();

    }

	}