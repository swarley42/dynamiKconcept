<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	class ContentDAO {
	
	public static function lirePage($page){
			$result = array();
			$conn = Connection::getConnection();
			$query = "SELECT * FROM CONTENT WHERE NAME = :pName";
			
			$statement = oci_parse($conn, $query);
			oci_bind_by_name($statement, ":pName", $page);
			oci_execute($statement);
			
			while ($row = oci_fetch_array($statement)) {
				$result[] = $row;
			}
			
		 return $result;
		
		}
		
		public static function modifierPage($page,$name,$content){
			$conn = Connection::getConnection();
			$query = "UPDATE CONTENT SET NAME = :pNom AND SET CONTENT = :pValeur WHERE NAME = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pNom", $name);
			oci_bind_by_name($statement, ":pId", $page);
			oci_bind_by_name($statement, ":pValeur", $content);
			oci_execute($statement);
		
		}
	
	
	}