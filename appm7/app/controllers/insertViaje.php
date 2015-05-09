<?php
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/	
	final class insertviaje extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new minsertViajes;
			$this->view=new vinsertViaje;
		}
		
		function home(){
			 echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";
		}

/**
    * 
    * A *description* this function,manda los datos de las cajas de texto a la funcion de insertar viajes del modelo,
    * si todo es correcto se inserta la reserva, sino manda al error.
    */
		function insertar(){
		if(isset($_POST['dni'])){
		$fechain=filter_input(INPUT_POST, 'fechain', FILTER_SANITIZE_STRING);
		$fechafin=filter_input(INPUT_POST, 'fechafin', FILTER_SANITIZE_STRING);
		$destino=filter_input(INPUT_POST, 'destino', FILTER_SANITIZE_STRING);
        $origen=filter_input(INPUT_POST, 'origen', FILTER_SANITIZE_STRING);
        $dni=filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);
		$viaje=$this->model->insertar($fechain,$fechafin,$destino,$origen,$dni);

        if ($viaje==TRUE){
               // cap a la pàgina principal
               header('Location:'.APP_W.'insertarv');
               //echo $email;
         }else{
             // no hi el dni
               header('Location:'.APP_W.'error');
             }
  		  }
		}
	}