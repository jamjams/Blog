<?php
/*Everytime we create a class we put the keyword class and it almost always 
	needs to have the same name of the file in which it is in. 
	Classes are used to define objects that are used store multiple functions and variable. The functions and variables describe the object.*/

	class Database {
		/* created instance variables. Can only be
		 accessed within the class and not outside of it because we described the visability of it as private.*/
		private $connection;
		private $host;
		private $username;
		private $password;
		private $database;
// anytime we call on the new keyword followed by the name of the class, it will create an object using this function. 
		// allows us to pass parameters 
		public function __construct($host, $username, $password, database) {
// accessing the variables
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
// openConnection needs to create a new mysqli object and then checks to if there is a connection error on the mysqli object.
		public function openConnection() {
			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database)
			if($this->connection->connect_error) {
				die("<p>Error: " . $this->connection->connect_error . "</p>");
	}
		}
// functions are blocks of codes that can perform operations over and over again or go off at a certain pont in our code.
		public function closeConnection() {
			// isset: it checks if the variable has been set or not. Checking whether of not there is somthing in the variable. 
			if(isset($this->connection)) {
				$this->connection->close();
			}
		}

		public function query($string) {
			$this->openConnection;

			$query = $this->connection->query($string);
			$this->closeConnection();
			return $query;
		}
	}
?>