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

	class RegisterAction extends CommonAction {
		
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
		public function executeAction() {
			$data=null;
			$id =0;
			$data = UserDAO::getId();
			$id = $data["MAX"];
			
			
			
			if (isset($_POST["regUser"])) {
				$password = sha1($_POST["regPwd"]);
				UserDAO::register($id, $_POST["regUser"], $password, $_POST["regName"]);
					header("location:index.php");
					exit;
				}
			}
					
		}
	