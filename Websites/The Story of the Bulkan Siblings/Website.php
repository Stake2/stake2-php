<?php 

require $local_website_folder."Name.php";

if (strpos ($host_text, $website_selector_parameters[0]."=".$website_keys[$local_website_name]) == True) {
	$selected_website = $website_titles[$local_website_name];

	# Website title definer
	$website = $website_titles[$selected_website];
	$website_name = $website_titles[$selected_website];

	$choosed_website_css_file = $css_file_pequenata;
	$selected_website_style_file = $local_website_folder."Style.php";

	# Website Style.php File Includer
	require $selected_website_style_file;

	# Website settings
	$website_has_notifications = False; #Defines if website has notifications on
	$website_has_comments_tab = True; #Defines if website has a Comments Tab variable
	$website_has_comments = True; #Defines the website has comments
	$website_shows_comments = True; #Defines if website shows the comments on the Comments Tab
	$website_has_stories_tab_setting = True; #Defines if website has a Stories Tab
	$website_story_has_book_covers_setting = True; #Defines if website has book covers for the story
	$story_shows_story_covers = True;
	$story_has_reads = True; #Defines if the story website has "story_reads_array" number, file and elements
	$story_has_chapter_comments = True; #Defines if the story has comments on the chapter
	$story_has_dates = False; #Defines if the story has dates
	$website_story_has_titles = True; #Defines if the story has chapter_titles
	$story_uses_status = True; #Defines if the story uses the story statuses
	$story_website_contains_reads = True; #Defines if the story has story_reads_array on it
	$story_website_contains_comments = True; #Defines if the story has comments on it
	$story_website_uses_chapter_opener = True; #Defines if the website uses the Open Chapter Script
	$site_uses_new_comment_and_read_displayer = True;
	$use_variable_inserter = True;

	# Website Tabs array
	$tabs = array("Read", "Readers", "Stories");

	# Website Tab Names array
	if (in_array($website_language, $en_languages_array)) {
		$tab_names = array("Read story", "Readers", "Other stories");
	}

	if (in_array($website_language, $pt_languages_array)) {
		$tab_names = array("Ler história", "Leitores", "Outras histórias");
	}

	# Number of tabs
	$website_tab_number = count($tabs) - 1;

	$found_selected_website = True;
}

?>