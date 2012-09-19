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
	require_once("action/dao/UserDAO.php");
	require_once("action/dao/ServiceDAO.php");
	require_once("action/dao/ContentDAO.php");
	require_once("action/dao/CareerDAO.php");
	require_once("action/dao/ImageDAO.php");
	require_once("action/dao/EquipeDAO.php");



	class AdminAction extends CommonAction {
		public $home;
		public $career;
		public $company;
		public $gallery;
		public $services;
		public $equipe;
		
		public $ajoutImage;
		public $modifierImage;
		public $suprimerImage;
		public $ajoutService;
		public $suprimerService;
		public $modifierService;
		public $ajoutJob;
		public $suprimerJob;
		public $modifierJob;
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
			
			if(isset($_GET["home"]))
			{
			$this->home = true;
			$data = null;	
			$data = ContentDAO::lirePage("index");
			$this->data = $data;
			
			}

			if(isset($_POST["editor1"])){
			
			ContentDAO::modifierPage("index",$_POST["editor1"]);
			header("location:index.php");
			exit;
			
			}
			if(isset($_GET["equipe"]))
			{
			$this->equipe = true;
			
			}
			if(isset($_GET["services"]))
			{
			$this->services = true;
			}
			if(isset($_GET["gallery"]))
			{
			$this->gallery = true;
			}
			if(isset($_GET["career"]))
			{
			$this->career = true;
			}
			if(isset($_GET["company"]))
			{
			$this->company = true;
			$data = null;	
			$data = ContentDAO::lirePage("company");
			$this->data = $data;
			}
			if(isset($_POST["editor2"])){
			
			ContentDAO::modifierPage("company",$_POST["editor2"]);
			header("location:company.php");
			exit;
			
			}
			
			if(isset($_GET["ajoutImage"]))
			{
			$this->ajoutImage = true;
			
			}
			if(isset($_GET["modifierImage"]))
			{
			$this->modifierImage = true;
			$data = ImageDAO::lireImage();
			$this->data = $data;
				
			}
			if(isset($_GET["suprimerImage"]))
			{
			$this->suprimerImage = true;
			$data = ImageDAO::lireImage();
			$this->data = $data;
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
			
			
			if (isset($_POST["titre"]) && isset($_POST["path"]) && isset($_POST["description"])) 
			{
				$data=null;
				$id = 0;
				$data = ImageDAO::getId();
				$id = $data["MAX"]+1;	
				
				ImageDAO::ajouterImage($id,$_POST["path"],$_POST["titre"],$_POST["description"]);
				header("location:gallery.php");
				exit;
			}	
			if(isset($_POST["deleteImg"]))
			{
			ImageDAO::supprimerImage($_POST["deleteImg"]);
			}
			if(isset($_POST["modID"]) && isset($_POST["pathMod"]) && isset($_POST["titreMod"]) && isset($_POST["descriptionMod"]))
			{
			ImageDAO::modifierImage($_POST["modID"],$_POST["pathMod"],$_POST["titreMod"],$_POST["descriptionMod"]);
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
	