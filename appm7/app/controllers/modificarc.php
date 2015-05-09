<?php
/**
* @author Aida Dahdah Castello
* @author aidadahdah@gmail.com
* @copyright 2015 M7
* @version 1.0
*/	
	class Modificarc extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mModificarc;
			$this->view=new vModificarc;
		}
		function home(){
						echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";	
		}



		}

