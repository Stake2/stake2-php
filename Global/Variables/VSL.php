<?php

$sitefolder = strtolower($site);
$storyfolder = "SpaceLiving";
$sitefolder = $storyfolder;
$url = "https://diario.netlify.com";
$cdn = $url."/"."cdn";
$siteurlgeral = $url."/".$sitefolder."/";
$sitephpfolder = "C:/Mega/Diario/PHP/";
$fontawesomelink = "https://use.fontawesome.com/releases/v5.8.2/css/all.css";
$rootstoryfolder = "C:/Mega/Bloco De Notas/Effort/Historias/";
$storieslinks = $sitephpfolder.$global.'/'.$folder2.'/StoriesLinks.php';
$siteheaderfile = $sitephpfolder.$global.'/'.$folder2.'/SiteHeader.php';
$formfile = $sitephpfolder.$global.'/'.$folder2.'/FormFile.php';
$tabvarsfile = $sitephpfolder.$global.'/'.$folder2.'/TabVars.php';

$natal = false;

if ($natal == true) {
	$stylefilephp = $sitephpfolder.$site."/".$folder2."/SiteStyleNatal.php";
} else {
	$stylefilephp = $sitephpfolder.$site."/".$folder2."/SiteStyle.php";
}

$globalfiles = array($stylefilephp, $storieslinks, $siteheaderfile, $formfile, $tabvarsfile);

if ($natal == true) {
	$sitecssfile = "red";
} 

else {
	$sitecssfile = "sl";
}

$siteimage = "spaceliving";
$siteimage = $cdn."/img/".$siteimage."logo.jpg";
$siteimage2 = $cdn."/img/".$siteimage."logo.jpg";	
$imglink = $siteimage;
$sitecss = '<link rel="stylesheet" type="text/css" href="'.$cdn.'/css/'.$sitecssfile.'.css" />
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css" />
<link rel="stylesheet" type="text/css" href="'.$cdn.'/css/w3.css" />
<link rel="stylesheet" type="text/css" href="'.$cdn.'/css/stories.css" />
<link rel="stylesheet" type="text/css" href="'.$cdn.'/css/Colors.css" />
<link rel="stylesheet" type="text/css" href="'.$cdn.'/css/imghover.css" />'.
"\n";
$sitejs = '<script src="'.$cdn.'/js/myFunction.js"></script>
<script src="'.$cdn.'/js/tabs.js"></script>
<script src="'.$cdn.'/js/redirect.js" onLoad="rodar();"></script>
<script src="'.$cdn.'/js/ShowHide.js"></script>
<script src="'.$cdn.'/js/sidemenu.js"></script>
<script src="'.$cdn.'/js/js.js"></script>
<script src="'.$cdn.'/js/Natal.js"></script>'.
"\n";
date_default_timezone_set("America/Sao_Paulo");
$data = date("d/m/Y");

include $globalfiles[0];

$cssbtn1 = "borderbtn";
$cssbtn2 = "borderbtn2";
$cssbtn3 = "borderbtnblack2";
$mobile0 = 'mobileHide';
$mobile1 = 'mobileShow';
$citystyle = 'city '.$mobile0;
$citystylem = 'city '.$mobile0;
$btnstyle = $color2.' '.$cssbtn1;
$border = "border";
$n1 = '<h2>';
$n2 = '</h2>';
$n = 'h2';
$m = 'h4';
$m1 = '<h4>';
$m2 = '</h4>';
$spanc = '</span>';
$divc = '</div>';
$h2c = '</h2>';
$h4c = '</h4>';
$bigspace = '<div class="mobileHide"><br /><br /><br /><br /><br /><br /><br /><br /></div>';
$margin = '<div style="margin:3%;">';
$margin2 = '<div style="margin-left:30%;width:40%;">';
$mobile0 = 'mobileHide';
$mobile1 = 'mobileShow';
$divmobile0 = '<div class="mobileHide">';
$divmobile1 = '<div class="mobileShow">';
$pcbutton = $color2.' '.$cssbtn1;
$mobilebutton = $color2.' '.$cssbtn1;
$h2 = '<'.$n.' class="black '.$colortext.'" style="margin:10%;border-width:3px;border-color:'.$color3.';border-style:solid;">';
$h4 = '<'.$m.' class="black '.$colortext.'" style="margin:10%;border-width:3px;border-color:'.$color3.';border-style:solid;">';
$h42 = '<'.$m.' class="'.$textstyle.'" style="margin:10%;border-width:3px;border-color:white;border-style:solid;">';
$hstyle = 'margin:5%;';
$hstyle2 = 'margin:10%;border-width:3px;border-color:'.$color4.';border-style:solid;';
$hstyle2xmas = 'margin:10%;border-width:3px;border-color:'.$color5.';border-style:solid;';
$spanc = '</span>';
$divc = '</div>';
$h2c = '</h2>';
$h4c = '</h4>';
$widthsize = '50';
$size = 'height="'.$widthsize.'"';
$readersicon1 = '<i class="fas fa-user-friends '.$text2.'"></i> ❤️ 😊';
$commenticon1 = '<i class="fas fa-comments '.$text2.'"></i>';
$writeicon1 = '<i class="fas fa-pen '.$text2.'"></i>';
$storiesicon1 = '<i class="fas fa-book '.$text2.'"></i>';
$readersicon2 = '<i class="fas fa-user-friends '.$colortext.'"></i> ❤️ 😊';
$commenticon2 = '<i class="fas fa-comments '.$colortext.'"></i>';
$writeicon2 = '<i class="fas fa-pen '.$colortext.'"></i>';
$storiesicon2 = '<i class="fas fa-book '.$colortext.'"></i>';
$mainimage = '<img src="'.$imglink.'" width="42%" class="'.$colortext.' mobileHide" style="border-width:3px;border-color:'.$color3.';border-style:solid;" />';
$mainimagem = '<img src="'.$imglink.'" width="78%" class="'.$colortext.' mobileShow" style="border-width:3px;border-color:'.$color3.';border-style:solid;" />';
$imagens = $mainimage."\n".$mainimagem;
$marginstyle1 = 'style="margin:10%;border-width:3px;border-color:white;border-style:solid;"';
$marginstyle2 = 'style="margin-right:70%;border-width:3px;border-color:'.$bordercolor.';border-style:solid;"';
$marginstyle3 = 'style="margin-right:70%;border-width:3px;border-color:'.$bordercolor.';border-style:solid;"';
$marginstyle2m = 'style="margin-right:25%;border-width:3px;border-color:'.$bordercolor.';border-style:solid;"';
$marginstyle2m2 = 'style="margin-right:29%;border-width:3px;border-color:'.$bordercolor.';border-style:solid;"';
$icons = array('<i class="fas fa-video"></i>', '<i class="fas fa-user-friends"></i>', '<i class="fas fa-images"></i>', '<i class="far fa-calendar-alt"></i>', '<i class="fas fa-tasks"></i>');

ob_start();
include "C:\Mega\Diario\PHP\Global\Variables\Btns.php";
$buttons = ob_get_clean();

if ($lang == 'enus' or $lang == 'geral') {
	$langreadtext = 'Read';
	$siteicon = '🇺🇸';
}

if ($lang == 'ptbr') {
	$langreadtext = 'Ler';
	$siteicon = '🇧🇷';
}

$langreadtext2 = strtolower($langreadtext);

if ($sitetype2 == $sitearray[1]) {
	$citytxt1_ = $langreadtext.': '.$siteicon;
	$citytxt2_ = $tabnames[1].': '.$icons[4];
	$citytxt3_ = $tabnames[2].': '.$icons[3];
	
	$txts = 'h2';
	$citytxt1 = '<'.$txts.'>'.$citytxt1_.'</'.$txts.'>';
	$citytxt2 = '<'.$txts.'>'.$citytxt2_.'</'.$txts.'>';
	$citytxt3 = '<'.$txts.'>'.$citytxt3_.'</'.$txts.'>';
	
	$citycode1 = $site;
	$citycode2 = $site.strtolower($tabnames[1]);
	$citycode3 = $site.strtolower($tabnames[2]);
	
	$tabcode = array($citycode1, $citycode2, $citycode3);
	$tabtxt = array($citytxt1, $citytxt2, $citytxt3);
	$yeartabcode = array($yearlinks[0], $yearlinks[1], $yearlinks[2]);
	$yeartabtxt = array($yeararray[0], $yeararray[1], $yeararray[2]);
	
	$txts = 'h4';
	$citytxt1 = '<'.$txts.'>'.$citytxt1_.'</'.$txts.'>';
	$citytxt2 = '<'.$txts.'>'.$citytxt2_.'</'.$txts.'>';
	$citytxt3 = '<'.$txts.'>'.$citytxt3_.'</'.$txts.'>';
	
	$tabcodem = array($citycode1.'m', $citycode2.'m', $citycode3.'m');
	$tabtxtm = array($citytxt1, $citytxt2, $citytxt3);
	
	if ($lang == 'enus' or $lang == 'geral') {$stry5 = 'Littletato';$stry6 = 'Diary';}
	if ($lang == 'ptbr') {$stry5 = 'Pequenata';$stry6 = 'Diário';}
	$strynames = array($stry5, $stry6);
	$strylnks = array('<a href="https://diario.netlify.com/📘/" class="'.$colortext2.'">'.$strynames[1].'</a>', '<a href="https://diario.netlify.com/pequenata 📘/" class="'.$colortext2.'">'.$strynames[0].'</a>');
	$strycapnumb = array(22, 7);
	$strywordnumb = array(4.053);
	$strylinesnumb = array(555);
	$strycharnumb = '12.730';
}

ob_start();
include "C:\Mega\Diario\PHP\Global\Variables\Btns.php";
$buttons = ob_get_clean();

$citybodyfiles = array($sitephpfolder.$sitefolder.'/'.$folder1.'/'.'CityBody1.php', $sitephpfolder.$sitefolder.'/'.$folder1.'/'.'CityBody5.php', $sitephpfolder.$sitefolder.'/'.$folder1.'/'.'CityBody6.php');

include $citybodyfiles[0];
include $citybodyfiles[1];
include $citybodyfiles[2];

ob_start();
include $sitephpfolder.$sitefolder.'/'.$folder1.'/'.$ano.'/'.'CityContent5.php';
$citycontents5 = ob_get_clean();

ob_start();
include $sitephpfolder.$sitefolder.'/'.$folder1.'/'.$ano.'/'.'CityContent6.php';
$citycontents6 = ob_get_clean();

$citiescontent = array($citytitle1.$citybody1, $citytitle5.$citybody5.$citycontents5, $citytitle6.$citybody6.$citycontents6);	$citybodyfiles = array($sitephpfolder.$sitefolder.'/'.$folder1.'/'.$ano.'/'.'CityBody1.php', $sitephpfolder.$sitefolder.'/'.$folder1.'/'.$ano.'/'.'CityBody5.php', $sitephpfolder.$sitefolder.'/'.$folder1.'/'.$ano.'/'.'CityBody6.php');

$chapters = 14;
$crossover = 9;
$readersnumb = 15;
$titleone = 9;
$lasttitle = $chapters + 1;
$storydate = '19/01/2019';

$authorname = '<span class="w3-text-orange">Izaque Sanvezzo(stake2)</span>, <span class="w3-text-white">Julia</span>';

include $globalfiles[1];

$mobilemenuopen = '<button id="ShowMenu" class="w3-btn '.$color2.' mobileShow border '.$cssbtn1.'" style="float:left;position:fixed;" onclick="openNav()"><h2><i class="fas fa-bars"></i></h2></button>';

$pcbtn1 = '<br /><button class="w3-btn yellow '.$cssbtn1.'" onclick="buttons();"><h2><i class="fas fa-arrow-circle-up"></i></h2></button>';
$pcbtn2 = '<button id="ShowButton" class="w3-btn yellow mobileHide '.$cssbtn1.'" style="display:none;" onclick="buttons2();"><h2><i class="fas fa-arrow-circle-down"></i></h2></button>';

$archivebtn = '<br /><br />
<center><button class="w3-btn '.$color." ".$cssbtn1.'" onclick="window.open('."'".$cdn."/arquivado/spaceliving 06-04-2019.html'".');"><h5 class="dark'.$colortext.'"><b><i class="fas fa-archive dark'.$colortext.'"></i> 06/04/2019</b></h5></button></center>';

$sitebtnname = 'Sites: <i class="fas fa-globe-americas"></i>';
$sitebtn = '<center><a href="#sites"><button class="w3-btn '.$color2.' '.$cssbtn1.'" onclick="openCity('."'sites'".')">'.$n1.$sitebtnname.$n2.'</button><br /></a></center>';

$readerslist = "1 - RequeiJhon :3<br />
2 - Passive :3<br />
3 - adjecarry :3<br />
4 - Mayu-chan :3<br />
5 - Wendy :3<br />
6 - Igor :3<br />
7 - Guilherme :3<br />
8 - Nicolly :3<br />
9 - Natalia :3<br />
10 - Marina Duda :3 😊<br />
11 - Andressa :3 😊 ^^<br />
12 - Professora Tania :)<br />
13 - Professora Zulma :)<br />
14 - Thaíssa :3<br />
15 - Agnes :3 ❤️ 😊<br />";

if ($lang == 'geral') {
$sitename = $site;

	if ($natal == true) {
		$sitename = $site." Edição de Natal 🎄🎁";
	} 
	
	else {
		$sitename = $site;
	}

$sitetitulo = $sitename;
$siteicon = '🇺🇸';
$siteurl = $url."/".$sitefolder."/";
$sitedesc = "Website about my story, ".$sitename.", made by stake2";
$capdiv = 'capen';
$capbtntext = 'Chapter';
$reading = "<b>You're reading: ".$sitename." </b>";

$sitehead = '
<title>'.$sitetitulo.'</title>
<meta charset="UTF-8" />
<meta property="og:title" content="'.$sitetitulo.'" />
<meta property="og:site_name" content="'.$sitetitulo.'" />
<link rel="canonical" href="'.$siteurl.'" />
<meta property="og:url" content="'.$siteurl.'" />
<link rel="icon" href="'.$siteimage.'" />
<link rel="image_src" href="'.$siteimage.'" />
<meta property="og:image" content="'.$siteimage.'" />
<meta name="description" content="'.$sitedesc.'" />
<meta property="og:description" content="'.$sitedesc.'" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" value="@The_Snakes90" />
<meta name="twitter:creator" content="@The_Snakes90" />
'.$sitecss.'<meta name="revised" content="'."Stake's Enterprisetm".', '.$data.'" />
<meta name="author" content="Stake Ferreira" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes" />
<link rel="stylesheet" href="'.$fontawesomelink.'" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />';

$descrição = '<i class="fas fa-scroll"></i> Description: "Lisa was a girl that likes to write stories, play on her computer and PS4, eat things, watch movies, and listen to music." <i class="fas fa-scroll"></i><br />';

$author = 'Author';
$captext = "Chapters";
$data = "Date";
$read = 'Read story';
$readers = 'Readers';
$statustxt = 'Writing';
$comment = 'Comment';
$write = 'Write';
$stories = 'Stories';
$formnome = "Name";
$commentdesc = "Say what you think about the story";
$writedesc = "Write the Chapter";
$readersdesc = "Thanks everyone ♥";

include $globalfiles[4];

$captitle = $captext." ".$lang."";
$captitle_ = "<b>".$captext." EN-US: ".$siteicon."</b>";
$status = "[".$statustxt."]";

if ($lang == 'geral') {
	$lang = 'enus';
}

$titlesfile = $rootstoryfolder.$storyfolder."/CapTitles ".$lang.".txt";

$fp = @fopen($titlesfile, 'r', 'UTF-8'); 
if ($fp) {
	$titlestxt = explode("\n", fread($fp, filesize($titlesfile)));
	$titles = str_replace("^", "", $titlestxt);
}

$lang = 'geral';
	
include $globalfiles[2];

include $globalfiles[3];
}

if ($lang == 'enus') {
$sitename = $site;

	if ($natal == true) {
		$sitename = $site." Christmas Edition 🎄🎁";
	} 
	
	else {
		$sitename = $site;
	}

$sitetitulo = $sitename." ".$lang2;
$siteicon = '🇺🇸';
$siteurl = $url."/".$sitefolder."/".$lang2."/";
$sitedesc = "Website about my story, ".$sitename.", made by stake2";
$capdiv = 'capen';
$capbtntext = 'Chapter';
$reading = "<b>You're reading: ".$sitename." </b>";

$sitehead = '
<title>'.$sitetitulo.'</title>
<meta charset="UTF-8" />
<meta property="og:title" content="'.$sitetitulo.'" />
<meta property="og:site_name" content="'.$sitetitulo.'" />
<link rel="canonical" href="'.$siteurl.'" />
<meta property="og:url" content="'.$siteurl.'" />
<link rel="icon" href="'.$siteimage.'" />
<link rel="image_src" href="'.$siteimage.'" />
<meta property="og:image" content="'.$siteimage.'" />
<meta name="description" content="'.$sitedesc.'" />
<meta property="og:description" content="'.$sitedesc.'" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" value="@The_Snakes90" />
<meta name="twitter:creator" content="@The_Snakes90" />
'.$sitecss.'<meta name="revised" content="'."Stake's Enterprisetm".', '.$data.'" />
<meta name="author" content="Stake Ferreira" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes" />
<link rel="stylesheet" href="'.$fontawesomelink.'" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />';

$descrição = '<i class="fas fa-scroll"></i> Description: "Lisa was a girl that likes to write stories, play on her computer and PS4, eat things, watch movies, and listen to music." <i class="fas fa-scroll"></i><br />';

$author = 'Author';
$captext = "Chapters";
$data = "Date";
$read = 'Read story';
$readers = 'Readers';
$statustxt = 'Writing';
$comment = 'Comment';
$write = 'Write';
$stories = 'Stories';
$formnome = "Name";
$commentdesc = "Say what you think about the story";
$writedesc = "Write the Chapter";
$readersdesc = "Thanks everyone ♥";

include $globalfiles[4];

$captitle = $captext." ".$lang."";
$captitle_ = "<b>".$captext." ".$lang2.": 🇺🇸</b>";
$status = "[".$statustxt."]";

$titlesfile = $rootstoryfolder.$storyfolder."/CapTitles ".$lang.".txt";

$fp = @fopen($titlesfile, 'r', 'UTF-8'); 
if ($fp) {
	$titlestxt = explode("\n", fread($fp, filesize($titlesfile)));
	$titles = str_replace("^", "", $titlestxt);
}

include $globalfiles[2];

include $globalfiles[3];
}

if ($lang == 'ptbr') {
$sitename = $site;

	if ($natal == true) {
		$sitename = $site." Edição de Natal 🎄🎁";
	} 
	
	else {
		$sitename = $site;
	}

$sitetitulo = $sitename." ".$lang2;
$siteicon = '🇧🇷';
$siteurl = $url."/".$sitefolder."/".$lang2."/";
$sitedesc = "Site sobre a minha história, ".$sitename.", feito por stake2";
$capdiv = 'cappt';
$capbtntext = 'Capítulo';
$reading = "<b>Você está lendo: ".$sitename." </b>";

$sitehead = '
<title>'.$sitetitulo.'</title>
<meta charset="UTF-8" />
<meta property="og:title" content="'.$sitetitulo.'" />
<meta property="og:site_name" content="'.$sitetitulo.'" />
<link rel="canonical" href="'.$siteurl.'" />
<meta property="og:url" content="'.$siteurl.'" />
<link rel="icon" href="'.$siteimage.'" />
<link rel="image_src" href="'.$siteimage.'" />
<meta property="og:image" content="'.$siteimage.'" />
<meta name="description" content="'.$sitedesc.'" />
<meta property="og:description" content="'.$sitedesc.'" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" value="@The_Snakes90" />
<meta name="twitter:creator" content="@The_Snakes90" />
'.$sitecss.'<meta name="revised" content="'."Stake's Enterprisetm".', '.$data.'" />
<meta name="author" content="Stake Ferreira" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes" />
<link rel="stylesheet" href="'.$fontawesomelink.'" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />';

$descrição = '<i class="fas fa-scroll"></i> Descrição: "Lisa era uma menina que gostava de escrever histórias, jogar no computador e PS4, comer coisas, assistir filmes e ouvir musicas." <i class="fas fa-scroll"></i><br />';

$author = 'Autor';
$captext = "Capítulos";
$data = "Data";
$read = 'Ler história';
$readers = "Leitores";
$statustxt = 'Escrevendo';
$comment = "Comentário";
$write = "Escrever";
$stories = "Histórias";
$formnome = "Nome";
$commentdesc = "Comente o que achou da história";
$writedesc = "Escreva o capítulo";
$readersdesc = "Obrigado a todos ♥";

include $globalfiles[4];

$captitle = $captext." ".$lang."";
$captitle_ = "<b>".$captext." ".$lang2.": 🇧🇷</b>";
$status = "[".$statustxt."]";

$titlesfile = $rootstoryfolder.$storyfolder."/CapTitles ".$lang.".txt";

$fp = @fopen($titlesfile, 'r', 'UTF-8'); 
if ($fp) {
	$titlestxt = explode("\n", fread($fp, filesize($titlesfile)));
	$titles = str_replace("^", "", $titlestxt);
}
	
include $globalfiles[2];

include $globalfiles[3];
}

?>