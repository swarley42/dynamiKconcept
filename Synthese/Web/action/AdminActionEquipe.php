<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/CommonAction.php");
	require_once("action/dao/EquipeDAO.php");
	
	class AdminActionEquipe extends CommonAction {
		public $ajoutEQ;
		public $suprimerEQ;
		public $modifierEQ;
		
	public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
		}
		
		public function executeAction() {
			
			if($_SESSION["visibility"] < CommonAction::$VISIBILITY_ADMINISTRATOR)
			{
			header("location:index.php");
			exit;
			}
			if(isset($_GET["ajoutEQ"]))
			{
			$this->ajoutEQ = true;
			
			}
			if(isset($_GET["modifierEQ"]))
			{
			$this->modifierEQ = true;
			$data = EquipeDAO::lireEquipe();
			$this->data = $data;
				
			}
			if(isset($_GET["suprimerEQ"]))
			{
			$this->suprimerEQ = true;
			$data = EquipeDAO::lireEquipe();
			$this->data = $data;
			}
			if (isset($_POST["titreEQ"]) && isset($_POST["pathEQ"]) && isset($_POST["descriptionEQ"])) 
			{
				$data=null;
				$id = 0;
				$data = EquipeDAO::getId();
				$id = $data["MAX"]+1;	
				
				EquipeDAO::ajouterEquipe($id,$_POST["titreEQ"],$_POST["descriptionEQ"],$_POST["pathEQ"]);
				header("location:equipe.php");
				exit;
			}	
			if(isset($_POST["deleteEQ"]))
			{
			EquipeDAO::supprimerEquipe($_POST["deleteEQ"]);
			}
			if(isset($_POST["EQID"]) && isset($_POST["pathModEQ"]) && isset($_POST["titreModEQ"]) && isset($_POST["descriptionModEQ"]))
			{
			EquipeDAO::modifierEquipe($_POST["EQID"],$_POST["titreModEQ"],$_POST["descriptionModEQ"],$_POST["pathModEQ"]);
			}
		}
	}