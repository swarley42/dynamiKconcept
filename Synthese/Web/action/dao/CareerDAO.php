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
		public static function ajouterJob($id,$titre,$desc){
			$result = null;
			$conn = Connection::getConnection();
			$query = "INSERT INTO JOBS VALUES (:pId,:pTitle,:pDesc )";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pTitle", $titre);
			oci_bind_by_name($statement, ":pDesc", $desc);
			
			
			oci_execute($statement);
		
		}
	public static function supprimerJob($id){
			$conn = Connection::getConnection();
			$query = "DELETE FROM JOBS WHERE ID = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);
		}
	public static function modifierJob($id,$titre,$desc){
			$conn = Connection::getConnection();
			$query = "UPDATE JOBS SET DESCRIPTION = :pDesc,TITLE = :pTitle WHERE ID = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pTitle", $titre);
			oci_bind_by_name($statement, ":pDesc", $desc);
			oci_execute($statement);
		
		}
		// retourne le dernier id (imite la séquence dans la bd)
		public static function getId() {
			$result = null;
			$conn = Connection::getConnection();
			$queryId = "SELECT MAX(ID) \"MAX\" FROM JOBS";
			$statement = oci_parse($conn, $queryId);
			oci_execute($statement);
			if ($row = oci_fetch_array($statement)) {
				$result = $row;
				}
				return $result;
			}
	}
	