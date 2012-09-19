<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	class EquipeDAO {
	
	public static function lireEquipe(){
			$result = array();
			$conn = Connection::getConnection();
			
			
			$query = "SELECT * FROM EQUIPE";
			$statement = oci_parse($conn, $query);
			oci_execute($statement);
			
			while ($row = oci_fetch_array($statement)) {
				$result[] = $row;
			}
			
		 return $result;
		
		}
		
	public static function ajouterEquipe($id,$nom,$desc,$img){
			$result = null;
			$conn = Connection::getConnection();
			$query = "INSERT INTO EQUIPE VALUES(:pId,:pNom,:pDesc,:pImg)";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDesc", $desc);
			oci_bind_by_name($statement, ":pImg", $img);
			
			
			oci_execute($statement);
		
		}
	public static function supprimerEquipe($id){
			$conn = Connection::getConnection();
			$query = "DELETE FROM EQUIPE WHERE ID = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_execute($statement);
		}
	
	public static function modifierEquipe($id,$nom,$desc,$img){
			$conn = Connection::getConnection();
			$query = "UPDATE EQUIPE SET NAME = :pNom, DESCRIPTION = :pDesc, IMAGE = :pImg WHERE ID = :pId";
			$statement = oci_parse($conn, $query);
			
			oci_bind_by_name($statement, ":pId", $id);
			oci_bind_by_name($statement, ":pNom", $nom);
			oci_bind_by_name($statement, ":pDesc", $desc);
			oci_bind_by_name($statement, ":pImg", $img);
			oci_execute($statement);
		
		}
		public static function getId() {
			$result = null;
			$conn = Connection::getConnection();
			$queryId = "SELECT MAX(ID) \"MAX\" FROM EQUIPE";
			$statement = oci_parse($conn, $queryId);
			oci_execute($statement);
			if ($row = oci_fetch_array($statement)) {
				$result = $row;
				}
				return $result;
			}
	
	
	
		}
	
	