<?php

#Include SitesButtons Attributes.php
include $sitesbuttonsattributes;

if ($sitename == $sitediario or $site == $sitediario) {
	$sitenumbcolor = $bluespan;
	$sitenumbhovercolor = $cssbtn4;
}

if ($sitename == $sitewatch) {
	$sitenumbcolor = $yellowspan;
	$sitenumbhovercolor = $cssbtn5;
}

if ($sitename == $sitepequenata) {
	$sitenumbcolor = $subtextspan2;
	$sitenumbhovercolor = $cssbtn4;
}

if ($sitename == $sitenazzevo) {
	$sitenumbcolor = $subtextspan;
	$sitenumbhovercolor = $cssbtn4;
}

if ($sitename == $sitethingsido or $site == $sitethingsido) {
	$sitenumbcolor = $subtextspan;
	$sitenumbhovercolor = $cssbtn5;
}

if ($sitename != $sitewatch and $sitename != $sitepequenata and $sitename != $sitenazzevo and $sitename != $sitethingsido and $site != $sitethingsido and $sitename != $sitediario and $site != $sitediario) {
	$sitenumbcolor = $bluespan;
	$sitenumbhovercolor = $cssbtn5;
}

if ($sitename == $sitexenaeizaque) {
	$sitedivcolor = $color5;
}

else {
	$sitedivcolor = 'w3-black';
}

echo '<a name="'.$sitestabscode.'"></a>'."\n".'<br />'."\n";
echo '<div id="'.$sitestabscode.'" class="city" style="display:none;'.$roundedborderstyle2.'">'."\n";
echo $bigspace."\n";
echo '<div class="'.$computervar.'" '.$roundedborderstyle.'>'."\n".$h42."\n";
echo $margin."\n";
echo '<center>'."\n";
echo $divzoomanim."\n";
echo '<'.$n.' class="'.$computervar.' '.$colortext.'" style="'.$roundedborderstyle2.'"><p></p><br /><b>'.$sitebtnname.$sitenumbcolor.'<span class="'.$sitenumbhovercolor.'">'.$sitesnumbtext.$spanc.$spanc.' '.$sitebtnicon.'</b><br /><br /><p></p></'.$n.'>'."\n";
echo $divc."\n";
echo '<hr class="'.$computervar.' '.$sitehr.'" />'."\n";
echo $divzoomanim."\n";
echo '<'.$m.' class="'.$sitedivcolor.'">'."\n";

$i = 0;
while ($i <= $sitenumb) {
	echo $sitesbtns[$i];
	echo "\n";
	$i++;
}

echo $h4c."\n";
echo $divc."\n";
echo "</center>"."\n";
echo $divc."\n";
echo $h4c."\n";
echo $divc."\n";

echo "\n";

echo '<div class="'.$mobilevar.'">'."\n".$h42."\n";
echo '<div class="'.$mobilevar.'">'."\n".$margin.$divc."\n";
echo "<center>"."\n";
echo $divzoomanim."\n";
echo '<'.$n.' class="'.$mobilevar.' '.$colortext.'" style="'.$roundedborderstyle2.'"><p></p><br /><b>'.$sitebtnname.$sitenumbcolor.'<span class="'.$sitenumbhovercolor.'">'.$sitesnumbtext.$spanc.$spanc.' '.$sitebtnicon.'</b><br /><br /><p></p></'.$n.'>'."\n";	
echo $divc."\n";
echo '<hr class="'.$mobilevar.' '.$sitehr.'" />'."\n";
echo $divzoomanim."\n";
echo '<'.$m.' class="'.$sitedivcolor.'">'."\n";

$i = 0;
while ($i <= $sitenumb) {
	echo $sitesbtnsm[$i];
	echo "\n";
	$i++;
}

echo $h4c."\n";
echo $divc."\n";
echo "</center>"."\n";
echo $divc."\n";
echo $h4c."\n";
echo $divc."\n";
echo $divc."\n";

?>