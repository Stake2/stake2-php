<?php 

if (file_exists($website_changelog_file) == true) {
	echo '<'.$m.' class="'.$textstyle.'" style="text-align:left;"><b>'."\n";
	
	$i = 0;
	while ($i <= $clfile) {
		echo '<div class="'.$zoom_animation_class.'">'.$website_changelog_file_text[$i].'<br /><br />'.$div_close."\n";
		$i++;
	}
	
	echo '</b>'.'</'.$m.'>'."\n";
	echo $div_close;
}

?>