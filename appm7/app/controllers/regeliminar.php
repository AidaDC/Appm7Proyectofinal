<?php
	class Regeliminar extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mRegeliminar;
			$this->view=new vRegeliminar;
		}
		function home(){
						echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";

			
			
		}
	}