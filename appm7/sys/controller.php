<?php

	class Controller {
		protected $model;
		protected $view;
		protected $params;
		protected $conf;
		function __construct($params){
			$this->params=$params;
			$this->conf=Registry::getInstance();
			
		}

		 protected function ajax_set($output){
			ob_start();
			$respuesta=json_encode($output);
			echo $respuesta;

		}
	}