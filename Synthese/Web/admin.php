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
		foreach($action->data as $value)
			{
			
			echo $value["ID"];
			echo $value["TITLE"];
			
			}
	?>
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
		foreach($action->data as $value)
			{
			
			echo $value["ID"];
			echo $value["TITLE"];
			
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
	require_once("partial/footer.php");
?>