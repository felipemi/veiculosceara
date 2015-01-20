<h1 class="entry-title">
    <?php single_tag_title(); ?>
</h1>

<div class="entry-thumbnail">
    <img src="<?php echo get_term_meta($tag->term_id, '_category_image', true); ?>" />
</div> 

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="entry-title"><?php the_title(); ?></div>
        <div class="entry-content"><?php the_content(); ?></div>

    <?php endwhile;
endif; ?>