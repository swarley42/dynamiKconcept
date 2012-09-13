<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
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
	foreach($action->data as $value)
	{
	?>
	<h1><?php echo $value["NOM"]; ?></h1> <p><?php echo $value["DESCRIPTION"];?></p>
	<?php
	}
	?>




<?php
	require_once("partial/footer.php");
?>