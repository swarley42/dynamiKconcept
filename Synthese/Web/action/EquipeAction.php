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
	require_once("action/dao/EquipeDAO.php");

	class EquipeAction extends CommonAction {
		
	
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}
		
		public function executeAction() {
				$data=null;
				$data=EquipeDAO::lireEquipe();
				$this->data = $data;	
		}
	}