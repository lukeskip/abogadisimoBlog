<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content columns large-12 medium-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1>
                    <?php the_title(); ?>
                </h1>
                <div class="excerpt"><?php the_excerpt(); ?></div>
                <div class="image">
                    <?php the_post_thumbnail();?>
                    <div class="caption"><?php the_post_thumbnail_caption(); ?></div>
                </div>
                <div class="meta-info">
                    <?php include( locate_template('includes/related-posts-template.php', false, false) ); ?>
                </div>
                <?php the_content(); ?>

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            
        </div>
        
    </div>
</div>



<?php get_footer(); ?>
