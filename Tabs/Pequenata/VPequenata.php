<?php 

#Pequenata CSS Pack file includer
require $css_pack_pequenata;

# Folder variables
$siteurlgeral = $url.$sitefolder.'/';
$sitephpfolder2 = $php_tabs_variable.ucwords($choosenwebsite).'/';
$storyfolder = $pqntstoryfolder;

# Form code for the comment and read forms
$formcode = 'pequenata';

$nolangstoryfolder = $notepad_stories_folder_variable.$storyfolder.'/';
$no_language_story_folder = $notepad_stories_folder_variable.$storyfolder.'/';

$single_cover_folder = 'Capas/Kids';
$cover_folder = $cdn_image_stories_pequenata.$single_cover_folder.'/';

# Defines the folder for the chapter text files that are going to be read and the cover folder on the CDN
require $cover_images_displayer_php_variable;

# Story name definer
$story = $pqntstoryname;

# Story status
$storystatus = $status[2];

# Site image vars
$siteimage = 'pequenata';

# Defines the site image if the site has book covers or not
if ($storyhascovers == true) {
	$story_cover_image_filename = '1';

	$siteimage = $online_cover_subfolder.$story_cover_image_filename.'.png';
	$imagesize1 = 60;
	$imagesize2 = 88;
}

else {
	$siteimage = $cdnimg.$siteimage.'.jpg';

	$imagesize1 = 30;
	$imagesize2 = 77;
}

$imglink = $siteimage;

#Site numbers
$crossover = 26;
$commentsnumb = 16;
$commentsnumbtext = $commentsnumb + 1;
$commentsnormalnumb = 10;
$commentsnormalnumbtowrite = $commentsnormalnumb - 1;
$commentschapternumb = $commentsnumbtext - $commentsnormalnumb;
$readednumb = 12;

#Non-language dependent texts
#$commentsbtn = '<a href="#'.$tabcode[6].'"><button class="w3-btn '.$btnstyle.' '.$computervar.'" onclick="openCity('."'".$tabcode[6]."')".'">'.$commentsnumb.' '.$icons[12].'</button></a>'."\n";
#$commentsbtnm = '<a href="#'.$tabcodem[6].'"><button class="w3-btn '.$btnstyle.' '.$mobilevar.'" onclick="openCity('."'".$tabcodem[6]."')".'">'.$commentsnumb.' '.$icons[12].'</button></a>'."\n";

#TextFileReader.php file includer
include $text_file_reader_file_php;

#Story date definer using story date text file
$storydate = $storydate[0];

#The chapter that I want to write
if ($chaptertowrite == false) {
	$sitestorywritechapter = '';
}

else {
	$sitestorywritechapter = (int)$chaptertowrite;
}

#Re-include of the StoryVars.php file to set the story name
include $story_variables_php_variable;

#Reviewed chapter number
$reviewedcap = 10;

#Site descriptions
$sitedescs = array(
'Website about my story, '.$story.', made by stake2', 
'Site sobre a minha história, '.$story.', feito por stake2',
);

#Synopsis text definer using the $synopsis that is generated from TextFileReader.php
$descs = array(
'Synopsis: <i class="fas fa-scroll"></i> "'.$synopsis[0].'"<br />',
'Sinopse: <i class="fas fa-scroll"></i> "'.$synopsis[1].'"<br />',
);

#Reads the book cover image directory if the site has book covers
if ($storyhascovers == true) {
	require $cover_images_generator_php_variable;
}

#English texts for Pequenata website
if (in_array($lang, $en_langs)) {
	$readtxts = array(
	$readingtxt = "You're reading",
	$readingtxt.': '.ucwords($story),
	'I Read It ✓',
	'I read the Chapter',
	'Read the Chapter',
	'Readings',
	'Readers',
	'Reader',
	);

	$writetxts = array(
	'Write',
	'Write the Chapter',
	substr($readingtxt, 0, -8).' '.strtolower('Writing').': '.ucwords($story),
	);
}

#Brazilian Portuguese texts for Pequenata website
if (in_array($lang, $pt_langs)) {
	$readtxts = array(
	$readingtxt = "Você está lendo",
	$readingtxt.': '.ucwords($story),
	'Eu li ✓',
	'Eu li o Capítulo',
	'Leu o Capítulo',
	'Leituras',
	'Leitores',
	'Leitor',
	);

	$writetxts = array(
	'Escrever',
	'Escreva o capítulo',
	substr($readingtxt, 0, -6).' '.strtolower('Escrevendo').': '.ucwords($story),
	);
}

#Status text definer, that sets the status text with [] around it
$statustxt = '['.ucfirst($storystatus).']';

#Site name, title, URL and description setter, by language
if ($lang == $langs[0]) {
	$lang = $langs[1];

	$lang2 = strtoupper($lang);
	$lang2 = substr_replace($lang2, '-', 2, 0);
	$sitename = $choosenwebsite;

	$lang = $langs[0];
	
	$sitetitulo = $storyfolder;
	$sitetitulo2 = $storyfolder.': '.$icons[11];
	$siteurl = $sitepqntlink;
	$sitedesc = $sitedescs[0];
	$sitedesc2 = $descs[0];

	$lang = $langs[0];
}

if ($lang == $langs[1]) {
	$lang2 = strtoupper($lang);
	$lang2 = substr_replace($lang2, '-', 2, 0);
	$sitename = $choosenwebsite;
	
	$sitetitulo = $story;
	$sitetitulo2 = $story.': '.$icons[11];
	$siteurl = $sitepqntlink.strtolower($lang2).'/';
	$sitedesc = $sitedescs[0];
	$sitedesc2 = $descs[0];
}

if (in_array($lang, $pt_langs)) {
	$lang2 = strtoupper($lang);
	$lang2 = substr_replace($lang2, '-', 2, 0);
	$sitename = $choosenwebsite;

	if ($lang == $ptpt_lang) {
		$sitetitulo = $story.' '.strtoupper($lang2);
	}

	else {
		$sitetitulo = $story;
	}

	$sitetitulo2 = $story.': '.$icons[11];
	$siteurl = $sitepqntlink.strtolower($lang2).'/';
	$sitedesc = $sitedescs[1];
	$sitedesc2 = $descs[1];
}

#Buttons and tabs definer
#Tab names replacer for langs
if (in_array($lang, $en_langs)) {
	$tabnames[5] = substr_replace($tabnames[5], '-', 6, 0);
	$tabnames[5] = strtr($tabnames[5], "l", strtoupper("l"));;
}

if ($writingpack == true) {
	$tabnames[0] = str_replace('Read', 'Write', $tabnames[0]);
	$tabnames[0] = str_replace('Ler', 'Escrever', $tabnames[0]);
}

#str_replace(array("\r\n", "\r", "\n", "%EF%BB%BF", "%EF", "%BB", "%BF", "U+FEFF", "/uFEFF", "^"), "", ${"$filetextarraynames[$i]"});
#Button names
$citiestxts = array(
$tabnames[0].': '.$icons[21].' '.'<span class="w3-text-yellow"> ['.$newtxt.' '.$chapters.']</span>',
$tabnames[1].': '.$icons[20].' ❤️ 😊',
$tabnames[2].': '.$icons[12],
$tabnames[3].': '.$icons[10],
$tabnames[4].': '.$icons[11],
$icons[13],
'',
);

#TabGenerator.php includer
include $tabgeneratorphp;

#Site notification variables if the site notification setting is true
if ($sitehasnotifications == true) {
	#Reviewed chapter title
	$reviewedcapcode = $chapterbtns[$reviewedcap];
}

?>