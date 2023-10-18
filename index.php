<html>
<head>
	<title><?php wp_title('|',true,'left'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body id="messtyles">
    <?php
    get_header();
    ?>
    <?php
    get_template_part('content');

    ?>
    <?php
    get_footer();
    ?>

</body>

</html>
