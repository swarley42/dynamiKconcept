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
		if(isset($_POST["titreCon"]) && isset($_POST["comments"]))
			{
				
			
			ini_set('SMTP','cigogne.cvm.qc.ca');
			ini_set('sendmail_from','sturm44@hotmail.com');
			mail('ftheriault@cvm.qc.ca',$_POST['titreCon'],$_POST['comments']);
			
			}

					
		}
	}