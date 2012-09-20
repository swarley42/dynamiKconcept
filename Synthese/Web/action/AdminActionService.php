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
	require_once("action/dao/ServiceDAO.php");
	
	class AdminActionService extends CommonAction {
		public $ajoutService;
		public $suprimerService;
		public $modifierService;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
		}
		
		public function executeAction() {
			
			if($_SESSION["visibility"] < CommonAction::$VISIBILITY_ADMINISTRATOR)
			{
			header("location:index.php");
			exit;
			}
		if(isset($_GET["ajoutService"]))
			{
			$this->ajoutService = true;
			
			}
			if(isset($_GET["modifierService"]))
			{
			$this->modifierService = true;
			$data = ServiceDAO::lireService();
			$this->data = $data;
				
			}
			if(isset($_GET["suprimerService"]))
			{
			$this->suprimerService = true;
			$data = ServiceDAO::lireService();
			$this->data = $data;
			}
			if (isset($_POST["titreService"]) && isset($_POST["descriptionService"])) 
			{
				$data=null;
				$id = 0;
				$data = ServiceDAO::getId();
				$id = $data["MAX"]+1;	
				
				ServiceDAO::ajouterService($id,$_POST["titreService"],$_POST["descriptionService"]);
				header("location:services.php");
				exit;
			}	
			if(isset($_POST["deleteSer"]))
			{
			ServiceDAO::supprimerService($_POST["deleteSer"]);
			}
			if(isset($_POST["SerID"]) && isset($_POST["ServiceMod"]) && isset($_POST["descriptionSer"]))
			{
			ServiceDAO::modifierService($_POST["SerID"],$_POST["ServiceMod"],$_POST["descriptionSer"]);
			}
		}
	}