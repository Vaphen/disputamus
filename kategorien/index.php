<!DOCTYPE html>

<html>
<head>
  <meta name="generator" content="Bluefish 2.2.7" >
  <meta http-equiv="Content-Type" content=
  "text/html; charset=utf-8">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>IT Politik Anderes - Disputamus - Diskutieren</title>
  <link rel="stylesheet" href="../styles/big.css" media=
  "only screen and (min-width: 761px)">
  <link rel="stylesheet" href="../styles/small.css" media=
  "only screen and (max-width: 760px)">
  <link rel="stylesheet" href="../styles/kategorie.css" type=
  "text/css">
</head>

<body>
  <p id="logo"><a href="../index.php"><img src="../bilder/logo.png"
  alt="logo"></a></p>

  <nav id="menue">
    <ul>
      <li>
        <a href="../index.php">Startseite</a>
      </li>

      <li>
        <a href="./" id="menueSelected">Kategorien</a>
        
        <ul>
          <li>
            <a href="./it/">IT</a>
          </li>

          <li>
            <a href="./politik/">Politik</a>
          </li>

          <li>
            <a href="./sonstiges/">Sonstiges</a>
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
      <div id="header">
        Kategorien

        <p id="subheader">Wählen Sie eine Rubrik</p>
      </div><br>

      <div id="selectKategorieContainer">
        <p class="highlight"><a href="./it/" class=
        "selectKategorie">IT, Computer und Informatik</a></p>

        <p class="highlight"><a href="./politik/" class=
        "selectKategorie">Politik im In- und Ausland</a></p>

        <p class="highlight"><a href="./sonstiges/"
        class="selectKategorie">Andere Themen</a></p>
      </div><br>
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

      <p class="randArtKategorie"><?=$germanCategoryOutput?>
      </p>

      <div class="randArtMain">
        <h2>
          <?=$randContent->getRandArticleHeading()?>
        </h2>
        <?=$randContent->getRandArticleTeaser()?>
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
