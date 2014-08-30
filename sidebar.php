  			<div id="randomArticle">
           <h2 id="randArtHeading">Zuf&auml;lliger Artikel</h2>
           <p class="randArtKategorie">IT/Computer</p>
            <div class="randArtMain">
<?php
	include_once("funktionen/randContent.php");
	$randContent = new RandArticle();
?>	
	<h2>
		<?=$randContent->getCommentHeading?>
	</h2>
		<?=$randContent->getCommentTeaser?>            	
            </div>
          </div>