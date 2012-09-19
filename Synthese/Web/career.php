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
	?>
	<?php 
	foreach($action->data as $value)
	{
	?>
	<h1><?php echo $value["TITLE"]; ?></h1> <p><?php echo $value["DESCRIPTION"];?></p>
	<?php
	}
	?>



<?php
	require_once("partial/footer.php");
?>