<?php
/* ---------------------------------------------------
* *
* Projet synth�se : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php

	require_once("action/EquipeAction.php");
	
	$action = new EquipeAction();
	$action->execute();

	require_once("partial/header.php");
?>
	<?php 
	foreach($action->data as $value)
	{
	?>
	<h1><?php echo $value["NAME"]; ?></h1> <p><?php echo $value["DESCRIPTION"];?></p>
	<?php
	echo '<img src="'.$value['IMAGE'].'" />';
	}
	?>




<?php
	require_once("partial/footer.php");
?>