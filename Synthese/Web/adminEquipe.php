<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/AdminActionEquipe.php");
	
	$action = new AdminActionEquipe();
	$action->execute();

	require_once("partial/header.php");
?>
<?php
	if(isset($action->ajoutEQ))
	{
	?>
	<form action="adminEquipe.php" method="post">
	<div>
				<label for="titre">
					Nom du membre de l'équipe: 
				</label>
				<input type="text" name="titreEQ" id="titreEQ" />
			</div>
		<div>
				<label for="description">
					Description:
				</label>
				<input type="text" name="descriptionEQ" id="descriptionEQ" />
			</div>
		<div>
				<label for="path">
					Path de l'image:
				</label>
				<input type="text" name="pathEQ" id="pathEQ" />
			</div>
			
		<input type="submit" value="Add" />
		</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->suprimerEQ))
	{
	?>
		<ul>
	<?php
		foreach($action->data as $value)
			{
	?>	
			<li>ID: <?php echo $value["ID"];?> Nom: <?php echo $value["NAME"];?></li>
	<?php
			}
	?>
		</ul>
	<form action="adminEquipe.php" method="post">
		
				<label for="delete">
					ID du membre à supprimer(Number): 
				</label>
				<input type="text" name="deleteEQ" id="deleteEQ" />

			
		<input type="submit" value="Delete"/>
	</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->modifierEQ))
	{
	?>
		<ul>
	<?php
		foreach($action->data as $value)
			{
	?>	
			<li>ID: <?php echo $value["ID"];?> Nom: <?php echo $value["NAME"];?></li>
	<?php
			}
	?>
	</ul>
	<form action="adminEquipe.php" method="post">
	<div>	
				<label for="EQID">
					ID du membre à modifier: 
				</label>
				<input type="text" name="EQID" id="EQID" />
			</div>
	<div>
				<label for="titre">
					Nom du membre de l'équipe à modifier: 
				</label>
				<input type="text" name="titreModEQ" id="titreModEQ" />
			</div>
		<div>
				<label for="path">
					Path de l'image du membre à modifier:
				</label>
				<input type="text" name="pathModEQ" id="pathModEQ" />
			</div>
		<div>
				<label for="description">
					Description:
				</label>
				<input type="text" name="descriptionModEQ" id="descriptionModEQ" />
			</div>
			
		<input type="submit" value="Modifier" />
		</form>
		
	<?php 
	}
	?>

<?php
	require_once("partial/footer.php");
?>