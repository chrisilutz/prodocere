<?php
// $string = '';
if (!function_exists('json_decode')) {
    function json_decode($content, $assoc=false) {
        require_once 'classes/JSON.php';
        if ($assoc) {
            $json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
        }
        else {
            $json = new Services_JSON;
        }
        return $json->decode($content);
    }
}

if (!function_exists('json_encode')) {
    function json_encode($content) {
        require_once 'classes/JSON.php';
        $json = new Services_JSON;
        return $json->encode($content);
    }
};

$string = file_get_contents("docs/news.json");
$string2 = file_get_contents("docs/news_fort.json");


$json_o=json_decode($string);
$json_f=json_decode($string2);
// object method
foreach($json_o->news as $p)
{
echo '            		<article><div class="c25 left">
            			
<div class="content"><div class="vevent" id="hcalendar-'.$p->headline.'"><span class="summary '.$p->color.'">';
if ($p->condition == "ausgebucht") {
     echo "<div class='ausgebucht'><h1>Ausgebucht!</h1></div>";
 };echo '<a href="'.$p->link.'" target="_blank">'.$p->headline.'</a></span><br /><strong>Am: </strong><time datetime="'.$p->date.'" class="dtstart">'.$p->date.'</time><br /><span class="dozent"><strong>Dozent: </strong>'.$p->guy.'</span><br /><strong>Ort: </strong><span class="location">'.$p->place.'</span>
</div><div class="social"><i class="icon-facebook-sign  " style="color:#3B5998"></i><i class="icon-twitter-sign  " style="color:#33ccff;"></i><img class="xing" src="img/xing_logo.png"   width="15px;"/></div>  

            	</div></div></article>
            	
';
};
foreach($json_f->fortbildung as $p)
{
echo '            		<article><div class="c25 left">
            			
<div class="content"><div class="vevent" id="hcalendar-'.$p->headline.'"><span class="summary_fort '.$p->color.'"><a href="'.$p->link.'" target="_blank">'.$p->headline.'</a><br /><a href="'.$p->link2.'" target="_blank">'.$p->headline2.'</a></span><br /><strong>Ab: </strong><time datetime="'.$p->date.'" class="dtstart">'.$p->date.'</time><br /><strong>Ort: </strong><span class="location">'.$p->place.'</span>
</div><div class="social"><i class="icon-facebook-sign  " style="color:#3B5998"></i><i class="icon-twitter-sign  " style="color:#33ccff;"></i><img class="xing" src="img/xing_logo.png"   width="15px;"/></div>  

            	</div></div></article>
            	
';
};

?>
