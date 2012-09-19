<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/GalleryAction.php");
	
	$action = new GalleryAction();
	$action->execute();

	require_once("partial/header.php");

	foreach($action->data as $value)
	{
	echo '<img src="'.$value['PATH'].'" alt="La photo demandé n`est pas disponible" />';
	}


	
	require_once("partial/footer.php");
?>
