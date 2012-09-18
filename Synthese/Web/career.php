<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/CareerAction.php");
	
	$action = new CareerAction();
	$action->execute();

	require_once("partial/header.php");
	echo $action->data["CONTENT"];
?>


<?php
	require_once("partial/footer.php");
?>