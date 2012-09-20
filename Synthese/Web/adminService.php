<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/AdminActionService.php");
	
	$action = new AdminActionService();
	$action->execute();

	require_once("partial/header.php");
?>
<?php
	if(isset($action->ajoutService))
	{
	?>
	<form action="adminService.php" method="post">
	<div>
				<label for="titre">
					Nom du Service: 
				</label>
				<input type="text" name="titreService" id="titreService" />
			</div>
		<div>
				<label for="description">
					Description du Service:
				</label>
				<input type="text" name="descriptionService" id="descriptionService" />
			</div>
			
		<input type="submit" value="Add" />
		</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->suprimerService))
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
	<form action="adminService.php" method="post">
		
				<label for="delete">
					ID du Service à supprimer(Number): 
				</label>
				<input type="text" name="deleteSer" id="deleteSer" />

			
		<input type="submit" value="Delete"/>
	</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->modifierService))
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
	<form action="adminService.php" method="post">
	<div>	
				<label for="ID">
					ID du Service à modifier: 
				</label>
				<input type="text" name="SerID" id="modID" />
			</div>
	<div>
				<label for="titre">
					Changez le nom du Service: 
				</label>
				<input type="text" name="ServiceMod" id="ServiceMod" />
			</div>
		<div>
				<label for="description">
					Description:
				</label>
				<input type="text" name="descriptionSer" id="descriptionSer" />
			</div>
			
		<input type="submit" value="Modifier" />
		</form>
		
	<?php 
	}
	?>

<?php
	require_once("partial/footer.php");
?>