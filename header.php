<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> ">
<head>
	<title><?php echo wp_get_document_title(); ?></title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<?php wp_head(); ?>

</head>
<body>
<div class="nav">

	<div>
		<div><a  href="<?php echo site_url('/','relative'); ?>">
                <img  class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png">
            </a></div>
	</div>
	<div>
		<?php
		if(function_exists('wp_nav_menu')) {
			wp_nav_menu(array( 'theme_location' => 'header_left_menu', 'depth' => 1,));
		}
		?>
	</div>
	<div>
		<?php
		if(function_exists('wp_nav_menu')) {
			wp_nav_menu(array( 'theme_location' => 'header_right_menu', 'depth' => 1,));
		}
		?>
	</div>
</div>