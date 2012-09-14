<?php
/* ---------------------------------------------------
* *
* Projet synth�se : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/CommonAction.php");
	require_once("action/dao/UserDAO.php");
	require_once("action/dao/ServiceDAO.php");
	require_once("action/dao/ContentDAO.php");



	class AdminAction extends CommonAction {
		public $home;
		public $career;
		public $company;
		public $contact;
		public $gallery;
		public $services;
		public $ajout;
		public $modifier;
		public $suprimer;
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
			
			}
			if(isset($_GET["services"]))
			{
			$this->services = true;
			}
			if(isset($_GET["gallery"]))
			{
			$this->gallery = true;
			}
			if(isset($_GET["choix"]))
			{
			$selected_radio = $_POST["rImage"];
				if($selected_radio === "ajouter")
				{
				$this->ajout = true;
				}
				if($selected_radio === "modifier")
				{
				$this->modifier = true;
				
				}
				if($selected_radio === "suprimer")
				{
				$this->suprimer = true;
				}
			}
			
			
					
		}
	}