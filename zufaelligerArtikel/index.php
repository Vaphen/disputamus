<!DOCTYPE HTML>
<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>IT Informatik Computer - Disputamus - Diskutieren</title>
			<link rel="stylesheet" href="/styles/big.css" media="only screen and (min-width: 761px)" />
			<link rel="stylesheet" href="/styles/small.css" media="only screen and (max-width: 760px)" />
			<link rel="stylesheet" href="/styles/kategorie.css" type="text/css" />
	</head>
	<body>
<?php
	include_once("../navigation.php");
?>
<div id="main">
<?php
	include_once("../funktionen/randContent.php");
	$randContent = new RandArticle();
	include_once("../funktionen/getComment.php");
	$Comments = new GetComment(1);
?>
	<article>
	<header class="highlight">	
	<?=$randContent->getRandArticleHeading()?>
	</header>
	<?=$randContent->getRandArticleContent()?>
	</article>
	<br />
	<hr />
	<?php
		/* we show every comment until we reach the maximum
		 * of selected and displayable comments. */
		for($i = 0; $i < $Comments->getNumOfReturnedComments(); $i++){  
	?>
	<br />
	<article>
		<header class="commentHighlight">
			<?=$Comments->getCommentHeading($i) . " (von " . $Comments->getCommentPseudonym($i) . ")"?>		
		</header>
			<?=$Comments->getComment($i)?>
	</article>
	<?php } ?>
</div>
<?php
	include_once("../sidebar.php");
	include_once("../footer.php");
?>