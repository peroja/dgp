<?
include('functions.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>The Gule Parti</title>
<link rel="icon" type="image/png" href="favicon.png">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="floater">
  <div id="face" style="float:left;margin:10px 100px;">
  <a href="https://twitter.com/share" class="twitter-share-button" data-via="peroja" data-count="none">Tweet</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  <script src="http://widgets.fbshare.me/files/fbshare.js"></script></div>
  <img src="app.png" style="" title="Alt maset om at DGP må få seg en app har gitt avkastning. Så vi presenterer herved Den Gule App(e). Enjoy responsibly!"/>
</div>
<div class="head">
   <h1> Det Gule Parti </h1>
   <p> - we piss on you all!</p>
   <p style="margin-left:1em;font-size:50%">(we even make your mail yellow)</p>
</div> <!--END HEAD-->
<?
if (isset($_GET['takk'])) echo "<p class=\"takk\">Din signatur er registrert. Takk for din støtte! Husk, spre det gule ord!</p>";
?>

<div class="floatright" style="clear:both">
<h2>Gult i nyhetene!</h2>
<?
require_once("rsslib/rsslib.php");
print RSS_Links("http://news.google.com/news?um=1&ned=us&hl=en&q=gult+site%3A.no&output=rss", 25);
?>

<h2>Hvor langt er vi unna å stille til valg i ditt fylke?</h2>
<?
$res = runsql("select fylke, count(fylke) as c from sign group by fylke order by c desc;"); 
while ($row = mysql_fetch_assoc($res)) {
  ?>
  <p style="margin-bottom:0px;">  <?=$row['fylke']?>:<?=$row['c']?> av 500 signaturer vi trenger
  <div style="border:solid 1pt #33FF99;width:170px;height:5px;"><div style="background:#33FF99;width:<?=$row['c']?>px;height:5px;">&nbsp;</div></div>
  </p>
  <?
}
?>

<h2> Spre det gule ord!</h2>
<p>
  Last ned, print og del ut løpesedler!<br/>
  <a href="lopeseddel.pdf"><img src="lopeseddel.png"/></a>
</p>

</div> <!--END FLOAT RIGHT-->


<h2>Partiprogram</h2>
<p>Punkter til et fremtidig partiprogram:</p>

<ul>
  <li><b>Samene - de elskede!</b><br>
    Kniver er knall! Også liker Parce kewle sko. Så vi må inn på Sametinget! DGPs lokale representant stiller til valg på mye det samme som frp... Nedleggelse av Stortinget så Sametinget får all makt (eller var det omvendt) så Norge igjen blir ett rike.
    <code>
    <pre>      21:52 &lt;pengwen&gt; vi kan pisse litt på samene og vi om du har lyst til å lage en nording-avdeling
    21:53 &lt;whalspotter&gt; finfint
    21:53 &lt;whalspotter&gt; men på sametingsvalg vurderer jeg å stemme frp
    21:53 &lt;pengwen&gt; for å nedlegge?
    22:01 &lt;whalspotter&gt; ja
    22:02 &lt;pengwen&gt; sitter og reviderer dgps partiprogram, andre ting du vil ha med? kanskje noe om 
                    andre felles ideer med frp?
    22:04 &lt;whalspotter&gt; ja de er jo gode til å pisse på folk, så hvorfor ikke?
    22:05 &lt;pengwen&gt; fiska litt etter å ta voldsom og krass avstand fra alt det andre lavpanna jeg da men
    22:06 &lt;whalspotter&gt; tar meg en dyr øl jeg og driter i politikk idag!</pre></code>
  <li><b>Den femte statsmakt</b><br>
    Selv om vi alle beundrer parces høyrehånd så er Frenors en soleklar vinner. Og derfor innføres også vår nye diktator med skyhøye kneløft og fanfare! Mongothea er sjef, sjefen over alle sjefer (også de med rødt skjegg).
    <code><pre>    23:39 < frenor> o/ o/ o/ o/ o/ o/ o/ o/ o/ o/ o/ o/ o/ 
  23:40 < frenor> Vi hilser deg, mongothea
    </pre></code>
  <li><b>Prez Ove</b><br/>
    Om Norge skulle pådra seg enda et forbanna fesjå av en valgrunde og faktisk bli republikk må Ove være eneste kandidat. Folldal er Übersivilisasjonen Norges vugge og må dertil hedres med Norges første president! Så langt har han Parces, Pengwens og Oves stemme. Tror vi kan regne med iPC sin og så fort han lærer litt mer geografi. Heia Norge! Kongen er død! Lenge leve Ove!
    <li><b>Utøvende statsmakt</b><br/>
      Etter kjapp diskusjon på irc har dgps maktelite (Ove) utvnevnt Parce til Gjøreminister
      <code>
<pre>    22:07 <@ove> ja
  22:07 <@ove> du er min høyre hånd, parce
  22:07  * parce er en racer med høyrehånda
  22:07 < parce> <3
        </pre></code>
   <li><b>Skuddpremie på sytere</b><br/>
      Norge ble ikke bygd av syting. Syting og klaging er en uting som kun REDUSERER nasjonens produktivitet og bør derfor være lovstridig. Faktisk hadde det mest effektive vært skuddpremie på sytere. Med bonus for drap av sytere som publiserer og sprer sytinga i offentligheten. Å stå og dele ut foldere med kun overskrifter om hvor dumt og slemt alt er blir for dumt. (At dette gjøres på nasjonens paradegate gjør ikke saken spesielt mye bedre.) Og til dere som er på nippet til å bli sytere? Skru på en nyhetssending, sjekk <a href="http://un.org/">un.org</a> og kanskje til og med <a href="http://bbcworld.com">bbcworld.com</a> eller andre medier som ikke bare er ambulansjegere. Lær litt om verden!<br/>
   <li><b>Flash og Silverlight bør forbys</b> (ingen gadd skrive forslag til paragraf så vi bruker ircloggen igjen)<br/>
  &lt; overagnar&gt; pengwen, Synes DGP skal ta over verden, så kan vi piske alle som lager musikkbutikker i FLASH<br/>
&lt;+jmaister&gt; Flash og Silverlight bør forbys<br/>
&lt; pengwen&gt; overagnar: skriv forslag til paragraftekst til sidene så legger jeg den ut<br/>
&lt; overagnar&gt; pengwen, jeg skal skrive en paragraftekst, erru heldig får du den om noen måneder<br/>
  <li><b>Sur nedbør må komme tilbake!</b> Hvordan skal man kunne motivere folk til å jobbe mot evig status som engler når englene tydligvis ikke lenger får lov til å drikke skikkelig cola?! Cola _med_ sukker på søte små glassflasker gir jo mer hyggelig <i>gul</i> urin. Ergo må jo englene gå på vann eller *grøss* lettbrus, stakkars. Så glasscola må tilbake på den himmelske diet. Nå! (Og ja krf, vi danner gjerne regjering med dere så lenge vi får lov til å bestemme alt.) <br/>GULT ER KULT!</li>
  <li><b>Utvandring må likestilles landsforræderi</b>. Det er jo opplagt at dersom man er redd for at blonde blåøyde  skal bli i mindretall i Norge er det minst like viktig å ikke la rottene forlate skipet som det er å passe seg for pirater som border det.</li>
  <li><b>UTF8 skal tvangsinnføres ved lov.</b> Det norske samfunn bruker i dag bortimot uendelige beløp på å få norske tegn til å virke. Det gjelder på alt fra kassalappen til stortingsvalgslister. Derfor vil vi at det skal bli forbudt å bruke utstyr eller programvare som støtter andre tegnsett enn utf8. En naturlig følge av dette er økte straffer for datakriminalitet og mer penger til både politi og tollvesen for å nedkjempe problemet. Det må også tillates simulert drukning, balleknipsing og tilsvarende agressive metoder for å avdekke ISO-celler og stoppe ISO-handlinger før de igjen skaper katastrofe blandt sivilbefolkningen.</li>
  <li><b>Jul før advent.</b> Hvorfor har noen fått det for seg at julebrus, juledekor og julesanger er noe som best egner seg før advent? Denne betaversjonen av jul er dårskap og må dermed forbys. Foreslått strafferamme er truserøsk og julegaveinndragelse.</li>
  <li id="og_til_slutt"><b> ... og til slutt</b>  en linje om at alle som pirker Limbeck på nesen må få seg et  megatruserøsk og en smekk på pungen </li>
</ul>
<h2>Vi trenger deg for å stille til valg:</h2>
<form method="post" action="sign.php" class="form">
<p>Vi trenger 500 underskrifter for å stille liste til stortingsvalget i ditt fylke: <br/>
Navn:
<span class="field">
  <input type="text"  name="navn"/>
</span><br/>
Epostadresse:
<span class="field">
  <input type="text" name="epostadresse"/>
</span><br/>
Fødselsdato:
<span class="field">
  <input type="text" name="yyyy" size="4" value="yyyy"/>
  <input type="text" name="mm" size="2" value="mm"/>
  <input type="text" name="dd" size="2" value="dd"/>
</span><br/>

Bostedsadresse:
<span class="field">
  <input type="text"  name="bostedsadresse"/>
</span><br/>
Fylke:
<span class="field">
<select name="fylke">
<?
foreach($fylker as $fylke) {
  echo "<option>".$fylke."</option>";
};
?>
</select><br/>
</span><br/>
Kun navn og fylke blir publisert. Epostadresse brukes kun til invitasjon til valgvake og seiersfest!<br/>
<input type="submit" value="Signer lista"/>

</form>



<h2> Rererat fra stiftelsesmøtet 20. september 2008 på #mac1@homelien.no</h2>
  <pre>
  19:07 &lt; Maritim&gt; det skal jo faktisk lønne seg å velge gult
  19:08 &lt; pengwen&gt; ha! ny politisk retning, gult! "We piss on you all!"
  19:08 &lt; Runr&gt; Hah
  19:09 &lt; Runr&gt; Skal vi starte Det Gule Parti?
  19:09 &lt; pengwen&gt; dgp.no selges av domeneshop for 500kr
  19:09 &lt; Maritim&gt; du kan jo kanskje kalle det for noe slikt som
  19:09 &lt; Maritim&gt; The Golden Shower?
  19:10 -!- Kula [~Kula@156.84-49-xxx.nextgentel.com] has joined #mac1
  19:11 &lt; pengwen&gt; Kula: vi er akkurat i gang med stiftelsesmøtet til Det Gule Parti. erru me?
  19:11 &lt; Kula&gt; Jepp!
  19:11 &lt; Kula&gt; Nå er det bare å dra på seg gullbuksene. Det er lørdag!
  </pre>
<?
/** 
 * Notater:
 * DONEVi trenger: Navn, fødselsdato, bostedsadresse, fylke, epostadresse, dato for underskrift
 * Skjema for underskrift
 * Graf for antal signaturer i hvert fylke
*/
?>

</body>
</html>