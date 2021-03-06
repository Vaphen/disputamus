<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content=
  "text/html; charset=utf-8">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>IT Informatik Computer - Disputamus - Diskutieren</title>
  <link rel="stylesheet" href="../../styles/big.css" media=
  "only screen and (min-width: 761px)">
  <link rel="stylesheet" href="../../styles/small.css" media=
  "only screen and (max-width: 760px)">
  <link rel="stylesheet" href="../../styles/kategorie.css" type=
  "text/css">
</head>

<body>
  <p id="logo"><a href="../../index.php"><img src="../../bilder/logo.png"
  alt="logo"></a></p>

  <nav id="menue">
    <ul>
      <li>
        <a href="../../index.php">Startseite</a>
      </li>

      <li>
        <a href="../" id="menueSelected">Kategorien</a>

        <ul>
          <li>
            <a href="./">IT</a>
          </li>

          <li>
            <a href="../politik/">Politik</a>
          </li>

          <li>
            <a href="../sonstiges/">Sonstiges</a>
          </li>
        </ul>
      </li>

      <li id="menueRandArt">
       <a href="./zufaelligerArtikel/">zufälliger Artikel</a>
      </li>
    </ul>
  </nav>

  <div id="container">
    <div id="main">
      <article>
        <header>
          <p class="highlight">Ein kleiner Testartikel über IT</p>
        </header>Das hier ist ein kleiner Platzhaltertext. Er soll
        nur einmal verdeutlichen, wo spaeter anderer Text steht.
        Somit soll es mir einfach sein, das Design perfekt zu
        gestalten. Das hier ist ein kleiner Platzhaltertext. Er
        soll nur einmal verdeutlichen, wo spaeter anderer Text
        steht. Somit soll es mir einfach sein, das Design perfekt
        zu gestalten. Das hier ist ein kleiner Platzhaltertext. Er
        soll nur einmal verdeutlichen, wo spaeter anderer Text
        steht. Somit soll es mir einfach sein, das Design perfekt
        zu gestalten.<br>
        Das hier ist ein kleiner Platzhaltertext. Er soll nur
        einmal verdeutlichen, wo spaeter anderer Text steht. Somit
        soll es mir einfach sein, das Design perfekt zu gestalten.
        Das hier ist ein kleiner Platzhaltertext. Er soll nur
        einmal verdeutlichen, wo spaeter anderer Text steht. Somit
        soll es mir einfach sein, das Design perfekt zu
        gestalten.<br>
        Das hier ist ein kleiner Platzhaltertext. Er soll nur
        einmal verdeutlichen, wo spaeter anderer Text steht. Somit
        soll es mir einfach sein, das Design perfekt zu gestalten.
        Das hier ist ein kleiner Platzhaltertext. Er soll nur
        einmal verdeutlichen, wo spaeter anderer Text steht. Somit
        soll es mir einfach sein, das Design perfekt zu gestalten.

        <footer>
          1) tagesschau.de/beispiel<br>
          2) spiegel.de/beispiel2
        </footer>
      </article><br>
     <a href="javascript:changeCommentState()" id=
      "comment" style="display: none">Kommentieren</a>

      <form method="post" action="./index.php#commentTable">
        <table id="commentTable">
          <tr>
            <td class="Label">Pseudonym:</td>

            <td><input type="text" name="pseudonym" id="pseudonym"
            class="textfield" maxlength="20" value=
            "<?=htmlentities($_POST['pseudonym'])?>"></td>
          </tr>

          <tr>
            <td class="Label">Überschrift:</td>

            <td><input type="text" name="heading" id="heading"
            class="textfield" maxlength="50" value=
            "<?=htmlentities($_POST['heading'])?>"></td>
          </tr>

          <tr>
            <td class="Label">Ihre Meinung:</td>

            <td>
            <textarea class="textfield" name="content" id="content"
            maxlength="5000"><?=htmlentities($_POST['content'])?></textarea>
			  </td>
          </tr>
        </table><br>
        <input type="submit" value="Kommentar absenden" name=
        "submitComment" id="submitComment">
      </form>
    </div>
    <script type="text/javascript">
// comment_saved contains the status if saving a comment was successfull. If it was, the comment-field isn't shown anoymore
  var comment_saved = <?php echo ($success) ? '1' : '0';?>; // success is defined in file / funktionen / saveComment.php
/*
 * commentTable is an anchor. it is set if there was an error in the comment.
 * the anchor centeres the formfield in the browser.
 * We need to hide the elements with js because they need to be shown if js is disabled in the browser:
 */
  if (document.URL.indexOf("commentTable") <= -1 || comment_saved) { // if there's no error anchor or saving was successfull, no need to show commentarea
     document.getElementById("commentTable").style.display = "none"; // don't show the Comment-Form (element of commentTable)
     document.getElementById("submitComment").style.display = "none"; // final submitbutton is hidden
     document.getElementById("comment").style.display = "inline"; // link which runs changeCommentState() and shows commentarea
   // element with the id 'comment' is set as display: none by default. see HTML above
  }

/*
 * if js is enabled, a click on the element with the id 'comment' calls this function and shows commentarea
 */

  function changeCommentState() {
     document.getElementById("commentTable").style.display = "table"; // show the table which is parrent of the commentform
     document.getElementById("comment").style.display = "none"; // hide Link which has called this function
     document.getElementById("submitComment").style.display = "inline"; // show submit button from form which is not element of 'commentTable'
  }
    </script>

    <div id="randomArticle">
    
      <p class="randArtKategorie"><?=$germanCategoryOutput;?>
      </p>

      <div class="randArtMain">
        <h2>
       
        </h2>
      
      </div>
    </div>
  </div>

  <div id="footer">
    <table>
      <thead>
        <tr>
          <th>Kategorien</th>

          <th>Anderes</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>
            <a href="./kategorien/it/">IT/Computer</a>
          </td>

          <td>
            <a href="#">Impressum</a>
          </td>
        </tr>

        <tr>
          <td>
            <a href="./kategorien/politik/">Politik</a>
          </td>

          <td>
            <a href="./faq/">FAQ</a>
          </td>
        </tr>

        <tr>
          <td>
            <a href="./kategorien/sonstiges/">Sonstiges</a>
          </td>

          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
