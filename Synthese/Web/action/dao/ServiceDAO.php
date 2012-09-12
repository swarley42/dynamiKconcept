<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	class ServiceDAO {
	
	public static function lireService(){
			$result = array();
			$conn = Connection::getConnection();
			
			
			$query = "SELECT * FROM SERVICE";
			$statement = oci_parse($conn, $query);
			oci_execute($statement);
			
			while ($row = oci_fetch_array($statement)) {
				$result[] = $row;
			}
			
		 return $result;
		
		}
		
	public static function ajouterService($id,$nom,$desc){
			$result = null;
			$conn = Connection::getConnection();
			$query = "INSERT INTO SERVICE VALUES(:pId,:pNom,:pDesc)";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDesc", $desc);
			
			
			oci_execute($statement);
		
		}
	public static function supprimerService($id){
			$conn = Connection::getConnection();
			$query = "DELETE FROM SERVICE WHERE NOM = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);
		}
	
	public static function modifierService($id, $nom,$desc){
			$conn = Connection::getConnection();
			$query = "UPDATE SERVICE SET NAME = :pNom AND SET DESCRIPTION = :pValeur WHERE ID = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pValeur", $desc);
			oci_execute($statement);
		
		}
	
	
	
	
		}
	
	