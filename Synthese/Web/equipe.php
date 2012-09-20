<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
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
	// Boucle d'affichage du contenu dans pour les équipes
	foreach($action->data as $value)
	{
	?>
	<h2><?php echo $value["NAME"]; ?></h2> <p><?php echo $value["DESCRIPTION"];?></p>
	<?php
	echo '<img src="'.$value['IMAGE'].'" alt="La photo demandé n`est pas disponible" />';
	}
	?>

		<?php
		// Lien #3 pour le easter
		if(!isset($_SESSION["easter3"]) && $_SESSION["easter2"]==true)
		{
		?>
		<a href="?easter3=true">?</a>
		<?php
		}
		?>


<?php
	require_once("partial/footer.php");
?>