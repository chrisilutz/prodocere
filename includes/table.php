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


$json_o=json_decode($string);
// object method
foreach($json_o->news as $p)
{
echo '<tr><td>'.$p->date.'</td><td><a href="'.$p->link.'" target="_blank">'.$p->headline.'</a></td><td>'.$p->guy.'</td><td>'.$p->place.'</td></tr>';
}

?>
