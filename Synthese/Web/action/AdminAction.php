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



	class AdminAction extends CommonAction {
		public $home;
		public $career;
		public $company;
		public $contact;
		public $gallery;
		public $services;
		public $ajoutImage;
		public $modifierImage;
		public $suprimerImage;
		public $choix;
	
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
			
			}
			if(isset($_GET["services"]))
			{
			$this->services = true;
			}
			if(isset($_GET["gallery"]))
			{
			$this->gallery = true;
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
		}			
	}
	