<?php
/* ---------------------------------------------------
* *
* Projet synth�se : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php

	require_once("action/ServiceAction.php");
	
	$action = new ServiceAction();
	$action->execute();

	require_once("partial/header.php");
?>
	<?php 
	// Boucle d'affichage pour les services offerts
	foreach($action->data as $value)
	{
	?>
	<h2><?php echo $value["NAME"]; ?></h2> <p><?php echo $value["DESCRIPTION"];?></p>
	<?php
	}
	?>




<?php
	require_once("partial/footer.php");
?>