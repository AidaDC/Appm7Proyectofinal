<?php
	class Login extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mlogin;
			$this->view=new vlogin;
		}
		function home(){
						echo "Pagina generadada en ".(microtime() - $this->conf->time)." segundos";
			/*echo ("hola".$_SESSION['usuario']);
			var_dump($_SESSION['usuario']);*/
			
		}
	}