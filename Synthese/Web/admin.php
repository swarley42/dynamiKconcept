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
		<textarea id="editor1" name="editor1" rows="20" cols="100"><?php echo $action->data["CONTENT"];?></textarea>
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
		<textarea id="editor2" name="editor2" rows="20" cols="100"><?php echo $action->data["CONTENT"];?></textarea>
			<script type="text/javascript">
				CKEDITOR.replace( 'editor2' );
			</script>
		<input type="submit" name="submit" id="submit"/>
	</form>
	<?php 
	}
	?>
	
	
<?php
	require_once("partial/footer.php");
?>