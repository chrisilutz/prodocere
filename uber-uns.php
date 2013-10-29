<?php 	include ("includes/config.php");
		$current_page = "Ausbilder";
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
            
            <div class="distribute wrapper clearfix">
            	<div class="container">
            		<section class="content">
            			<article>
            				<h1>WIR</h1>
            				<p>Die Firma ProDocere GmbH ist seit &uuml;ber 10 Jahren auf dem Bildungsmarkt erfolgreich. Innovative Konzepte und moderne Methoden sorgen f&uuml;r zufriedene Kunden aus unterschiedlichen Branchen (Automobilindustrie, Schiffsbau, Chemie, Banken). Unsere Mitarbeiter und Dozenten sind in mehreren nationalen und internationalen Projekten der beruflichen Bildung t&auml;tig (BMBF, ESF).</p> 
<p>Als einer der Wegbereiter zur modernen Qualifizierung von Bildungspersonal waren wir ma&szlig;geblich an den Entwicklungen der staatlich geregelten Fortbildungen zum gepr&uuml;ften Aus – und Weiterbildungsp&auml;dagogen und zum gepr&uuml;ften Berufsp&auml;dagogen beteiligt.</p>
<p>Up to date with my Trainer</p> 
<article>
	<h2>Ihr ProDocere Team</h2>
	<img src="img/prodocere_team.jpg" alt="ProDocere-Team" width="100%" />
	<p>Michael Kohlmann (*1962) Gesch&auml;ftsf&uuml;hrer</p>
	<p>Jennifer Doelfs (*1979) Assistentin der Gesch&auml;ftsf&uuml;hrung</p>
	<p>Alexander Kr&auml;upl (*1976) Wissenschaftlicher Mitarbeiter</p>
</article>
            				<article class="c50 left"><div class="left margin"><h1>Wir sind Zertifiziert nach EN ISO 9001:2008</h1></div><div class="left"><a href="docs/prodocere_z_deu_12.pdf" target="_blank"><img src="img/prodocere_z_talogo_12.jpg" alt="Zertifikat" width="150" /></a></div></article>
            				<article class="c50 left"><div class="left margin"><h1>Anerkanntes Studienzentrum der Akademie f&uuml;r professionelle Berufsbildung e. V.</h1></div><div class="left"><a href="http://www.professionelleberufsbildung.de/" target="_blank"><img src="img/akademie_prof_bild.png" alt="Akademie für professionelle Bildung" width="150" /></a></div></article>
            			<div class="clearfix"></div>
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
