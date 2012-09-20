<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	session_start();
	
	require_once("action/dao/Connection.php");
	require_once("action/Constants.php");

	abstract class CommonAction {
		public static $VISIBILITY_PUBLIC = 0;	
		public static $VISIBILITY_MEMBER = 1;	
		public static $VISIBILITY_MODERATOR = 2;	
		public static $VISIBILITY_ADMINISTRATOR = 3;	
		
		private $visibility;
				
	
		public function __construct($visibility) {
			$this->visibility = $visibility;
		}
	
		public function execute() {	
		
			if (isset($_GET["logout"])) {
				session_unset();
				session_destroy();
				session_start();
			}
			//Condition pour les liens Easter
			if(isset($_GET["easter1"]))
			{
			$_SESSION["easter1"] = true;
			}
			if(isset($_GET["easter2"]))
			{
			$_SESSION["easter2"] = true;
			}
			if(isset($_GET["easter3"]))
			{
			$_SESSION["easter3"] = true;
			}
			if(isset($_GET["easter4"]))
			{
			$_SESSION["easter4"] = true;
			}
			if(isset($_GET["easter5"]))
			{
			$_SESSION["easter5"] = true;
			}
			// reset du easter
			if(isset($_GET["reset"]))
			{
			$_SESSION["easter1"] = null;
			$_SESSION["easter2"] = null;
			$_SESSION["easter3"] = null;
			$_SESSION["easter4"] = null;
			$_SESSION["easter5"] = null;
			}

			if (!isset($_SESSION["visibility"])) {
				$_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC;
			}
			
			
			$this->executeAction();
			
			Connection::closeConnection();
		}
		
		public function isConnected() {
			return $_SESSION["visibility"] > CommonAction::$VISIBILITY_PUBLIC;
		}
		
		public function isAdmin() {
			return $_SESSION["visibility"] = CommonAction::$VISIBILITY_ADMINISTRATOR;
		}
		
		public function getName() {
			$name = "Invité";
			
			if (isset($_SESSION["username"])) {
				$name = $_SESSION["username"];
			}
			
			return $name;
		}
		
		public function getCurrentPage() {
			 $pageURL = 'http';
			 $pageURL .= "://";
			 if ($_SERVER["SERVER_PORT"] != "80") {
			  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			 } else {
			  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			 }
			 return $pageURL;
		}
	
		protected abstract function executeAction();
	}