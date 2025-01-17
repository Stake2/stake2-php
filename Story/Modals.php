<?php 

# Modals

$modal_types = ["comment", "read"];

foreach ($modal_types as $type) {
	$chapter_modal = [
		"type" => $type,
		"type_title" => ucwords($type),
		"form_name" => $website["Data"]["title"]."_".ucwords($type),
		"class" => "",
	];

	if ($type == "comment") {
		$chapter_modal["text"] = $website["Language texts"]["comment_on_the_chapter"];
		$chapter_modal["comment_input"] = "\t\t\t"."<!-- Comment input -->"."\n".
		"\t\t\t".HTML::Element("h2", "\n\t\t\t\t".$website["Language texts"]["comment, title()"].": "."\n\t\t\t", 'style="font-weight: bold;"', "text_size ".$website["Style"]["text_highlight"]." margin_top_bottom_3_cent")."\n".
		"\t\t\t".HTML::Element("input", "", 'type="text" name="comment" style="width: 100%; font-weight: bold; border-radius: 50px;"', "w3-input text_size ".$website["Style"]["button"]["theme"]["light"])."\n";

		$chapter_modal["icon"] = $website["Icons"]["comment"];
		$chapter_modal["class"] = " margin_6_cent_auto";
	}

	if ($type == "read") {
		$chapter_modal["text"] = $website["Language texts"]["i_read_the_chapter"];
		$chapter_modal["icon"] = $website["Icons"]["reader"];
	}

	$chapter_modal["icon"] .= "\n";

	$tpl -> assign("chapter_modal", $chapter_modal);
	$story["chapters"] .= $tpl -> draw("Story/Modal", True);

	if ($type == "comment") {
		$story["chapters"] .= "\n\n";
	}
}

?>