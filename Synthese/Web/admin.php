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

	<?php 
	if(isset($action->home))
	{
	?>	
	<form action="admin.php" method="post">
		<textarea id="editor1" name="editor1" rows="20" cols="100">&lt;p&gt;<?php echo $action->data["CONTENT"];?>&lt;/p&gt;</textarea>
			<script type="text/javascript">
				CKEDITOR.replace( 'editor1' );
			</script>
		<input type="submit" name="submit" id="submit"/>
	</form>
	<?php 
	}
	?>
	
	<?php 
	if(isset($action->company))
	{
	?>	
	<form action="admin.php" method="post">
		<textarea id="editor2" name="editor2" rows="20" cols="100">&lt;p&gt;<?php echo $action->data["CONTENT"];?>&lt;/p&gt;</textarea>
			<script type="text/javascript">
				CKEDITOR.replace( 'editor2' );
			</script>
		<input type="submit" name="submit" id="submit"/>
	</form>
	<?php 
	}
	?>
	
	<?php
	if(isset($action->ajoutImage))
	{
	?>
	<form action="admin.php" method="post">
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
	<form action="admin.php" method="post">
		
				<label for="delete">
					ID de l'image à supprimer(Number): 
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
	<form action="admin.php" method="post">
	<div>	
				<label for="modID">
					ID de l'image à modifier: 
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
	if(isset($action->ajoutService))
	{
	?>
	<form action="admin.php" method="post">
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
	<form action="admin.php" method="post">
		
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
	<form action="admin.php" method="post">
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
				<input type="submit" value="Modifier" />
			</div>
			

		</form>
		
	<?php 
	}
	?>
	<?php
	if(isset($action->ajoutJob))
	{
	?>
	<form action="admin.php" method="post">
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
	<form action="admin.php" method="post">
		
				<label for="delete">
					ID du Poste à supprimer(Number): 
				</label>
				<input type="text" name="deleteJob" id="deleteJob" />

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
	<form action="admin.php" method="post">
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
	if(isset($action->ajoutEQ))
	{
	?>
	<form action="admin.php" method="post">
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
	<form action="admin.php" method="post">
		
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
	<form action="admin.php" method="post">
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