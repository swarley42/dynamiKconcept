<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/AdminActionJob.php");
	
	$action = new AdminActionJob();
	$action->execute();

	require_once("partial/header.php");
?>
<?php
	if(isset($action->ajoutJob))
	{
	?>
	<form action="adminJob.php" method="post">
	<div>
				<label for="titre">
					Titre du Poste: 
				</label>
				<input type="text" name="titreJob" id="titreJob" />
			</div>
		<div>
				<label for="description">
					Description du Poste:
				</label>
				<input type="text" name="descriptionJob" id="descriptionJob" />
			</div>
			
		<input type="submit" value="Add" />
		</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->suprimerJob))
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
	<form action="adminJob.php" method="post">
		
				<label for="delete">
					ID du Poste à supprimer(Number): 
				</label>
				<input type="text" name="deleteJob" id="deleteJob" />
			</div>
			
		<input type="submit" value="Delete"/>
	</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->modifierJob))
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
	<form action="adminJob.php" method="post">
	<div>	
				<label for="ID">
					ID du Poste à modifier: 
				</label>
				<input type="text" name="JobID" id="modID" />
			</div>
	<div>
				<label for="titre">
					Changez le Titre du Poste: 
				</label>
				<input type="text" name="JobMod" id="JobMod" />
			</div>
		<div>
				<label for="description">
					Description du Poste:
				</label>
				<input type="text" name="descriptionJobmod" id="descriptionJobmod" />
			</div>
			
		<input type="submit" value="Modifier" />
		</form>
		
	<?php 
	}
	?>

<?php
	require_once("partial/footer.php");
?>