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
	// Boucle d'affichage pour les images dans la gallery
	foreach($action->data as $value)
	{
	echo '<img src="'.$value['PATH'].'" alt="La photo demandé n`est pas disponible" />';
	}
		//Si l'utilisateur a trouvé les 5 liens dans le bon ordre,l'image easter apparait
		//S'il la clique, le easter se reset
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
