<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content=
  "text/html; charset=utf-8">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>FAQ - Disputamus - Diskutieren</title>
  <link rel="stylesheet" href="/styles/big.css" media=
  "only screen and (min-width: 761px)">
  <link rel="stylesheet" href="/styles/small.css" media=
  "only screen and (max-width: 760px)">
</head>

<body>
  <p id="logo"><a href="/index.php"><img src="/bilder/logo.png"
  alt="logo"></a></p>

  <nav id="menue">
    <ul>
      <li>
        <a href="/" id="<?php if($_SERVER['PHP_SELF'] == '/index.php') echo 'menueSelected'; ?>">Startseite</a>
      </li>

      <li>
        <?php
         /*
          * if elements belong to menuepoint "Kategorien" highlight it by giving it the id "menueSelected"
          */
         if($_SERVER['PHP_SELF'] == "/kategorien/index.php"   ||
            $_SERVER['PHP_SELF'] == "/kategorien/it/index.php"    ||
            $_SERVER['PHP_SELF'] == "/kategorien/politik/index.php"    ||
            $_SERVER['PHP_SELF'] == "/kategorien/sonstiges/index.php")
              echo('<a href="/kategorien/" id="menueSelected">Kategorien</a>');
            else 
              echo('<a href="/kategorien/">Kategorien</a>');
        ?>

        <ul>
          <li>
            <a href="/kategorien/it/">IT</a>
          </li>

          <li>
            <a href="/kategorien/politik/">Politik</a>
          </li>

          <li>
            <a href="/kategorien/sonstiges/">Sonstiges</a>
          </li>
        </ul>
      </li>

      <li id="menueRandArt">
        <?php //if($_SERVER['PHP_SELF'] == '/zufaelligerArtikel/index.php') echo 'menueSelected'; ?><a href="/zufaelligerArtikel/"
        id="xs">zufälliger Artikel</a>
      </li>
    </ul>
  </nav>

  <div id="container">
    <div id="main">
      <div id="header">
        Frequently Asked Questions

        <p id="subheader">häufig gestellte Fragen</p>
      </div>

      <p class="highlight">Wo bin ich hier?</p>

      <p id="answerOne">Diese Webseite stellt verschiedene Themen
      und Meinungen vor. Sie (als Leser) sollen sich dabei eine
      <i class="keyword">eigene Meinung</i> zu den verschiedenen
      Themen bilden und diese dann <i class="keyword">mit der
      restlichen Community teilen.</i> Somit entstehen interessante
      Diskussionen.</p><br>

      <p class="highlight">Ist diese Seite wirklich kostenlos?</p>

      <p>Ja. Diese Webseite ist zu <i class="keyword">100%
      kostenlos</i>.</p><br>

      <p class="highlight">Ist mein Kommentar wirklich anonym?</p>

      <p><i class="keyword">So anonym wie es nur sein kann</i>.
      Diese Webseite speichert keine Daten über die Besucher oder
      die Verfasser von Kommentaren. Allerdings wird die Seite in
      Deutschland gehostet; der Serverbetreiber untersteht somit
      dem deutschen Recht. Auf die Daten die dieser über die
      Besucher dieser Seite erhebt habe ich keinen
      Einfluss.</p><br>

      <p class="highlight">Warum kann ich kein Kommentar
      kommentieren?</p>

      <p>Der Grund liegt an der Idee dieser Seite. Die Besucher
      sollen <i class="keyword">untereinander kommunizieren</i> und
      sich <i class="keyword">nicht auf einen einzelnen Kommentar
      fokussieren</i>. Das Weglassen diser Funktion soll somit
      einen stärkeren Meinungsaustausch fördern.</p><br>

      <p class="highlight">Warum kann ich keinen Artikel
      erstellen?</p>

      <p>Der Grund liegt auch hier wieder an der Idee dieser Seite.
      Sie soll <i class="keyword">kein Forum</i>, sondern <i class=
      "keyword">ein Diskussionsportal</i> für speziell selektierte
      und verschiedenen Themenbreichen angehörenden Meinungen
      darstellen.</p>
    </div>

    <div id="randomArticle">
     <?php
        $rand = rand(0, 2);
        $category = array("IT", "Politics", "Other");
        $randomCategory = $category[$rand]; // the random selected Category for Selection Query
              
        include_once("../funktionen/randContent.php");
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

      <p class="randArtKategorie"><?=$germanCategoryOutput;?>
      </p>

      <div class="randArtMain">
        <h2>
          <?=$randContent->getRandArticleHeading();?>
        </h2>
        <?=$randContent->getRandArticleTeaser();?>
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
            <a href="/kategorien/it/">IT/Computer</a>
          </td>

          <td>
            <a href="#">Impressum</a>
          </td>
        </tr>

        <tr>
          <td>
            <a href="/kategorien/politik/">Politik</a>
          </td>

          <td>
            <a href="/faq/">FAQ</a>
          </td>
        </tr>

        <tr>
          <td>
            <a href="/kategorien/sonstiges/">Sonstiges</a>
          </td>

          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
  
</body>
</html>
