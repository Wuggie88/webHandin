<?php
class User extends Database {
	
	public function login(){
		
		$username = filter_var ( $_POST['username'], FILTER_UNSAFE_RAW);
		$password = filter_var ( $_POST['password'], FILTER_UNSAFE_RAW);
		
		
		
		$result = $this->select_one ("user", "username", $username);
		
		return password_verify($password, $result['password']);

	}

	public function register() {

		$email = filter_var ( $_POST['email'], FILTER_UNSAFE_RAW);
        $name = filter_var ( $_POST['name'], FILTER_UNSAFE_RAW);
        $username = filter_var ( $_POST['username'], FILTER_UNSAFE_RAW);
		$password = filter_var ( $_POST['password'], FILTER_UNSAFE_RAW);
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO user (email, name, username, password) VALUES (:email, :name, :username, :password);";

		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':username', $username);
		$stmt->bindParam(':password', $hashed_password);
		$stmt->execute();

		return $email;

	}

	public function get_users () {
		$sql = "SELECT user_id, email, name, username FROM user";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get_user ($user_id) {

		$sql = "SELECT user_id, email FROM user WHERE user_id = :user_id";
		
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}


}