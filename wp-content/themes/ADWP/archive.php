<?php get_header(); ?>

<div class="container content">
	<div class="main block">
            <h1>
                <?php
                    if(is_category()){
                        single_cat_title();
                    } elseif(is_author()) {
                        the_post();
                    }  
                ?>
            </h1>
        <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content') ?>
            <?php endwhile; ?>
        <?php endif; ?>
	</div>

	<div class="side">
            <?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>