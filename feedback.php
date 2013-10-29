<?php 	include ("includes/config.php");
		$current_page = "Feedback";
 		include('includes/menu.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title.' - '.$current_page; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="viewport" content="width=device-width">
		<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/gray-theme.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                
        <!-- Menu aus includes/menu.php  -->
        
        	<?php echo $navi2; ?>
        	
        <!-- Ende Menu  -->        
                
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
				<div class="logo"><img src="img/LOGONEU.png" width="300px">
					
				</div>
                

            </div> <!-- #main -->
            
            <div class="distribute wrapper clearfix">
            	<div class="container">
            		<section class="content">
            		<article>
            			<h1>Feedback</h1>
            				<p>Gerne würden wir Ihnen unsere Kunden im Einzelnen vorstellen, leider ist es bei einer Vielzahl unsere Kunden nicht erwünscht mit Ihrem Namen und Logo zu werben. Deshalb verzichten wir auf eine Referenzliste.</p> 
<p>Aus diesem Grund zeigen wir Ihnen die Zufriedenheit unserer Kunden und Teilnehmer durch kleine Auszüge aus Ihren Feedbacks auf:</p>
<blockquote>
	<p>Die Fortbildung bei ProDocere hat mir ein tiefes Verständnis für das Wirkungsfeld des Berufspädagogen vermittelt. Meine Empfehlung für alle die den Beruf "erleben" wollen!
Danke für alles :)</p>
	<small>Dieter Hickman</small>
</blockquote>
<blockquote>
	<p>Eine tolle Erfahrung, die mich persönlich und beruflich geprägt hat und ein Weg, der noch lange nicht zu Ende ist.  
&quot;Wer aufhört zu lernen, ist alt. Er mag zwanzig oder achtzig sein.&quot; 
Henry Ford (1863-1947), amerik. Großindustrieller</p>
	<small>Brigitte Kleinhenz, Bosch Rexroth AG</small>
</blockquote>
<blockquote>
	<p>Auch wenn der zeitliche Aufwand sehr groß war und es bis zur Prüfung viele Nerven gekostet hat, kann ich persönlich den Lehrgang „sehr empfehlen“. Ich werde die Seminarwochenenden und die Lerngruppentreffen sehr vermissen! Warum das so ist: „Werde Teilnehmer und Du wirst es erfahren und erleben“ 
Mein Dank geht an die Firma ProDocere (Michael Kohlmann) und an alle Dozenten für die gute Vorbereitung auf die Prüfung!!!</p>
	<small>Achim Heindel</small>
</blockquote>
<blockquote>
	<p>Für meine Arbeit als selbstständige Trainerin hat diese Fortbildung Methoden und Werkzeuge geliefert, meine Seminar qualitativ zu steigern und das Angebot meiner Trainings zu erweitern. Durch das wunderbare Team an Ausbildungskolleginnen und –kollegen war die Zeit der Ausbildung auch eine  persönliche Bereicherung.</p>
	<small>Kerstin Schleicher, Trainings &amp; Seminare</small>
</blockquote>
<blockquote>
	<p>Lehrgang in einer neuen Form, mit großen Herausforderungen und vielen positiven Erkenntnissen. Auf jeden Fall weiter zu empfehlen.</p>
	<small>Michaela V</small>
</blockquote>
 <blockquote>
 	<p>Erst haben mich der Gesamtaufwand und die hohen Kosten ein wenig abgeschreckt. Zeitlicher und inhaltlicher Umfang, die Gebühren + Reise-/Hotelkosten. Aber es hat sich mehr als gelohnt! 
Durch die sehr umfangreichen Unterlagen, viele Präsenzwochenenden und letztlich sehr engagierte Dozenten (die man auch außerhalb der Seminare um Hilfe bitten konnte) habe ich erfolgreich die Prüfung ablegen können. 
Und die Kosten: Dank Meister-BaföG und steuerlicher Absetzbarkeit der Fortbildung habe ich mehr als 60% der Gesamtkosten erstattet bekommen!</p>
 	<small>21.03.2013 Wolfgang Schrubbe  – Kaufmann & geprüfter Berufspädagoge</small>
 </blockquote>
 <blockquote>
 	<p>Sogar ich als alter Hase habe noch viel gelernt</p>
 	<small>Helmut W. Wolfsburg</small>
 </blockquote>
</article>        		</section>
            	</div><!-- #container -->
            </div><!-- #distribute -->
            
        </div> <!-- #main-container -->

        <!-- Footer aus includes/footer.php -->
        
        <?php include("includes/footer.php"); ?>

		<!-- Footer Ende -->
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){
    $("#commentForm").validate();
  });
</script>
<script>
$(document).ready(function() {
	$('ul.dropdown-menu').removeClass('open').addClass('close');
	$('.dropdown-toggle').hover(function(){
		$(this).children('.dropdown-menu').removeClass('close').addClass('open');
		$('header.wrapper').addClass('padd');
	},
	function(){
		$('.dropdown-menu').removeClass('open').addClass('close');
		$('header.wrapper').removeClass('padd');
	});
});


</script>
    </body>
</html>
