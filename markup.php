<?php
	# Place this code anywhere before the markup is placed. This simply sets the variables used below.
	include_once('variables.php'); // Ensure this path is relative to the location of the referencing file.
?>

<!-- Place this after all stylesheets within the <head> of your document. Version and operator is defined in 'variables.php'. Ensure the href is defined correctly. -->
<!--[if <?php print $ie_warning_config['operator']; ?> IE <?php print $ie_warning_config['version']; ?>]>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php print $ie_warning_config['main_css_path']; ?>" />
<![endif]-->

<!-- Place this code directly below the <body> tag of your document -->
<div id="ie-warning"><div id="ie-warning-inner">
	<?php print $ie_warning_config[$lang]['warning_main_text']; ?>
	<a id="ie-warning-link" href="<?php print $ie_warning_config['warning_link']; ?>"><?php print $ie_warning_config[$lang]['warning_link_text']; ?></a>
</div></div> <!-- #ie-warning-inner, #ie-warning -->

<?php
	# This file unsets all variables used by the Upgrade IE Warning script. This is optional, but suggested to free up server resources.
  # This code should be placed directly below the end of the Upgrade IE Warning HTML markup.
	unset($ie_warning_config);
?>
