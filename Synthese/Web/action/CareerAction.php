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
	require_once("action/dao/ContentDAO.php");
	require_once("action/dao/CareerDAO.php");

	class CareerAction extends CommonAction {
		
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
		public function executeAction() {
					$text = null;
					$data = null;
					
					$text = ContentDAO::lirePage("career");
					$this->text = $text;
					
					$data = CareerDAO::lireJobs();
					$this->data = $data;
					
		}
	}