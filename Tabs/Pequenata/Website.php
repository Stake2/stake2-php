<?php 

#Pequenata Website setter
if (strpos ($host, $params[0].'='.$sitepequenata) == true) {
	$choosenwebsite = $sitepequenata;

	#Site title and name definer
	$sitename = $choosenwebsite;
	$setsitecssfile = $pqntcss;

	#Site settings definer
	$sitehasnotifications = true; #Defines if site has notifications on
	$sitehascommentstab = true; #Defines if site has a Comments Tab variable
	$sitehascomments = true; #Defines the site has comments
	$siteshowscomments = true; #Defines if site shows the comments on the Comments Tab
	$sitehasstories = true; #Defines if site has a Stories Tab
	$sitehaschangelog = true; #Defines if site has a changelog tab and file to be read
	$showwriteformtext = false; #Defines if site shows title and story text on the writing chapter
	$showchaptertext = false; #Defines if site shows the chapter text on the writing chapter form
	$sitehidenotifonclickreadtab = false; #Defines if site hides the notification when you click on the "Read story" button
	$siteuseschapteropener = true; #Defines if the website uses the ChapterOpener Script
	$site_uses_new_comment_and_read_displayer = true;

	$sitestorywrite = false; #Defines if site has a story writing chapter
	$newwritestyle = false; #Defines if the website uses the new writing style for chapters
	$storyhascovers = true; #Defines if site has book covers for the story
	$storywritesstoryfiles = false; #Defines if the story website creates text files with the story text (chapters)
	$storyhasreads = true; #Defines if the story website has "reads" number, file and elements
	$storyhaschaptercomments = true; #Defines if the story has comments on the chapter
	$storyhasdates = true; #Defines if the story has dates
	$storyhastitles = true; #Defines if the story has titles
	$storyusestatus = true; #Defines if the story uses the story statuses
	$storycontainsreads = true; #Defines if the story has reads on it
	$storycontainscomments = true; #Defines if the story has comments on it

	#Site settings setter file includer
	include $settingsparamsfile;

	#Site Tabs array
	$tabs = array('Read', 'Readers', 'Comment', 'Write', 'Stories', 'Changelog');

	#Site Tabnames array
	if (in_array($lang, $en_langs)) {
		$tabnames = array('Read story', 'Readers', 'Comment', 'Write', 'Stories', 'Changelog', 'Chapters', 'Comments');
		$site = ucwords('littletato');
	}

	if (in_array($lang, $pt_langs)) {
		$tabnames = array('Ler história', 'Leitores', 'Comentar', 'Escrever', 'Histórias', 'Registro de Mudanças', 'Capítulos', 'Comentários');
		$site = ucwords($choosenwebsite);
	}

	#Number of tabs
	$tabnumb = count($tabs) - 1;

	#Includer of the array of the GenericTabs files
	include $genericcitiesgeneratorfile;
}

?>