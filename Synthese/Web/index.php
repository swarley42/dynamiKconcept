<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/IndexAction.php");
	
	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php");
?>

 



<?php
	require_once("partial/footer.php");
?>