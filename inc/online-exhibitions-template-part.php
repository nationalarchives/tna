<div class="breather">
    <?php $exhibition_field = get_post_meta($post->ID, 'online-exhibition', true) ?>
    <?php $thumb = make_relative_path_from_url(wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'medium' )); ?>
    <a href="<?php echo $exhibition_field ?>" title="<?php the_title(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <div class="has-background" style="background: url(<?php echo $thumb ?> ) !important; background-size:cover !important; background-repeat:no-repeat;"></div>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/global/placeholder.jpg"
                 alt="Online exhibition">
        <?php endif; ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </a>
</div>
