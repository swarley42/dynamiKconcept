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
	<form action="?choix=true" method = "get">
	<Input type = "radio" Name = "rImage" Value = "ajouter">Ajouter
	<Input type = "radio" Name = "rImage" Value = "modifier">Modifier
	<Input type = "radio" Name = "rImage" Value = "suprimer">Suprimer
	<input type= "button" Name ="boutonImage" value="ChoixImage" />
	</form>
	<?php 
	}
	?>
		<?php 
		if(isset($action->ajout || $action->suprimer || $action->modifier))
		{
			if(isset($action->ajout))
			{
			?>
			
			<?php 
			}
			?>
			<?php 
			if(isset($action->suprimer))
			{
			?>
			
			<?php 
			}
			?>
			<?php 
			if(isset($action->modifier))
			{
			?>
			
			<?php 
			}
			?>
		<?php 
		}
		?>
	
<?php
	require_once("partial/footer.php");
?>