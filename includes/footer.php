<?php 
$text= array(
            "Sie suchen Weiterbildungen, wo Sie das gelernte noch in der Fortbildung anwenden k&ouml;nnen?",
            "Wir arbeiten mit Methoden, die f&uuml;r einen hohen Wissenstransfer stehen.",
            "Sie lernen anhand Ihrer realen Arbeitssituationen und setzen so das neue Wissen gleich um.",
			"Ich kam, praktizierte und lernte.");


$datei = fopen("count.txt","r+");
$counterstand = fgets($datei, 10);
$counterstand++;
if($counterstand == "4")
   {
   $counterstand = 0;
   };


echo "<div class='footer-container'>
            <footer class='wrapper'>
            <div><blockquote><strong><i>".$text[$counterstand]."</i></strong></blockquote></div>
                <h3>&copy; 2014 - ".$title."</h3> - <a class='right' href='impressum.php'>Impressum</a>
            </footer>
        </div>";
 rewind($datei);
fwrite($datei, $counterstand);
fclose($datei);     
?>

<script type="text/javascript">

</script>
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 

  ga('create', 'UA-40929037-1', 'prodocere.de');

  ga('send', 'pageview');

 

</script>
