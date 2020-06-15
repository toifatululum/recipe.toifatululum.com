<?php

namespace App\Controllers;
use App\Core\Controller,
App\Models\User,
App\Models\Recipe;

class indexController extends Controller {
	public function __construct(){
		$this->User=new User;
		$this->Recipe=new Recipe;
	}
	public function index() {
		$jumlah = $this->Recipe->getCount();
		$result=$this->User->get();
		if (isset($_GET['category']) || isset($_GET['search'])) {
			if (isset($_GET['category']) && isset($_GET['search'])) {
				$recipe=$this->Recipe->get($_GET['category'], $_GET['search']);
			} else if(isset($_GET['category']) && !isset($_GET['search'])){
				$recipe=$this->Recipe->get($_GET['category'], null);
			} else {
				$recipe=$this->Recipe->get(null, $_GET['search']);
			} 
		} else {
			$recipe=$this->Recipe->get(null, null);
		};
		$tag=$this->Recipe->get_tag();
		$this->loadTemplate('home', array('recipe'=>$recipe, 'result'=>$result, 'tag' => $tag,'jumlah' => $jumlah ));
	}

	public function login() {
		$result=$this->User->get();
		$this->loadTemplate2('users/login', array('result'=>$result));
	}

	public function register() {
		$result=$this->User->get();
		$this->loadTemplate2('users/register', array('result'=>$result));
	}

	public function myrecipe() {
		$id = $_GET['id'];
		$result=$this->Recipe->detail($id);
		$this->loadTemplate('users/myrecipe', array('result'=>$result));
	}

	public function action_login(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$result=$this->User->action_login($email, $password);
		// sleep(2);
		// $this->login();
		// header("location:". BASE . '/index/login');
	}

	public function action_register(){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_confirmation = $_POST['password_confirmation'];
		$username = $_POST['username'];
		$name = $_POST['name'];
		$result=$this->User->action_register($email, $password, $password_confirmation, $username, $name);
		$this->register();
	}


	public function action_logout(){
		$result=$this->User->action_logout();
	}
}
