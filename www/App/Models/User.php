<?php 

namespace App\Models;

use App\Core\Model;

class User extends Model{
	public function get(){
		$sql="SELECT * FROM users";
		$result=$this->db->query($sql);
		return $result;
	}

	public function get_user(){
		$sql="SELECT * FROM users WHERE role='USER'";
		$result=$this->db->query($sql);
		return $result;
	}

	public function action_Login($email, $password){
		$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
		$result=$this->db->query($sql);
		$check=mysqli_num_rows($result);
		$fetch=$result->fetch_assoc();
		if($check == 1){
			$_SESSION['username'] = $fetch['username'];
			$_SESSION['id'] = $fetch['id'];
			$_SESSION['status'] = "login";
			$_SESSION['role'] = $fetch['role'];
			$_SESSION['email'] = $fetch['email'];
			$_SESSION['name'] = $fetch['name'];
			var_dump($fetch['role']);
			if ($_SESSION['role'] == "ADMIN") {
				header("location:". BASE . '/admin');
			} else {
				header("location:". BASE . '/index/login');
			}
			
		}else{
			echo "<script type='text/javascript'>alert('Username dan password anda tidak cocok');</script>";
			header("location:". BASE . '/index/login');
		}
		// header("location:". BASE . '/index/login');
		return $result;
	}

	public function action_register($email, $password, $password_confirmation, $username, $name){
		$sql_check="SELECT * FROM users WHERE email='$email'";
		$result_check=$this->db->query($sql_check);
		$fetch=$result_check->fetch_assoc();
		if($fetch > 0){
			echo "<script type='text/javascript'>alert('email sudah terdaftar');</script>";
			return $fetch;
		}
		$sql="INSERT INTO users (email, password, role, username, name) VALUES ('$email', '$password', 'USER', '$username', '$name');";
		$result=$this->db->query($sql);
		header("location:". BASE . '/index/login');
		return $result;
	}

	public function action_logout(){
		session_destroy();
		header("location:". BASE . '/index/login');
		return;
	}
}