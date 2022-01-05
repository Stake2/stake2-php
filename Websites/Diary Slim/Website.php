<?php 

require $local_website_folder."Name.php";

# Diário Website setter
if (strpos ($host_text, $website_selector_parameters[0]."=".$website_keys[$local_website_name]) == True) {
	$selected_website = $website_titles[$local_website_name];

	#Website title and name definer
	$website_name = $selected_website;
	$choosed_website_css_file = "POCB";

	# Website settings
	$website_settings["tab_body_generator"] = True;
	$website_settings["use_custom_buttons_bar"] = True;
	$website_settings["has_stories_tab"] = True;

	$story_website_settings["show_new_chapter_text"] = False;
	$story_website_settings["has_story_covers"] = True;
	$story_website_settings["has_custom_story_folder"] = True;
	$story_website_settings["replace_story_text"] = True;
	$story_website_settings["chapter_opener"] = True;
	$story_website_settings["has_dates"] = False;
	$story_website_settings["use_status"] = False;
	$story_website_settings["chapter_comments"] = True;
	
	$story_website_settings["has_titles"] = True;
	$story_website_contains_reads = False;
	$story_website_contains_comments = False;
	$website_shows_chapter_covers = False;

	$tab_names = Language_Item_Definer(array("Read the ".$local_website_name), array("Ler o Diário Slim"));

	if ($story_website_settings["has_story_covers"] == True) {
		if (in_array($website_language, $en_languages_array)) {
			array_push($tab_names, "Stories");
		}

		if (in_array($website_language, $pt_languages_array)) {
			array_push($tab_names, "Histórias");
		}
	}

	# Number of tabs
	$website_tab_number = count($tab_names) - 1;

	$found_selected_website = True;
}

?>