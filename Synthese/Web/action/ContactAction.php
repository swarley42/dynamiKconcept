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

	class ContactAction extends CommonAction {
		
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
		public function executeAction() {
					
		}
	}