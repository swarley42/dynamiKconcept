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

	class LoginAction extends CommonAction {
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
		public function executeAction() {
			if (isset($_POST["username"])) {
				$data = UserDAO::authenticate($_POST["username"], $_POST["pwd"]);
								
				if ($data != null) {
				    
					$_SESSION["visibility"] = $data["VISIBILITY"];
					$_SESSION["username"] = $data["NAME"];
					header("location:index.php");
					exit;
				}
			}
		}
	}

	
	
	
	
	
	
	
	
	
	
	