<?php get_header(); ?>

<div class="container content">
	<div class="main block">
        <div class="page-format">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_content(); ?>
                    <?php if(has_post_thumbnail()) : ?>    
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
	</div>

	<div class="side">
            <?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>