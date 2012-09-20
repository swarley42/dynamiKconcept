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
	
	
	class AdminActionJob extends CommonAction {
		public $ajoutJob;
		public $suprimerJob;
		public $modifierJob;
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_ADMINISTRATOR);
		}
		
		public function executeAction() {
		
		if($_SESSION["visibility"] < CommonAction::$VISIBILITY_ADMINISTRATOR)
			{
			header("location:index.php");
			exit;
			}
		if(isset($_GET["ajoutJob"]))
			{
			$this->ajoutJob = true;
			
			}
			if(isset($_GET["modifierJob"]))
			{
			$this->modifierJob = true;
			$data = CareerDAO::lireJobs();
			$this->data = $data;	
			}
			if(isset($_GET["suprimerJob"]))
			{
			$this->suprimerJob = true;
			$data = CareerDAO::lireJobs();
			$this->data = $data;
			}
			if (isset($_POST["titreJob"]) && isset($_POST["descriptionJob"])) 
			{
				$data=null;
				$id = 0;
				$data = CareerDAO::getId();
				$id = $data["MAX"]+1;	
				
				CareerDAO::ajouterJob($id,$_POST["titreJob"],$_POST["descriptionJob"]);
				header("location:career.php");
				exit;
			}	
			if(isset($_POST["deleteJob"]))
			{
			CareerDAO::supprimerJob($_POST["deleteJob"]);
			}
			if(isset($_POST["JobID"]) && isset($_POST["JobMod"]) && isset($_POST["descriptionJobmod"]))
			{
			CareerDAO::modifierJob($_POST["JobID"],$_POST["JobMod"],$_POST["descriptionJobmod"]);
			}
		}
	}