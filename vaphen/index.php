<!DOCTYPE HTML>
<html>
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <meta name="viewport"
	  content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	  <title>Was ist Disputamus? - Diskutieren - Nachrichten</title>
	  <link rel="stylesheet" href="../styles/big.css"
	  media="only screen and (min-width: 761px)">
	  <link rel="stylesheet" href="../styles/small.css"
	  media="only screen and (max-width: 760px)">
	   <link rel="stylesheet" href="./admin.css">
	</head>
	<body>
		<?php
			include_once("../navigation.php");
		?>
		<div id="main">
			<center><h1>Willkommen in der Admin-Area</h1></center>
			<br />
			&Uuml;berschrift: <input type="text" id="newArticleHeading" maxlength="30" />
			<br /><br />
			<button class="formattingButton" onclick='changeFormattingOfSelection("[B]", "[/B]")'><b>B</b></button>
			<button class="formattingButton" onclick='changeFormattingOfSelection("[I]", "[/I]")'><i>I</i></button>
			<button class="formattingButton" onclick='changeFormattingOfSelection("[U]", "[/U]")'><u>U</u></button>
			<button class="formattingButton"><sup>x</sup></button>
			<button class="formattingButton" id="linkButton" onclick='changeFormattingOfSelection("[LINK URL=]", "[/LINK]")'>Link</button>
			<a href='#' id="showPreviewLink" onmouseover="showPreview()">Preview</a>
			<div id="newArticlePreview" onclick="this.style.display = 'none';"></div>
			<textarea id='textareaNewArticle'>Das hier ist ein fetter test Text</textarea>
		</div>
		<script type="text/javascript">
			  function changeFormattingOfSelection(startFormattingIndicator, endFormattingIndicator)
     		  {
        		  var textareaNewArticle = document.getElementById("textareaNewArticle");	// easy usage of textarea element
        		  var selectionStart = textareaNewArticle.selectionStart; // abbreviation for index of start of selection (numeric)
        		  var selectionEnd = textareaNewArticle.selectionEnd; // abbreviation for index of end of selection (numeric)
              var selection = textareaNewArticle.value.substr(selectionStart, selectionEnd - selectionStart); // get selected text for concat (see below)
            	   /*
            	   * check if selection is already marked with formattingIndocator. if it is and we click again on 
            	   * the button, delete formatting.
            	   */
            	  if(textareaNewArticle.value.substr(selectionStart, startFormattingIndicator.length) == startFormattingIndicator && 
            	     textareaNewArticle.value.substr(selectionEnd - endFormattingIndicator.length, endFormattingIndicator.length) == endFormattingIndicator){
            	    // Text is already formatted: delete formattingIndicators
            	    // 2. following line: selection.length - 7 because of 3 chars at start and 4 chars at the and
            		var outputText = textareaNewArticle.value.substr(0, selectionStart) + 
            		    selection.substr(startFormattingIndicator.length, selection.length - (startFormattingIndicator.length + endFormattingIndicator.length)) + 
            		    textareaNewArticle.value.substr(selectionEnd, textareaNewArticle.value.length);
            	  }else if(textareaNewArticle.value.substr(selectionStart, startFormattingIndicator.length - 1) == "[LINK URL=" &&
            	  		   textareaNewArticle.value.substr(selectionEnd - endFormattingIndicator.length, endFormattingIndicator.length) == "[/LINK]"){
            	  	// if statement above: startformattingIndicator.length - 1 because of URL is set in front of last 
            	  	// character of startFormattingIndicator ']'
            	  	/*
            	  	 * text is formatted as LINK: we need a speacial handling because of changing URL in 
            	  	 * startFormattingIndicator. delete Link with URL
            	  	 */
            		var outputText = textareaNewArticle.value.substr(0, selectionStart) +
            			selection.substr(selection.indexOf("]") + 1, selection.length - (selection.indexOf("]") + 1 + endFormattingIndicator.length)) +
            			textareaNewArticle.value.substr(selectionEnd, textareaNewArticle.value.length); 
            		// indexOf + 1 because indexOf returns position in front of the given character and we want
            		// the index of the following character for substr.
            	  }else{
            	  	// Text is not formatted: set formattingIndicators
            	  	var outputText = textareaNewArticle.value.substr(0, selectionStart) + startFormattingIndicator + 
            	  	                 selection + endFormattingIndicator + 
            	  	                 textareaNewArticle.value.substr(selectionEnd, textareaNewArticle.value.length);
            	  }
      
				  textareaNewArticle.value = outputText; // set new textareaNewArticle text
				  	  
     		  }
     		  
     		  /*
     		   * following function shows a preview of the new Article centered on the screen. Content is
     		   * set via Textarea and new Article heading textbox
     		   */
     		  function showPreview(){
     		  	/*
     		  	 * replace all formatting-indicators with inherent html-tags for showing in preview div
     		  	 */
     		  	var textareaNewArticleText = "<div class=\"highlight\">" + document.getElementById("newArticleHeading").value + "</div>";
     		  	textareaNewArticleText += document.getElementById("textareaNewArticle").value;
     		    // bold
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\[B\]/g, "<b>"); // [B] is going to be <b>
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\[\/B\]/g, "</b>"); // same as above with [/B]
     		  	// italic
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\[I\]/g, "<i>"); // [I] is going to be <i>
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\[\/I\]/g, "</i>"); // [/I] is going to be </i>
     		  	// underline
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\[U\]/g, "<u>"); // [U] is going to be <u>
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\[\/U\]/g, "</u>"); // [/U] is going to be </u>
     		  	// Link
 /*
  * this replacement doesnt work. dunno why.
  * TODO: correct the statement and make links working in preview (replacement at bottom)
  */
     		  //	textareaNewArticleText = textareaNewArticleText.replace(/\[LINK URL\=/, "<a href=/"");
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\[\/LINK\]/, "</a>");
     		  	
     		  	textareaNewArticleText = textareaNewArticleText.replace(/\r?\n/g, "<br />"); // same as above with /r/n
     		  	document.getElementById("newArticlePreview").innerHTML = textareaNewArticleText;
     		  	document.getElementById("newArticlePreview").style.display = "inline";
     		  }
		</script>
	<?php
		include_once("../sidebar.php");
		include_once("../footer.php");
	?>