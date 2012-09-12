<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	class UserDAO {
	
	
		public static function authenticate($username, $password) {
			$result = null;
			$conn = Connection::getConnection();
			
			$query = "SELECT * FROM USERS WHERE USERNAME = :pUsername AND PASSWORD = :pPassword";
			
			$statement = oci_parse($conn, $query);
			
			$password = sha1($password);
			
			
			oci_bind_by_name($statement, ":pUsername", $username);
			oci_bind_by_name($statement, ":pPassword", $password);
			oci_execute($statement);
			
			
			if ($row = oci_fetch_array($statement)) {
				$result = $row;
			}
			
			
			return $result;
		}
		
	
	
		public static function register($username, $pass) {
			$conn = Connection::getConnection();
			
			$query = "INSERT INTO USERS ";
			
		}
	
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	