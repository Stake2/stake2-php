<?php if(!class_exists('TPL')){exit;}?><!-- "Select website" form -->
<center>
	<form name="select_website" class="w3-container w3-animate-zoom <?php echo $website['Style']['tab']['theme_dark']; ?>" action="/" method="POST" style="padding: 20px; width: 45%">
		<!-- Select website -->
		<h2 class="text_size <?php echo $website['Style']['text_highlight']; ?>">
			<b><?php echo $website["Language texts"]["website_title"]; ?>:</b>
		</h2>
		<b>
			<select name="website" id="Websites" class="w3-btn w3-center text_size div_size <?php echo $website['Style']['button']['theme']['light']; ?> width_50_cent font_size_18_72px">
{}
			</select>
		</b>
		<br />

		<!-- Select language -->
		<h2 class="text_size <?php echo $website['Style']['text_highlight']; ?>">
			<b><?php echo $website["Language texts"]["language, title()"]; ?>:</b>
		</h2>
		<b>
			<select name="language" id="Languages" class="w3-btn w3-center text_size div_size <?php echo $website['Style']['button']['theme']['light']; ?> width_50_cent font_size_18_72px">
{}
			</select>
		</b>
		<br />

		<!-- Select programming mode -->
		<h2 class="text_size <?php echo $website['Style']['text_highlight']; ?>">
			<b><?php echo $website["Language texts"]["mode, title()"]; ?>:</b>
		</h2>
{}
		<br />
		<br />

		<!-- Send form -->
		<button type="submit" class="w3-btn div_size <?php echo $website['Style']['button']['theme']['light']; ?>" style="font-style: bold; border-radius: 50px;">
			<h4 class="text_size">
				<b><?php echo $website["Language texts"]["submit, title()"]; ?></b>
			</h4>
		</button>
		<br />
	</form>
</center>