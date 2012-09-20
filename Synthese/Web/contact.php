<?php
/* ---------------------------------------------------
* *
* Projet synthèse : H2012 B63*
* Fait Par : Etienne Belanger,Hugo Fontaine*
* *
*--------------------------------------------------- */
?>
<?php
	require_once("action/ContactAction.php");
	
	$action = new ContactAction();
	$action->execute();

	require_once("partial/header.php");
?>
	<div> Location:  </div>
	<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?hl=fr&amp;ie=UTF8&amp;q=cegep+du+vieux+montreal&amp;fb=1&amp;gl=ca&amp;hq=cegep+du+vieux+montreal&amp;hnear=cegep+du+vieux+montreal&amp;cid=0,0,10680833557559241255&amp;t=m&amp;ll=45.51358,-73.564088&amp;spn=0.007217,0.013733&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.ca/maps?hl=fr&amp;ie=UTF8&amp;q=cegep+du+vieux+montreal&amp;fb=1&amp;gl=ca&amp;hq=cegep+du+vieux+montreal&amp;hnear=cegep+du+vieux+montreal&amp;cid=0,0,10680833557559241255&amp;t=m&amp;ll=45.51358,-73.564088&amp;spn=0.007217,0.013733&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Agrandir le plan</a></small>
	<div> Pour nous joindre:  </div>
	<form action="contact.php" method="post">
		<div>
				<label for="path">
					Titre:
				</label>
				<input type="text" name="titreCon" id="titreCon" />
			</div>
		<div>
				<label for="description">
					Message:
				</label>
				<input type="text" name="comments" id="comments" />
			</div>
			
		<input type="submit" value="Envoyer" />
		</form>
		
		
		<?php
		if(!isset($_SESSION["easter1"]))
		{
		?>
		<a href="?easter1=true">?</a>
		<?php
		}
		?>
<?php
	require_once("partial/footer.php");
?>
