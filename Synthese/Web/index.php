<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/IndexAction.php");

	
	$action = new IndexAction();
	$action->execute();

	require_once("partial/header.php");
	echo $action->data["CONTENT"];
?>


 
		<?php
		if(!isset($_SESSION["easter4"]) && $_SESSION["easter3"]==true)
		{
		?>
		<a href="?easter4=true">?</a>
		<?php
		}
		?>


<?php
	require_once("partial/footer.php");
?>