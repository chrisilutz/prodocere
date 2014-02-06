<?php 	include ("includes/config.php");
		$current_page = "Home";
 		include('includes/menu.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js"> <![endif]-->
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
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
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
				<div class="logo"><img src="img/LOGONEU.png" alt="Prodocere - Ihr Partner für Aus- und Weiterbildung" width="300px">
				
				</div>
               

            </div> <!-- #main -->
           	
            <div class="distribute wrapper clearfix">
            	
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
            			<div class="box" id="1box"><h3>Firmen</h3>
            				
            			</div>
            		
            	</article></a>
            	</section>
            </div><!-- #container -->
            <section>
                <article>
                    <h1><span style="background-color: #f00;color: #fff;">Neue Tagesseminare kommen bald…</span></h1>
                </article>
          
            	<?php include ("includes/news.php"); ?>
			</section>
			<section class="legende">
				<div>
				<p><span class="blue">Eintagesseminare</span></p>
			</div>
			<div>
				<p><span class="red">Zweitagesseminar</span></p>
			</div>
			<div>
				<p><span class="green">Fortbildungen</span></p>
			</div>
			<div>
				<p><span class="light">Kostenloser Vortrag</span></p>
			</div>
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

        <script type="text/javascript">
$(document).ready(function() {
$('#1btn').hover(function(){
	$('#1box').addClass('move');
},
function(){
	$('#1box').removeClass('move');
})
;
$('#2btn').hover(function(){
	$('#2box').addClass('move');
},
function(){
	$('#2box').removeClass('move');
})
;
$('#3btn').hover(function(){
	$('#3box').addClass('move');
},
function(){
	$('#3box').removeClass('move');
})
});</script>
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
