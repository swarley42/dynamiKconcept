<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/LoginAction.php");
	
	$action = new LoginAction();
	$action->execute();
	
	require_once("partial/header.php");
	
	?>

		<form action="login.php" method="post">
			
			<div>
				<label for="username">
					Nom d'usager : 
				</label>
				<input type="text" name="username" id="username" />
			</div>

			<div>
				<label for="password">
					Mot de passe : 
				</label>
				<input type="password" name="pwd" id="password" />
			</div>
			
			<input type="submit" value="Connexion" />
		</form>
		
	<?php
	
	require_once("partial/footer.php");
?>