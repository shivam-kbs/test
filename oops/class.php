<?php
	
 
	class db_class{
		public $servername = localhost;
		public $username = root;
		public $password = root;
		public $dbname = sharma;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
		}
 
		private function connect(){
			$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
 
		public function save($name, $email, $password, $number){
			$stmt = $this->conn->prepare("INSERT INTO `signup` (name, email, password, number) VALUES(?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param("ssss", $name, $email, $password, $number);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function isUserExist ($email){
			$sql = $this->conn("SELECT * FROM users WHERE email = '".$email."'");
		}
	}
?>