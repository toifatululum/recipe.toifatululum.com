<?php 

namespace App\Models;

use App\Core\Model;

class Admin extends Model{
	public function get_admin(){
		$sql="SELECT * FROM users WHERE role='ADMIN'";
		$result=$this->db->query($sql);
		return $result;
	}
	public function delete_admin($id){
		$sql="DELETE FROM recipe WHERE author=$id";
		$result=$this->db->query($sql);
		$sql="DELETE FROM transaction WHERE user=$id";
		$result=$this->db->query($sql);
		$sql="DELETE FROM users WHERE id=$id";
		$result=$this->db->query($sql);
		header("location:". BASE . '/admin/admin');		
	}

	public function edit_admin($id, $email, $password, $username, $name){
		$sql = "UPDATE users SET email='$email', password='$password', username='$username', name='$name' WHERE id='$id'";
		$result=$this->db->query($sql);
		return $result;
	}

	public function add_admin($email, $password, $username, $name ){
		$sql_check="SELECT * FROM users WHERE email='$email'";
		$result_check=$this->db->query($sql_check);
		$fetch=$result_check->fetch_assoc();
		if($fetch > 0){
			echo "<script type='text/javascript'>alert('email sudah terdaftar');</script>";
			return $fetch;
		}
		$sql="INSERT INTO users (email, password, role, username, name) VALUES ('$email', '$password', 'ADMIN', '$username', '$name');";
		$result=$this->db->query($sql);
		// header("location:". BASE . '/admin/admin');
	}

	public function mark($id){
		var_dump($id);
		$sql = "UPDATE transaction SET status=2 WHERE id='$id'";
		$result=$this->db->query($sql);
		header("location:". BASE . '/admin/transaction');
	}

	public function get_transaction(){
		$sql="SELECT transaction.id, transaction.recipe, transaction.user, transaction.date, transaction.status, transaction.norek, transaction.nameRek, transaction.proof, recipe.id as recipeId, recipe.content, recipe.cover, recipe.image, recipe.createdAt, recipe.tag, recipe.author, recipe.title, recipe.price, recipe.description, tag.id as tagId, tag.tagName,users.email, users.id as userId, users.name FROM `transaction` LEFT JOIN recipe ON transaction.recipe = recipe.id LEFT JOIN tag ON recipe.tag = tag.id LEFT JOIN users ON transaction.user = users.id WHERE transaction.status != 0";
		// $sql="SELECT * FROM transaction LEFT JOIN recipe ON 'transaction.recipe' = 'recipe.id'";
		$result=$this->db->query($sql);
		return $result;
	}
}