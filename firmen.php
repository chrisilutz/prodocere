<?php 	include ("includes/config.php");
		$current_page = "Firmen";
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
           <!-- #main -->
            <div class="wrapper">
            	<div class="navi_float">
            	<div class="container">
            	<section class="c33 right">
            		<a href="seminare.php"><article id="3btn">
            			<div class="box" id="3box"><h3>Seminare</h3>
            				</div>
            		
            	</article></a>
            	</section>
            	
            	<section class="c33 left">
            		<a href="fortbildungen.php"><article id="2btn">
            			<div class="box" id="2box"><h3>Fortbildung</h3>
            				</div>
            		
            	</article></a>
            	</section>
            	
            	<section class="c33 left">
            		<a href="firmen.php"><article id="1btn">
            			<div class="box" id="1box"><h3 style="color:#ccc;">Firmen</h3>
            				</div>
            		
            	</article></a>
            	</section>
            </div>
            </div>
            </div>
            <div class="distribute wrapper clearfix">
            	            	
            	<div class="container">
            		<section class="content">
            			<article>
            				
            			
            		<h1>Firmen</h1>
            		<p><strong>Seminare</strong><br />
Sie w&uuml;nschen ein Seminar von der Stange - Vom Tagesseminar bis zu zwei j&auml;hrigen staatlich geregelten Fortbildung -
zum Beispiel Lernprozessbegleiter.<br />
Oder ma&szlig;geschneidert - Von der Bildungsbedarfsanalyse &uuml;ber die anschlie&szlig;ende Beratung  bis zur Ma&szlig;nahmenplanung und Durchf&uuml;hrung flankiert von Bildungscontrolling.<br /><br />

<strong>Konzepte</strong><br />
Gut gebildetes Personal ist das wichtigste Gut im Unternehmen. Der kontinuierliche Wandel der Arbeit erfordert eine kontinuierliche Anpassung der Mitarbeiter an die aktuelle Entwicklung.<br />
Hier ist es wichtig ein gut funktionierendes &quot;R&auml;derwerk&quot; der Unternehmenseigenen Bildungsabteilungen (Berufsausbildung, Weiterbildung, Personalentwicklung…) zu haben.<br />
Von der Berufsausbildung bis hin zur Personalentwicklung - wir stehen ihnen bei Neuaufbau oder Neuausrichtung zur Seite.<br />
<br />
<strong>Netzwerk</strong><br />
Wir verf&uuml;gen &uuml;ber ein Netzwerk von Speziallisten mit hoher berufsp&auml;dagogischer Kompetenz.<br />
Wir haben in allen Bereichen die richtigen Experten.<br />
<br />

            		</article>
            		</section>
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
