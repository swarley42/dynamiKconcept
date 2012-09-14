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
	
	class IndexAction extends CommonAction {
		
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
		public function executeAction() {
					$data = null;
					
					$data = ContentDAO::lirePage();
					$this->data = $data;
					
		}
	}