<?php 

echo '
function Open_Chapter() {'."\n".
	'	var website = window.location;'."\n".
	'	var site2 = '."'".'"'."'".' + website + '."'".'"'."'".';'."\n".
	'	var userLang = navigator.language || navigator.userLanguage;'."\n".
	'	var chapter_text = "'.$chapter_div_text.'";
	'.

	'
	if (userLang == "pt-BR" || userLang == "pt-PT") {
		var read_chapter_text = "ler-capitulo-";
	}

	else {
		var read_chapter_text = "read-chapter-";
	}
	';

$i = 0;
while ($i < $chapters) {
	$i2 = $i + 1;

	echo '
	var first_check_'.$i2.' = site2.includes(read_chapter_text + "'.$i2.'");
	var second_check_'.$i2.' = site2.includes(read_chapter_text + "['.$i2.']");
	var third_check_'.$i2.' = site2.includes(read_chapter_text + '."'".'"'."'"." + ".$i2." + "."'".'"'."'".');
	var fourth_check_'.$i2.' = site2.includes(read_chapter_text + "%22'.$i2.'%22");
	var fifth_check_'.$i2.' = site2.includes("'.$i2.'");';

	$i++;
}

echo "\n"."\n";

$i = 0;
while ($i < $chapters) {
	$i2 = $i + 1;

	echo '	if (first_check_'.$i2.' === true || second_check_'.$i2.' === true || third_check_'.$i2.' === true || fourth_check_'.$i2.' === true || fifth_check_'.$i2.' === true) {'."\n";
	echo '		var new_chapter_text = chapter_text + "'.$i2.'";'."\n";
	echo '		openCity(new_chapter_text);'."\n";
	echo '		document.getElementById(new_chapter_text).scrollIntoView();'."\n";
	echo '		Chapter_Number = '.$i2.';'."\n";
	echo '		Define_Chapter('.$i2.');'."\n";
	echo '		Add_To_Website_Title("'." - ".ucwords($chapter_text). ": ".$i2." - ".$chapter_titles[$i2 - 1].'", "notification");'."\n";
	echo '	}'."\n";

	if ($i != $chapters) {
		echo "\n";
	}

	$i++;
}

echo '}
console.log("Open Chapter Script was loaded.");'."\n";

echo "\n";
echo 'Open_Chapter();'."\n";

?>