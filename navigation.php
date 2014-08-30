	   <p id="logo"><a href="/index.php"><img src="/bilder/logo.png" alt="logo" /></a></p>
        <nav id="menue">
          <ul>
            <li>
      			<a href="/" id="<?php if($_SERVER['PHP_SELF'] == "/index.php") echo "menueSelected"; ?>">Startseite</a>
              </li>
              <li>
                <?php
                /*
				 * if elements belong to menuepoint "Kategorien" highlight it by giving it the id "menueSelected"
				 */
                	if($_SERVER['PHP_SELF'] == "/kategorien/index.php"   ||
                		$_SERVER['PHP_SELF'] == "/kategorien/it/index.php"	   ||
                		$_SERVER['PHP_SELF'] == "/kategorien/politik/index.php"	||
						$_SERVER['PHP_SELF'] == "/kategorien/sonstiges/index.php")
      						echo('<a href="/kategorien/" id="menueSelected">Kategorien</a>');
      					else 
      						echo('<a href="/kategorien/">Kategorien</a>');
        				?>
                <ul>
                  <li><a href="/kategorien/it/" class="submenueItem">IT</a></li>
                  <li><a href="/kategorien/politik/" class="submenueItem">Politik</a></li>
                  <li><a href="/kategorien/sonstiges/" class="submenueItem">Sonstiges</a></li>
                </ul>
              </li>
              <li id="menueRandArt">											 
				<a href="/zufaelligerArtikel/" id="<?php if($_SERVER['PHP_SELF'] == "/zufaelligerArtikel/index.php") echo "menueSelected"; ?>">zuf&auml;lliger Artikel</a>
              </li>
          </ul>
        </nav>  
        <div id="container">