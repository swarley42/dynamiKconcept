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
	require_once("action/dao/ContentDAO.php");




	class AdminAction extends CommonAction {
		public $home;
		public $company;
	
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
			
		}			
	}
	