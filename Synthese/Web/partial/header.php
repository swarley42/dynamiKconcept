<!--/* ---------------------------------------------------
* *
* Projet synth�se : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
		<meta http-equiv="imagetoolbar" content="no" />
        <link href="css/global.css" rel="stylesheet" type="text/css" media="screen" />
		<title>DynamiKoncept</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	    </head>
    <body>
		<div class="site-container">
		    <div class="page-container">
		    	<div class="site-header">
		    		<div class="page-title-section">
			    		<h1><span>DynamiKoncept</span></h1>			    		
		    		</div>
		    		<div class="menu-section">
		    			<ul>
		    				<li><a href="index.php">Acceuil</a></li>
		    				<li><a href="services.php">Service</a></li>
		    				<li><a href="career.php">Carri�res</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="company.php">Compagnie</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li>Bonjour, <?php echo $action->getName(); ?></li>
								<?php
								if(!$action->isConnected())
								{
								?>
								<li><a href="login.php">Login</a></li>
								<li><a href="register.php">S'Enregistrer</a></li>
								<?php
								}
								else
								{
								?>
									<li><a href="?logout=true">D�connexion</a></li>
								<?php
									if($action->isAdmin())
									{
								?>
									<li><a href="admin.php">Administrateur</a>>/li>
								<?php
									}
								}
								?>
		    			</ul>
		    		</div>
		    		<div class="clear"></div>
		    	</div>
		    	<div class="page-content">