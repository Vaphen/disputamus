<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content=
  "text/html; charset=utf-8">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>Was ist Disputamus? - Diskutieren - Nachrichten</title>
  <link rel="stylesheet" href="./styles/big.css" media=
  "only screen and (min-width: 761px)">
  <link rel="stylesheet" href="./styles/small.css" media=
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
      <a href="/zufaelligerArtikel/" id="<?php if($_SERVER['PHP_SELF'] == '/zufaelligerArtikel/index.php') echo 'menueSelected'; ?>">
      zufälliger Artikel</a>
      </li>
    </ul>
  </nav>

  <div id="container">
    <div id="main">
      <p class="highlight">Wo bin ich hier?</p>

      <p>Diese Webseite stellt verschiedene Themen und Meinungen
      vor. Sie sollen sich beim Lesen eine eigene Meinung zu den
      verschiedenen Themen bilden und diese dann mit der restlichen
      Community teilen. Es werden interessante Diskussionen
      zustande kommen.<br>
      <br>
      <i class="keyword">Probieren Sie es aus!</i></p><br>
      <br>

      <div class="highlight">
        Wie kann ich mitmachen?
      </div>

      <p>Es ist ganz einfach mit anderen Personen zu interagieren:
      Einfach im Menü unter "Kategorien" eine Kategorie und einen
      interessanten Artikel wählen; schon sehen Sie die Kommentare
      der anderen Benutzer und können <i class="keyword">komplett
      anonym, kostenlos und ohne Anmeldung</i> eigene Ideen in die
      Konversation mit einfliessen lassen.</p><br>
      <br>

      <div class="highlight">
        Weitere Informationen
      </div>

      <p>Weitere Informationen können im <a href=
      "./index.php?pid=99">FAQ-Bereich</a> nachgelesen werden.</p>
    </div>

    <div id="randomArticle">
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

      <p class="randArtKategorie"><?=$germanCategoryOutput?>
      </p>

      <div class="randArtMain">
        <h2><?=$randContent->getRandArticleHeading()?></h2><?=$randContent->getRandArticleTeaser()?>
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
