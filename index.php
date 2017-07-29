<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<?php wp_head(); ?>
</head>

<body>

	<div class="main-content">
		<i class='fa fa-4x <?php echo of_get_option("icon", "fa-cogs"); ?>'></i>
		<h1>
			<?php echo of_get_option("claim", "Die Webseite ist aufgrund geplanter Wartungsarbeiten kurzzeitig nicht zu erreichen!"); ?>
		</h1>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
