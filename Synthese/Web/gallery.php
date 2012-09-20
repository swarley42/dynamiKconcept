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
	
		if($_SESSION["easter5"])
		{
		?>
		<h1> GOOD JOB FINDING THE VERY RARE EASTER EGG!  </h1>
		<a href="?reset=true">
		<img src="images\easter.jpg"/>
		</a>
		<?php
		}
		?>
<?php
	
	require_once("partial/footer.php");
?>
