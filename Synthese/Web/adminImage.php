<?php
/* ---------------------------------------------------
* *
* Projet synth�se : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/AdminActionImage.php");
	
	$action = new AdminActionImage();
	$action->execute();

	require_once("partial/header.php");
?>
<?php
	if(isset($action->ajoutImage))
	{
	?>
	<form action="adminImage.php" method="post">
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
	if(isset($action->suprimerImage))
	{
	?>
		<ul>
	<?php
		foreach($action->data as $value)
			{
	?>
			<li>ID:<?php echo $value["ID"]; ?>    Nom:<?php echo $value["TITLE"]; ?></li>
	<?php
			}
	?>
		</ul>
	<form action="adminImage.php" method="post">
		
				<label for="delete">
					ID de l'image � supprimer(Number): 
				</label>
				<input type="text" name="deleteImg" id="deleteImg" />
		
			
		<input type="submit" value="Delete"/>
	</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->modifierImage))
	{
	?>
		<ul>
	<?php
		foreach($action->data as $value)
			{
	?>
			<li>ID: <?php echo $value["ID"];?> Nom: <?php echo $value["TITLE"];?></li>
	<?php
			}
	?>
		</ul>
	<form action="adminImage.php" method="post">
	<div>	
				<label for="modID">
					ID de l'image � modifier: 
				</label>
				<input type="text" name="modID" id="modID" />
			</div>
	<div>
				<label for="titre">
					Titre: 
				</label>
				<input type="text" name="titreMod" id="titreMod" />
			</div>
		<div>
				<label for="path">
					Path:
				</label>
				<input type="text" name="pathMod" id="pathMod" />
			</div>
		<div>
				<label for="description">
					Description:
				</label>
				<input type="text" name="descriptionMod" id="descriptionMod" />
			</div>
			
		<input type="submit" value="Modifier" />
		</form>
		
	<?php 
	}
	?>

<?php
	require_once("partial/footer.php");
?>