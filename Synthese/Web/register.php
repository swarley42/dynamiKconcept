<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/RegisterAction.php");
	
	$action = new RegisterAction();
	$action->execute();
	
	require_once("partial/header.php");
	
	?>

		<form action="register.php" method="post">
			
			<div>
				<label for="username">
					Nom d'usager : 
				</label>
				<input type="text" name="regUser" id="username" />
			</div>

			<div>
				<label for="password">
					Mot de passe : 
				</label>
				<input type="password" name="regPwd" id="password" />
			</div>
			
			<div>
				<label for="name">
					Nom : 
				</label>
				<input type="text" name="regName" id="name" />
			</div>
			
			<input type="submit" value="Enregistrer" />
		</form>
		
		
		<?php
		//Lien #5 pour le easter
		if(!isset($_SESSION["easter5"]) && $_SESSION["easter4"]==true)
		{
		?>
		<a href="?easter5=true">?</a>
		<?php
		}
		?>
		
	<?php
	
	require_once("partial/footer.php");
?>