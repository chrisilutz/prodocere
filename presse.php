<?php 	include ("includes/config.php");
		$current_page = "Was war";
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
            			<h1>Presse</h1>
            				<p>Wir verfolgen die aktuelle Tagespresse und
  andere Medien, um f&uuml;r Sie auf 
  dem Laufenden zu sein: mit Nachrichten, rechtlichen, sozialen und organisatorischen 
  Dingen. Bei unserem Business &#8211; der Ausbildung &#8211; bleibt es nicht
  aus, dass wir selbst in den Medien zum Thema werden. Lesen Sie hier, was ProDocere
auf die Beine stellt.</p>
<ul>
  <li><a href="docs/presse/Artikel_Kitzinger_Zeitung_und_Report_6._und_7._Juli_2013.pdf" target="_blank">Unterricht und Weiterbildung</a> (~0,6 MB)</li>
    <li><a href="docs/presse/neues_berufsbild_macht_Umdenken.pdf" target="_blank">Neues 
    Berufsbild macht Umdenken in der Ausbildung erforderlich</a> (~1,3 MB)</li>
  <li><a href="docs/presse/ausbildungsmarketing.pdf" target="_blank">Ausbildungsmarketing</a> 
    (~2 MB) </li>
  <li><a href="docs/presse/computer_in_der_ausbildung.pdf" target="_blank">Computer 
    in der Ausbildung</a> (~305 KB)</li>
</ul>
<p>&nbsp;</p>
<ul>
  <li><a href="docs/presse/presse_BvU191205.pdf" target="_blank">Gutes Zeugnis
      f&uuml;r die Ausbilder</a> (1,7 MB)</li>
  <li><a href="docs/presse/presse_DAS211205.pdf" target="_blank">Ein G&uuml;tesiegel
      f&uuml;r die Ausbildung in der Raiffeisen-Volksbank Miltenberg eG</a> (1,3
      MB)</li>
  <li><a href="docs/presse/presse_gute_aussichten_fuer_den_berufspaedagogen.pdf" target="_blank">Gute
      Aussichten f&uuml;r den Berufsp&auml;dagogen</a> (0,8 MB)</li>
  <li><a href="docs/presse/presse_zertifikat-00001_verliehen.pdf" target="_blank">Zertifikat
      00001 verliehen - Raiffeisen Miltenberg erh&auml;lt erstes DBA-Cert</a> (2,0
      MB)</li>
  <li><a href="docs/presse/presse_lernprozessbegleiter.pdf" target="_blank">Deutsche
      Berufsausbilder Akademie e.V. bietet Fortbildung zum Lernprozessbegleiter
      an</a> (0,8 MB)</li>
</ul>
<ul>
  <li><a href="docs/presse/bericht.pdf" target="_blank">Ausbildungspotientale f&ouml;rdern
      und Initiativen umsetzen, aber wie?</a></li>
  <li><a href="docs/presse/presse-Subcon.pdf" target="_blank">Neue Wege in der
      Berufsausbildung - Wissensaufbau erh&ouml;ht sp&auml;teren Marktwert</a> </li>
</ul>
<ul>
  <li><a href="docs/presse/das_guetesiegel_dba_cert.pdf" target="_blank">Das G&uuml;tesiegel
      DBA Cert</a> (~703 KB)</li>
  <li><a href="docs/presse/eine_berufliche_entwicklungsperspektive.pdf" target="_blank">Eine
      berufliche Entwicklungsperspektive</a> (~1 MB)</li>
  <li><a href="docs/presse/vom_berufsausbilder_zum_fachpaedagogen.pdf" target="_blank">Vom
      Berufsausbilder zum Fachp&auml;dagogen</a> (~2,5 MB)</li>
</ul>
            			</article>
<article>
	
 
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
