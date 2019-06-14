<?php 
    get_header('single'); 
    $author_id = get_post_field( 'post_author', get_the_ID() );
?>
<div class="container">
    <div class="row">
        <div class="content columns large-12 medium-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="meta row ">
                    <div class="large-3 small-12 column text-center">
                        <img class="author author_<?php echo $author_id?>" src="<?php echo get_avatar_url($author_id,array('size'=>150)); ?>" alt="">
                    </div>
                    <div class="large-9 small-12 columns">
                        <h4><?php the_author()?></h4>
                        <p> 
                            <?php the_author_meta('description')?>
                        </p>
                        <p class="email"><?php the_author_meta('email'); ?></p>
                    </div>
                    
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
