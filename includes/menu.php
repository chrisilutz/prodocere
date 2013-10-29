<?php
$menu_data = array(
 
array("name" => "&Uuml;ber uns", "code" => "<i class='icon-user'></i> &Uuml;ber uns", "url" =>"#", "drop" => "drop_uber"),
array("name" => "Was war", "code" => "<i class='icon-folder-close'></i> Was war", "url" => "#", "drop" => "drop_was"),
array("name" => "Kontakt", "code" => "<i class='icon-comment-alt'></i> Kontakt","url" => "kontakt.php"),
array("name" => "Anfahrt", "code" => "<i class='icon-flag'></i> Anfahrt", "url" => "anfahrt.php"),
 );
$submenu["drop_was"] = array(
array("name" => "Vergangene Seminare", "code" => "Vergangene Seminare", "url" => "was-war.php"),
array("name" => "Feedback", "code" => "Feedback", "url" => "feedback.php"),
array("name" => "Presse", "code" => "Presse", "url" => "presse.php")
);
$submenu["drop_uber"] = array(
array("name" => "Wir", "code" => "Wir", "url" => "uber-uns.php"),
array("name" => "Dozenten", "code" => "Dozenten", "url" => "dozenten.php"),
array("name" => "Leitbild", "code" => "Leitbild", "url" => "leitbild.php")
);
?>
<!--
<?php

$navi = "<nav><a href='/' style='padding:0'><img class='logo_nav' src='img/LOGONEU.png' width='100px'></a><ul>\n";
 foreach ($menu_data as $key => $value) {
  $navi .= " <li";
    if($key != $current_page) {
     $navi .= "><a href='".$value[1]."'>";
    }
	else {$navi .= "><a href='#'>";
	}
   $navi .= $value[0];
    if($key != $current_page) {
     $navi .= "</a>";
    }
	else {$navi .= "</a>";
	}
   $navi .= "</li>\n";
 }
$navi .= "</ul></nav>";
?>	
!-->
<?php

$navi2 = "<nav><a href='/' style='padding:0'><img class='logo_nav' src='img/LOGONEU.png' width='100px'></a><ul>\n";
foreach ($menu_data as $menu) {
	$navi2 .= "<li";
	if(!isset($menu["drop"])&&($menu["name"] != $current_page)) {
		$navi2 .="><a href='".$menu['url']."'>".$menu["code"]."</a></li>";
		}
	elseif(!isset($menu["drop"])&&($menu["name"] = $current_page)){
		$navi2 .=" class='active'><a href='#'>".$menu["code"]."</a></li>";
		}
	elseif (isset($menu["drop"])&&($menu["name"] != $current_page)){
		$navi2 .=" class='dropdown-toggle'><a class='toggle' data-toggle='dropdown' href='".$menu['url']."'>".$menu["code"]." <i class='icon-caret-down'></i></a><ul class='dropdown-menu close'>";
			if(array_key_exists($menu["drop"] ,$submenu)) {
			foreach ($submenu[$menu["drop"]] as $sub) {
				$navi2 .="<li class='dropdown'><a href='".$sub['url']."'>".$sub['code']."</a></li>";
			}
			$navi2 .="</ul>";
			}
		}
	else {
		$navi2 .=" class='active dropdown-toggle'><a class='toggle' data-toggle='dropdown' href='".$menu['url']."'>".$menu["code"]." <i class='icon-caret-down'></i></a><ul class='dropdown-menu'>";
			if(array_key_exists($menu["drop"] ,$submenu)) {
			foreach ($submenu[$menu["drop"]] as $sub) {
				$navi2 .="<li class='dropdown'><a href='".$sub['url']."'>".$sub['code']."</a></li>";
			}
			$navi2 .="</ul>";
		}
		}
	}
	$navi2 .= "</ul></nav>";


?>	