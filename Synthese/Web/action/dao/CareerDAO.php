<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	class CareerDAO {
	public static function lireJobs(){
			$result = array();
			$conn = Connection::getConnection();
			
			
			$query = "SELECT * FROM JOBS";
			$statement = oci_parse($conn, $query);
			oci_execute($statement);
			
			while ($row = oci_fetch_array($statement)) {
				$result[] = $row;
			}
			
		 return $result;
		
		}
	}
	