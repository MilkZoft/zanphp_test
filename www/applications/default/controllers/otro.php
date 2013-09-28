<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Otro_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("default");

		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		//$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index()
	{ 
		echo "Soy el controlador secundario Otro de la app default";
	}

	public function imprimir($texto) 
	{
		echo $texto;
	}
}
