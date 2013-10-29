<?php 	include ("includes/config.php");
		$current_page = "Anfahrt";
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
        	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
</script>

        
    </head>
    <body onload="initialize()">
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
		
                

            </div> <!-- #main -->
            
            <div class="distribute wrapper clearfix">
            	<div class="container">
            		<section class="content">
            		<div id="map_canvas" style="width:100%; height:500px"></div>
            		<article><div id="hcard-Studienzentrum" class="vcard">
 <span class="fn n">
    <span class="given-name"><strong><?php echo $name; ?></strong></span>
  <span class="additional-name"></span>
  <span class="family-name"></span>
</span>
 <div class="org"><?php echo $adresse1; ?></div>
 <div class="adr">
  <div class="street-address"><?php echo $strasse1; ?></div>
  <span class="locality"><?php echo $plz.' '.$ort; ?></span><br /><br />
 </div>
 <div class="tel">Tel: <?php echo $tel1; ?></div>
 <div class="fax">Fax: <?php echo $fax; ?></div>
 <a class="email" href="mailto:"<?php echo $email; ?>">E-Mail: <?php echo $email; ?></a>
 </div>
 <br /><br />	
 <div id="hcard-Gesch&auml;ftsf&uuml;hrung" class="vcard">
 <span class="fn n">
    <span class="given-name"><strong><?php echo $name; ?></strong></span>
  <span class="additional-name"></span>
  <span class="family-name"></span>
</span>
 <div class="org"><?php echo $adresse2; ?></div>
 <div class="adr">
  <div class="street-address"><?php echo $strasse2; ?></div>
  <span class="locality"><?php echo $plz.' '.$ort; ?></span><br /><br />
 </div>
 <div class="tel">Tel: <?php echo $tel2; ?></div>
 <div class="fax">Fax: <?php echo $fax; ?></div>
 <a class="email" href="mailto:"<?php echo $email; ?>">E-Mail: <?php echo $email; ?></a>
 </div>
 
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
 
 function initialize() {
    var mylatlng = new google.maps.LatLng(49.74153, 10.15217000000007);
    var myOptions = {
      zoom: 16,
      center: mylatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
             
  var marker = new google.maps.Marker({
      position: mylatlng, 
      map: map, 
      title:"ProDocere GmbH"
  })
 };
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
