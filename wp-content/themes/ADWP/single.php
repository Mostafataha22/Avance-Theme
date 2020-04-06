<?php get_header(); ?>

<div class="container content">
	<div class="main block">
        <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content') ?>
            <?php endwhile; ?>
		<?php endif; ?>
		<?php if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; ?>
	</div>

	<div class="side">
		<div class="block">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>