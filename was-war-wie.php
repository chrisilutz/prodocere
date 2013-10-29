<?php 	include ("includes/config.php");
		$current_page = "Was war wie";
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
        
        	<?php echo $navi; ?>
        	
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
            			<h1>Vergangene Seminare</h1>
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
            				<!-- Tabelle aus /includes/taple_past.php !-->	
            					<?php include("includes/table_past.php"); ?>
            				<!-- Ende Tabelle !-->
            				</tbody>
            			</table>
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
    </body>
</html>
