<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/AdminAction.php");
	
	$action = new AdminAction();
	$action->execute();

	require_once("partial/header.php");
?>
	<a href="?home=true"> Accueil </a>
	<a href="?gallery=true"> Gallerie </a>
	<a href="?services=true"> Services </a>
	
	<?php 
	if(isset($action->home))
	{
	?>
	<textarea id="editor1" name="editor1">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
	<?php 
	}
	?>
	<?php
	if(isset($action->gallery))
	{
	?>
	<a href="?ajoutImage=true"> Ajouter </a>
	<a href="?suprimerImage=true"> Delete </a>
	<a href="?modifierImage=true"> Modifier </a>
	<?php 
	}
	?>
		<?php
		if(isset($action->ajoutImage))
		{
		?>
		<form action="admins.php" method="post">
		<div>
				<label for="titre">
					Titre: 
				</label>
				<input type="text" name="titre" id="titre" />
			</div>
		<div>
				<label for="path">
					Path:
				</label>
				<input type="text" name="path" id="path" />
			</div>
		<div>
				<label for="description">
					Description:
				</label>
				<input type="text" name="description" id="description" />
			</div>
			
		<input type="submit" value="Add" />
		</form>
		
		<?php 
		}
		?>
	
		
	
<?php
	require_once("partial/footer.php");
?>