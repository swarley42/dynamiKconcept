<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/AdminAction.php");
	
	$action = new AdminAction();
	$action->execute();

	require_once("partial/header.php");
?>
	<a href="?accueil=true"> Accueil </a>
	<a href="?gallery=true"> Gallerie </a>
	<a href="?services=true"> Services </a>
	
	<?php 
	if(isset($action->acceuil))
	{
	?>
	
	<?php 
	}
	?>
<?php
	require_once("partial/footer.php");
?>