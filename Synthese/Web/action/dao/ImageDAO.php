<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	class ImageDAO {
	
	public static function lireImage(){
			$result = array();
			$conn = Connection::getConnection();
			
			
			$query = "SELECT * FROM IMAGE";
			$statement = oci_parse($conn, $query);
			oci_execute($statement);
			
			while ($row = oci_fetch_array($statement)) {
				$result[] = $row;
			}
			
		 return $result;
		
		}
	public static function ajouterImage($id,$path,$titre,$desc){
			$result = null;
			$conn = Connection::getConnection();
			$query = "INSERT INTO IMAGE VALUES(:pId,:pPath,:pTitle,:pDesc)";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pPath", $path);
			oci_bind_by_name($statement, ":pTitle", $titre);
			oci_bind_by_name($statement, ":pDesc", $desc);
			
			
			oci_execute($statement);
		
		}
	public static function supprimerImage($id){
			$conn = Connection::getConnection();
			$query = "DELETE FROM IMAGE WHERE NOM = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);
		}
	public static function modifierImage($id,$path,$titre,$desc){
			$conn = Connection::getConnection();
			$query = "UPDATE IMAGE SET PATH = :pPath AND SET DESCRIPTION = :pDesc AND SET TITLE = :pTitle WHERE ID = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pPath", $path);
			oci_bind_by_name($statement, ":pTitle", $titre);
			oci_bind_by_name($statement, ":pDesc", $desc);
			oci_execute($statement);
		
		}
		public static function getId() {
			$result = null;
			$conn = Connection::getConnection();
			$queryId = "SELECT MAX(ID) \"MAX\" FROM IMAGE";
			$statement = oci_parse($conn, $queryId);
			oci_execute($statement);
			if ($row = oci_fetch_array($statement)) {
				$result = $row;
				}
			}
}