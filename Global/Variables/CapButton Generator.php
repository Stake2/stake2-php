<?php 

$capnum1 = 1;
$capnum2 = 1;
$capnum3 = 1;
$capnum4 = 0;
while ($capnum1 <= $chapters) {
	if ($storyhascovers == true) {
		if (isset($coverimages[$capnum1]) == true and isset($coverimagesm[$capnum1]) == true) {
			if ($capnum1 == 1) {
				$coverimagebuttom = '<center>'."\n".'<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'">'.$coverimages[$capnum3]."\n".'</a>'."\n"."\n".
			'<a href="#'.$capdiv.''.$capnum1.'">'."\n".$coverimagesm[$capnum3]."\n".'</a>'."\n".'</center>'."\n".'<br />'."\n"."\n";
			}
	
			if ($capnum1 == 2) {
				$capnum3++;
	
				$coverimagebuttom = '<center>'."\n".'<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'">'.$coverimages[$capnum3]."\n".'</a>'."\n"."\n".
			'<a href="#'.$capdiv.''.$capnum1.'">'."\n".$coverimagesm[$capnum3]."\n".'</a>'."\n".'</center>'."\n".'<br />'."\n"."\n";
			}
	
			if ($capnum1 == 10) {
				$coverimagebuttom = '<center>'."\n".'<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'">'.$coverimages[2]."\n".'</a>'."\n"."\n".
			'<a href="#'.$capdiv.''.$capnum1.'">'."\n".$coverimagesm[2]."\n".'</a>'."\n".'</center>'."\n".'<br />'."\n"."\n";
			}
	
			else {
				$coverimagebuttom = '<center>'."\n".'<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'">'.$coverimages[($capnum3)]."\n".'</a>'."\n"."\n".
			'<a href="#'.$capdiv.''.$capnum1.'">'."\n".$coverimagesm[($capnum3)]."\n".'</a>'."\n".'</center>'."\n".'<br />'."\n"."\n";
			}
		}

		else {
			$coverimagebuttom = '';
		}
	}

	else {
		$coverimagebuttom = '';
	}

	if ($capnum1 == $chapters) {
		$onclickscript = 'openCity('."'".$capdiv.$capnum1."'".');DefineChapter('.$capnum1.');';
		if ($capnum1 == $reviewedcap and $sitehasnotifications == true) {
			echo '<div class="'.$shakesidetosideanim.'">'."\n";
	
			$chapterbtn = '<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'"><button class="w3-btn '.$btnstyle3.'" '.$roundedborderstyle.' onclick="'.$hidenotifattribute.$onclickscript.'">'.$capnum1.' - '.$titles[$capnum4].' <span class="w3-text-yellow">['.$newtxt.'!]</span>'."</button></a> "."\n";

			echo $chapterbtn;

			echo $coverimagebuttom;

			echo $divc;

			$chapterbtns[$capnum2] = $chapterbtn;

			$capnum4++;
		}

		else {
			echo '<div class="'.$shakesidetosideanim.'">'."\n";

			$chapterbtn = '<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'"><button class="w3-btn '.$btnstyle3.'" '.$roundedborderstyle.' onclick="'.$onclickscript.'">'.$capnum1.' - '.$titles[$capnum4].' <span class="w3-text-yellow">['.$newtxt.'!]</span>'."</button></a> "."\n";

			echo $chapterbtn;

			echo $coverimagebuttom;

			echo $divc;

			$chapterbtns[$capnum2] = $chapterbtn;

			$capnum4++;
		}
	}

	else {
		$onclickscript = 'openCity('."'".$capdiv.$capnum1."'".');DefineChapter('.$capnum1.');';
		if ($capnum1 == $reviewedcap and $sitehasnotifications == true) {
			echo '<div class="'.$shakesidetosideanim.'">'."\n";

			$chapterbtn = '<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'"><button class="w3-btn '.$btnstyle3.'" '.$roundedborderstyle.' onclick="'.$hidenotifattribute.$onclickscript.'">'.$capnum1.' - '.$titles[$capnum4]."</button></a> "."\n";

			echo $chapterbtn;

			echo $coverimagebuttom;

			echo $divc;

			$chapterbtns[$capnum2] = $chapterbtn;

			$capnum4++;
		}

		else {
			echo '<div class="'.$shakesidetosideanim.'">'."\n";

			$chapterbtn = '<a href="#'.$capdiv.''.$capnum1.'" title="'.$capnum1.' - '.$titles[$capnum4].'"><button class="w3-btn '.$btnstyle3.'" '.$roundedborderstyle.' onclick="'.$onclickscript.'">'.$capnum1.' - '.$titles[$capnum4]."</button></a> "."\n";

			echo $chapterbtn;

			echo $coverimagebuttom;

			echo $divc;

			$chapterbtns[$capnum2] = $chapterbtn;
	
			$capnum4++;
		}
	}

	$capnum1++;
	$capnum2++;
	$capnum3++;
}

?>