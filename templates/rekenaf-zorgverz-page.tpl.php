<?php if (!empty($header_image)): ?>
  <figure class="home-image header-image">
    <div class="image-wrapper">
      <?php print render($header_image); ?>
      <?php $social_url = check_plain(urlencode(url(request_path(), array('absolute' => TRUE)))); ?>
      <ul class="social-links">
        <li class="twitter">
          <a href="http://twitter.com/share?url=<?php echo $social_url; ?>" target="_blank"><span>Deel dit op Twitter</span></a>
        </li>
        <li class="facebook">
          <a href="http://www.facebook.com/sharer.php?u=<?php echo $social_url; ?>" target="_blank"><span>Deel dit op Facebook</span></a>
        </li>
        <li class="google-plus">
          <a href="https://plus.google.com/share?url=<?php echo $social_url; ?>" target="_blank"><span>Deel dit op Google+</span></a>
        </li>
      </ul>
    </div>
  </figure>
<?php endif; ?>

<?php $module_path = drupal_get_path('module', 'rekenaf_zorgverz'); ?>
<div class="content-wrap">
  <?php if (!empty($label)): ?>
    <div class="center">
      <h1><?php print check_plain($label); ?></h1>
    </div>
  <?php endif; ?>
  <ul id="rekenaf-zorgverzekeraars-subheader">
    <li id="wegmetdezorgverzekeraars-title" class="tab-title active"><h2><a href="#wegmetdezorgverzekeraars-content">De Publieke Basisverzekering</a></h2></li>
    <li id="stopzorgverspilling-title" class="tab-title"><h2><a href="#stopzorgverspilling-content">Stop de verspilling</a></h2></li>
    <li id="onzezorg-title" class="tab-title"><h2><a href="#onzezorg-content">Onze zorg</a></h2></li>
    <li id="steunbetuigingen-title" class="tab-title"><h2><a href="#steunbetuigingen-content">Steunbetuigingen</a></h2></li>
  </ul>
  <div class="node text-wrapper tab-content" id="wegmetdezorgverzekeraars-content">
    <p>De zorgverzekeraars verspillen jaarlijks honderden miljoenen aan reclame en klantenbinding, maken winsten, willen beslissen waar u uw zorg krijgt en gaan op de stoel van artsen zitten. Het is hoog tijd dat we de  enorme macht van de zorgverzekeraars breken. Dan pakken we de zeggenschap over de zorg terug.</p>
    <p>Het kan als we de basisverzekering weer publiek regelen. Door de zorgverzekeraars om te vormen tot &eacute;&eacute;n publieke organisatie kunnen de premies omlaag, de kwaliteit omhoog en halen we de macht weg bij de zorgverzekeraars. Honderden miljoenen worden bespaard op de uitvoering. De bureaucratie wordt aangepakt.</p>
    <p>Dit kabinet heeft geen probleem met de enorme macht van de zorgverzekeraars. Sterker nog, zij vergroten de macht. Pati&euml;nten, huisartsen, psychologen en psychotherapeuten spraken zich al uit tegen de macht van de zorgverzekeraars, en voor een publieke basisverzekering. Doet u ook mee? <a class="link-to-support-form" href="#rekenaf-zorgverz-statement-form">Spreek u uit voor de publieke basisverzekering!</a></p>
    <section class="page-section page-section-image full-width-content">
      <figure>
        <?php print render($sp_zorg_image); ?>
      </figure>
    </section>
  </div>
  <div class="node text-wrapper tab-content" id="stopzorgverspilling-content">
    <p>Marktwerking heeft onze zorg niet beter gemaakt, wel duurder. Met de publieke basisverzekering verdwijnt de marktwerking uit de zorg. De zorgverzekeraars vormen we om tot één organisatie. Honderden miljoenen worden bespaard op de uitvoering. De bureaucratie wordt aangepakt en de commerci&euml;le prikkels die uitnodigen tot winstbejag, productiedraaien en verspilling worden gestopt.</p>
    <p>De zorgverzekeraars 9,3 miljard euro op de bank staan en maakten ze in 2013 1,4 miljard euro winst. Ze geven jaarlijks een half miljard uit aan reclame en klantenbinding. Met minder reserves, minder reclame en een betere samenwerking tussen zorginstellingen kunnen de premies fors omlaag. Stop deze verspilling en kies voor de publieke basisverzekering. <a class="link-to-support-form" href="#rekenaf-zorgverz-statement-form">Doet u ook mee?</a></p>
    <section class="page-section page-section-image full-width-content">
      <figure>
        <?php print render($verspilling_zorg_image); ?>
      </figure>
    </section>
  </div>
  <div class="node text-wrapper tab-content" id="onzezorg-content">
    <p>Artsen en andere zorgverleners zijn het zat dat de verzekeraars op hun stoel gaan zitten. Met een publieke basisverzekering krijgen de artsen en andere zorgverleners de zeggenschap over de zorg terug. Niet de zorgverzekeraars maar de professionals bepalen welke zorg wordt verleend en welke medicatie wordt voorgeschreven.</p>
    <p>Ook voor de pati&euml;nten is het goed nieuws. Niet de zorgverzekeraars zal kiezen waar je de zorg krijgt, dat doe je zelf. Het uitsluiten van verzekerden die veel zorg nodig hebben, zoals chronisch zieken, oud-kankerpati&euml;nten en ouderen, is afgelopen. De publieke basisverzekering is er voor iedereen. De zorg is van ons allemaal. <a class="link-to-support-form" href="#rekenaf-zorgverz-statement-form">Spreek u uit voor de publieke basisverzekering!</a></p>
  </div>
  <div class="node text-wrapper tab-content" id="steunbetuigingen-content">
    <?php print $element['statements']['#children']; ?>
    <div class="node text-wrapper items">
      <p>Dr. Jaap van den Heuvel - directievoorzitter Reinier de Graaf Groep</p> 
      <img src="<?php print '/' . $module_path; ?>/images/jaap_potret.jpg" />
      <blockquote>Marktwerking heeft de zorg niet goedkoper, beter of toegankelijker gemaakt. We kunnen dus stoppen met die onoverzichtelijke zorgpolissen, het eigen risico en onbegrijpelijke facturen. Laat zorgverleners vooral goed samenwerken en de juiste zorg op de juiste plek leveren. Daar wordt de pati&euml;nt echt beter van.</blockquote> 
      <p>Dr. Jan van Dijk - traumachirurg in Ziekenhuis Gelderse Vallei (Ede)</p>
      <img src="<?php print '/' . $module_path; ?>/images/jan_van_dijk.jpg" />
      <blockquote>Het idee van een publieke basisverzekering maakt in &eacute;&eacute;n klap duidelijk, dat er w&eacute;l een alternatief is voor de niet te controleren marktwerking in de zorg. We moeten als Nederlandse burgers ervoor opkomen, dat de zorg zo snel mogelijk van de private markt wordt gehaald, en dat we de zorg gewoon weer in de publieke sfeer gaan aanbieden. Daarmee keert de rust en de zekerheid terug in de samenleving, dat als het nodig is, dat dan ook zinnige en zuinige zorg beschikbaar is voor iedereen.</blockquote> 
      <p>Alan Ralston, psychiater bij GGZ Dijk en Duin/Parnassia Groep in Castricum</p>
      <img src="<?php print '/' . $module_path; ?>/images/ralston_publ.jpg" />
      <blockquote>Ik ondersteun de publieke basisverzekering om drie redenen. 
        <ul>
          <li>Allereerst een democratische: in herhaalde enqu&ecirc;tes en rapporten is duidelijk geworden dat een ruime meerderheid van de bevolking, van pati&euml;nten, en van zorgprofessionals zorg als een publiek goed ziet en een negatief oordeel heeft over d&acute;gereguleerde&acute; marktwerking.</li>
          <li>Ten tweede is het simpelweg economisch verstandig: we verkwisten nu enorme hoeveelheden tijd en geld aan bureaucratie die een rechtstreeks gevolg is van de tot mislukken gedoemde poging om zorg in een product- en rendementsmodel te persen.</li> 
          <li>Het derde argument is voor mij het belangrijkst: in dit concurrentiemodel is er ook sprake van benadeling van sommige pati&euml;ntengroepen, wederom vanwege financi&euml;le redenen. De groep die ik behandel, mensen met ernstige en complexe psychiatrische problemen, is voor de verzekeraar niet aantrekkelijk, en dit vertaalt zich onherroepelijk naar de kwaliteit van zorg. Kortom, dit model k&aacute;n niet voldoen aan de publieke taak die de zorg gegeven is. De publieke basisverzekering zet de zorg weer op de juiste plaats.</li>
        </ol>
      </blockquote>
      <p>Dr. Lewi Vogelpoel - radioloog in het Waterland Ziekenhuis (Purmerend)</p>
      <img src="<?php print '/' . $module_path; ?>/images/dr_vogelpoel.jpg" />
      <blockquote>Gezien het gewenste sociale en solidaire karakter van de zorg is goed samenwerken meer in belang van de pati&euml;nt dan concurreren Het is niet verstandig om een private, financi&euml;le instelling op alle stoelen van de zorg te laten zitten. Het belang ligt te eenzijdig en te ver van de verzekerde. Een private zorgverzekeraar voegt &lsquo;in my humble opinion&rsquo; niets toe aan wat de NZa, de Inspectie en het ministerie samen al konden. Alle zaken, die zelf niet essentieel zijn voor het leveren van de zorg, vallen bij een beperkt budget en met gezond verstand als eerste onder het kopje verspilling.</blockquote>
    </div>
    <?php //print $element['statement_thumbs']['#children']; ?>
  </div>
</div>

  
<div class="content-wrap">
  <div class="node text-wrapper items" id="support-examples">
    <p><strong>Steunbetuigingen</strong></p>
    <p>Dr. Jaap van den Heuvel - directievoorzitter Reinier de Graaf Groep</p> 
    <img src="<?php print '/' . $module_path; ?>/images/jaap_potret.jpg" />
    <blockquote>Marktwerking heeft de zorg niet goedkoper, beter of toegankelijker gemaakt. We kunnen dus stoppen met die onoverzichtelijke zorgpolissen, het eigen risico en onbegrijpelijke facturen. Laat zorgverleners vooral goed samenwerken en de juiste zorg op de juiste plek leveren. Daar wordt de pati&euml;nt echt beter van.</blockquote> 
    <p>Dr. Jan van Dijk - traumachirurg in Ziekenhuis Gelderse Vallei (Ede)</p>
    <img src="<?php print '/' . $module_path; ?>/images/jan_van_dijk.jpg" />
    <blockquote>Het idee van een publieke basisverzekering maakt in &eacute;&eacute;n klap duidelijk, dat er w&eacute;l een alternatief is voor de niet te controleren marktwerking in de zorg. We moeten als Nederlandse burgers ervoor opkomen, dat de zorg zo snel mogelijk van de private markt wordt gehaald, en dat we de zorg gewoon weer in de publieke sfeer gaan aanbieden. Daarmee keert de rust en de zekerheid terug in de samenleving, dat als het nodig is, dat dan ook zinnige en zuinige zorg beschikbaar is voor iedereen.</blockquote> 
    <p>Alan Ralston, psychiater bij GGZ Dijk en Duin/Parnassia Groep in Castricum</p>
    <img src="<?php print '/' . $module_path; ?>/images/ralston_publ.jpg" />
    <blockquote>Ik ondersteun de publieke basisverzekering om drie redenen. 
      <ul>
        <li>Allereerst een democratische: in herhaalde enqu&ecirc;tes en rapporten is duidelijk geworden dat een ruime meerderheid van de bevolking, van pati&euml;nten, en van zorgprofessionals zorg als een publiek goed ziet en een negatief oordeel heeft over d&acute;gereguleerde&acute; marktwerking.</li>
        <li>Ten tweede is het simpelweg economisch verstandig: we verkwisten nu enorme hoeveelheden tijd en geld aan bureaucratie die een rechtstreeks gevolg is van de tot mislukken gedoemde poging om zorg in een product- en rendementsmodel te persen.</li> 
        <li>Het derde argument is voor mij het belangrijkst: in dit concurrentiemodel is er ook sprake van benadeling van sommige pati&euml;ntengroepen, wederom vanwege financi&euml;le redenen. De groep die ik behandel, mensen met ernstige en complexe psychiatrische problemen, is voor de verzekeraar niet aantrekkelijk, en dit vertaalt zich onherroepelijk naar de kwaliteit van zorg. Kortom, dit model k&aacute;n niet voldoen aan de publieke taak die de zorg gegeven is. De publieke basisverzekering zet de zorg weer op de juiste plaats.</li>
      </ol>
    </blockquote>
    <p>Dr. Lewi Vogelpoel - radioloog in het Waterland Ziekenhuis (Purmerend)</p>
    <img src="<?php print '/' . $module_path; ?>/images/dr_vogelpoel.jpg" />
    <blockquote>Gezien het gewenste sociale en solidaire karakter van de zorg is goed samenwerken meer in belang van de pati&euml;nt dan concurreren Het is niet verstandig om een private, financi&euml;le instelling op alle stoelen van de zorg te laten zitten. Het belang ligt te eenzijdig en te ver van de verzekerde. Een private zorgverzekeraar voegt &lsquo;in my humble opinion&rsquo; niets toe aan wat de NZa, de Inspectie en het ministerie samen al konden. Alle zaken, die zelf niet essentieel zijn voor het leveren van de zorg, vallen bij een beperkt budget en met gezond verstand als eerste onder het kopje verspilling.</blockquote>
    <p><a href="#steunbetuigingen-content" id="link_to_support_items">Meer steunbetuigingen</a></p>
  </div>
  <?php print $element['statement_form']['#children']; ?>
  <?php
    global $base_url;
    $url_encoded = urlencode($base_url . '/publiekebasisverzekering');
    $tweet = urlencode('Ik steun de Publieke Basisverzekering. Lage premies, hoge kwaliteit en de macht weg bij zorgverzekeraars. Doe ook mee ' . $base_url . '/publiekebasisverzekering');
  ?>
  <ul class="form-social">
  <li><a href="http://twitter.com/share?url=<?php print $url_encoded; ?>&amp;text=<?php print $tweet; ?>" target="_blank"><span class="sp-icons">t</span>Deel deze actie op Twitter</a></li>
    <li><a href="http://www.facebook.com/sharer.php?u=<?php print $url_encoded; ?>" target="_blank"><span class="sp-icons">f</span>Deel deze actie op Facebook</a></li>
    <li><a href="http://plus.google.com/share?url=<?php print $url_encoded; ?>" target="_blank"><span class="sp-icons">g</span>Deel deze actie op Google+</a></li>
  </ul>
</div>
<?php print $element['page_items']['#children']; ?>
<?php print $element['persons']['#children']; ?>

