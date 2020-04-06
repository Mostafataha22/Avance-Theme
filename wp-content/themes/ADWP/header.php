<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<h1>
				<a href="<?php echo home_url('/') ?>">
                <?php bloginfo('name') ?>
				</a>
				<small><?php bloginfo('description')?></small>
			</h1>
			<div class="h_right">
				<form action="<?php esc_url(home_url('/')) ?>" method="get">
					<input type="text" name="s" id="search" placeholder="Search..." />
				</form>
			</div>
		</div>
    </header>
    
    <nav class="nav main-nav">
        <div class="container">
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                wp_nav_menu('$args');
            ?>
        </div>
    </nav>