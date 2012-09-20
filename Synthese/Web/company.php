<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/CompanyAction.php");
	
	$action = new CompanyAction();
	$action->execute();

	require_once("partial/header.php");
	echo $action->data["CONTENT"];
?>
<a href="equipe.php">Information sur notre équipe!</a>
<?php
		//Lien #2 pour le easter
		if(!isset($_SESSION["easter2"]) && $_SESSION["easter1"]==true)
		{
		?>
		<a href="?easter2=true">?</a>
		<?php
		}
		?>
<?php
	require_once("partial/footer.php");
?>
