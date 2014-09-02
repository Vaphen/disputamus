  			<div id="randomArticle">
           <h2 id="randArtHeading">Zuf&auml;lliger Artikel</h2>
<?php
	$rand = rand(0, 2);
	$category = array("IT", "Politics", "Other");
	$randomCategory = $category[$rand]; // the random selected Category for Selection Query
	
	include_once("funktionen/randContent.php");
	$randContent = new RandArticle($randomCategory); // set the category of the random article
	
	/*
	 * we should display the category in german
	 */
	switch($randomCategory){
		case "IT": 
			$germanCategoryOutput = "IT / Computer"; 
			break;
		case "Politics":
			$germanCategoryOutput = "Regierung und Politik";
			break;
		case "Other":
			$germanCategoryOutput = "Andere Themen";
			break;
		default: $germanCategoryOutput = "Die Kategorie konnte nicht ermittelt werden."; break; // Error-Handling
	}
?>	
           <p class="randArtKategorie"><?=$germanCategoryOutput?></p>
            <div class="randArtMain">
	<h2>
		<?=$randContent->getRandArticleHeading()?>
	</h2>
		<?=$randContent->getRandArticleTeaser()?>            	
            </div>
          </div>