<?php

function Include_Classes($class_name) {
	global $website_classes_folder;

	$class_php_file = $class_name.".php";
	$class_php_file_inside_folder = $website_classes_folder.$class_php_file;

	if (file_exists($class_php_file)) {
		require_once($class_php_file);
	}

	else if (file_exists($class_php_file_inside_folder)) {
		require_once($class_php_file_inside_folder);
	}
}

Include_Classes("Website Info Interface and Abstract Class");
Include_Classes("Website Style Interface and Abstract Class");

spl_autoload_register("Include_Classes");

$website_style = new Website_Style($website_folder);
$website_style_file = $website_style -> get_style_file();

$website_info = new Website_Info($website_title_header, $website_meta_description, $website_header_description, $website_images_variable);

$website_header_title = $website_info -> get_header_title();
$website_description = $website_info -> get_description();
$website_header_description = $website_info -> get_header_description();
$website_images = $website_info -> get_images();

$website_info_dict = $website_info -> get_website_info_dict();

?>