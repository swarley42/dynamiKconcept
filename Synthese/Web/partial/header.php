<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
		<meta http-equiv="imagetoolbar" content="no" />
        <link href="css/global.css" rel="stylesheet" type="text/css" media="screen" />
		<title>DynamiKoncept</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	    </head>
    <body>
	<a href="index.php">Acceuil</a>
	
	<a href="services.php">Service</a>
	<a href="career.php">Carrières</a>
	<a href="gallery.php">Gallery</a>
	<a href="company.php">Compagnie</a>
	<a href="contact.php">Contact</a>
	Bonjour, <?php echo $action->getName(); ?>
	<?php
		if(!$action->isConnected())
			{
		?>
			<a href="login.php">Login</a>
	<?php
			}
			else
			{
		?>
			<a href="?logout=true">Déconnexion</a>
		<?php
			}
		<?