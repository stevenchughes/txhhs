<!DOCTYPE html>

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> <html lang="<?php print $language->language; ?>" class="no-js"> <!--<![endif]-->

	<head>

		<title><?php print $head_title; ?></title>

		<meta charset="UTF-8" />

    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php print $styles; ?><?php print $head; ?>

		<?php

		//Tracking code

		$tracking_code = theme_get_setting('general_setting_tracking_code', 'hhs');

		print $tracking_code;

		//Custom css

		$custom_css = theme_get_setting('custom_css', 'hhs');

		if(!empty($custom_css)):

		?>

		<style type="text/css" media="all">

		<?php print $custom_css;?>

		</style>

		<?php

			endif;

		?>

		<!-- Just for debugging purposes. Don't actually copy this line! -->

	    <!--[if lt IE 9]><script src="js/vendor/ie8-responsive-file-warning.js"></script><![endif]-->



	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

	    <!--[if lt IE 9]>

	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

	    <![endif]-->

	</head>

	<body class="<?php print $classes;?>"  <?php print $attributes;?> >

		<div id="skip-link">

			<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>

		</div>
		<!--[if lt IE 7]>

	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>

	    <![endif]-->

	    <!-- Scroll to the top //-->

	    <div id="to-the-top"><i class="fa fa-chevron-up"></i></div>

	    <?php print $page_top; ?><?php print $page; ?><?php print $page_bottom; ?>

		<!-- JS includes //-->

		<?php print $scripts; ?>

	</body>

</html>