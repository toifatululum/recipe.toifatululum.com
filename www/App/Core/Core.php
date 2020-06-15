<?php 

namespace App\Core;

class Core {
	private $Url = null;
	private $Controller = '';
	private $Action = '';
	private $Params = [];

	Public function run(){
		$this->getUrl();
		$this->getControllerActionParam();
		$this->execute();
	}

	// untuk mendapatkan urlnya
	private function getUrl(){
		$url='/';
		if (isset($_GET['url'])){
			$url .=$_GET['url'];
		}
		$this->Url =$url;
	}

	//untuk pengecekan url
	private function getControllerActionParam() {
		if (!empty($this->Url) && $this->Url !='/') {
			$this->Url =explode('/', $this->Url);			
			array_shift($this->Url);
			$this->Controller = $this->Url[0] . 'Controller';
			array_shift($this->Url);
			$this->getAction();
			$this->getParams();
		}else{
			$this->Url = explode('/', $this->Url);
			$this->Controller = 'indexController';
			$this->getAction();
			$this->getParams();
		}
	}

	// untuk get action 
	private function getAction(){
		$this->Action ='index';
		if (isset($this->Url[0]) && !empty($this->Url[0])) {
			$this->Action =$this->Url[0];
			array_shift($this->Url);
		}
	}

	// memasukan url param ke $this->Param
	private function getParams(){
		if (count($this->Url) > 0) {
			$this->Params = $this->Url;
		}
	}

	private function execute() {
		$controllerClassName = '\\App\\Controllers\\' . $this->Controller;
		$fileClass = BASEDIR . "App/Controllers/" . $this->Controller . '.php';
		if(file_exists($fileClass)){
			require_once $fileClass;
			require_once BASEDIR . "App/Core/Controller.php";
		}else{
        	//die("halaman ilang gawa kucing");
		}
		if (!class_exists($controllerClassName)) {
			(new \App\Controllers\errorController())->index();
			return;
		}
		$controllerClass = new $controllerClassName();
		call_user_func_array(array($controllerClass, $this->Action), $this->Params);
	}
}