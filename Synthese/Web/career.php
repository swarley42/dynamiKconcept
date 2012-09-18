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
	echo $action->text["CONTENT"];
	
	foreach($action->data as $value)
	{
	echo $value["TITRE"];
	echo $value["DESCRIPTION"];
	
	}
?>


<?php
	require_once("partial/footer.php");
?>