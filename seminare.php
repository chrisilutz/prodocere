<?php 	include ("includes/config.php");
		$current_page = "Seminare";
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
            			<div class="box" id="3box"><h3 style="color:#ccc;">Seminare</h3>
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
            			<div class="box" id="1box"><h3>Firmen</h3>
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

            		<h1>Seminare</h1>
            		<p>ProDocere bietet Ihnen eine umfassende Auswahl von Seminaren speziell f&uuml;r die Personalentwicklung, Ausbildung und Weiterbildung.</p>
            		<ul>
            			<li>Praxisnahe Vermittlung</li>
            			<li>Teilnehmerorientierung</li>
            			<li>Hoher Wissenstransfer</li>
            			<li>Sozialp&auml;dagogischer Ansatz</li>
            			<li>und noch vieles mehr</li>
            		</ul>
            		<p>Mit Motivation und dem richtige Methodenmix sorgen wir daf&uuml;r, dass Ihnen beim Lernen nicht langweilig wird.</p>
            			</article>
            			<article>
            				<table class="bordertable">
            				<thead>
            					<tr>
            						<th>Termin</th>
            						<th>Thema (PDF)</th>
            						<th>Dozent</th>
            						<th>Ort</th>
            					</tr>
            				</thead>
            				<tbody>
            					<!-- <tr>
            						<td>09.07.2013</td>
            						<td><a href="docs/quick_easy.pdf" target="_blank">Workshop &quot;quick &amp; easy&quot;</a></td>
            						<td>Hr. Christian Kohlmann</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>
            					<tr>
            						<td>16.-17.07.2013</td>
            						<td><a href="docs/resourcen.pdf" target="_blank">Ressourcen-Training</a></td>
            						<td>Fr. Windisch</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>
            					<tr>
            						<td>18.07.2013</td>
            						<td><a href="docs/welt_buehne.pdf" target="_blank">Die ganze Welt ist eine B&uuml;hne</a></td>
            						<td>Hr. Christian Kohlmann und<br />Fr. Windisch</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>
            					<tr>
            						<td>25.07.2013</td>
            						<td><a href="docs/ausbildungsmarketing.pdf" target="_blank">Ausbildungsmarketing mit facebook und Co.</a></td>
            						<td>Hr. Kuhn</td>
            						<td>Kitzingen</td>
            					</tr>
            					<tr>
            						<td>17.-18.09.2013</td>
            						<td><a href="docs/resourcen.pdf" target="_blank">Ressourcen-Training</a></td>
            						<td>Fr. Windisch</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>
            					<tr>
            						<td>19.09.2013</td>
            						<td><a href="docs/welt_buehne.pdf" target="_blank">Die ganze Welt ist eine B&uuml;hne</a></td>
            						<td>Hr. Christian Kohlmann und<br />Fr. Windisch</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>
            					<tr>
            						<td>24.-25.09.2013</td>
            						<td><a href="docs/welt_buehne.pdf" target="_blank">Die ganze Welt ist eine B&uuml;hne</a></td>
            						<td>Hr. Christian Kohlmann und<br />Fr. Windisch</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>
            					<tr>
            						<td>01.10.2013</td>
            						<td><a href="docs/ausbildungsmarketing.pdf" target="_blank">Ausbildungsmarketing mit facebook und Co.</a></td>
            						<td>Hr Kuhn</td>
            						<td>Kitzingen</td>
            					</tr>
            					<tr>
            						<td>08.-09.10.2013</td>
            						<td><a href="docs/welt_buehne.pdf" target="_blank">Die ganze Welt ist eine B&uuml;hne</a></td>
            						<td>Hr. Christian Kohlmann und<br />Fr. Windisch</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>
            					<tr>
            						<td>15.10.2013</td>
            						<td><a href="docs/quick_easy.pdf" target="_blank">Workshop &quot;quick &amp; easy&quot;</a></td>
            						<td>Hr Christian Kohlmann</td>
            						<td>Hotel Leicht in Biebenried</td>
            					</tr>!-->
            					<?php include("includes/table.php"); ?>
            				</tbody>
            			</table>
            			</article>
            			<article>
            				<p>Interesse und Fragen? Setzen Sie sich einfach mit uns in Verbindung:<br />
            					<a href="mailto:info@prodocere.de">Email</a>  oder Telefonnummer:09321- 92 62 544
            				</p>
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
