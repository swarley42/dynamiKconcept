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
		// retourne le dernier id (imite la séquence dans la bd)
		public static function getId() {
			$result = null;
			$conn = Connection::getConnection();
			$queryId = "SELECT MAX(ID) \"MAX\" FROM USERS";
			$statement = oci_parse($conn, $queryId);
			oci_execute($statement);
			if ($row = oci_fetch_array($statement)) {
				$result = $row;
			}
			}
	
		public static function register($id, $username, $pass, $name) {
			$conn = Connection::getConnection();
			$V = 1;
			
			$query = "INSERT INTO USERS VALUES (:pId, :pUsername, :pPassword, :pName, :pV)";
			$statement = oci_parse($conn, $query);

			oci_bind_by_name($statement, ":pUsername", $username);
			oci_bind_by_name($statement, ":pPassword", $pass);
			oci_bind_by_name($statement, ":pName", $name);
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pV", $V);
			oci_execute($statement);
		}
	
	}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	