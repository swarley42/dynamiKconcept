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
?>
<?php 
	foreach($action->data as $value)
	{
	?>
	
	<?php
	}
	?>

<?php
	require_once("partial/footer.php");
?>
