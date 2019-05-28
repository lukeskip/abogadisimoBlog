<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="content columns large-12 medium-12">
            <h1>
                <?php the_title(); ?>
            </h1>
            <div class="excerpt"><?php the_excerpt(); ?></div>
            <div class="image">
                <?php the_post_thumbnail();?>
                <div class="caption"><?php the_post_thumbnail_caption(); ?></div>
            </div>
            <?php 
                $content = get_the_content();
                $content = apply_filters( 'the_content', $content );
                $content = str_replace( ']]>', ']]&gt;', $content ); 
            ?>
            <div class="meta-info">
                <?php include( locate_template('includes/related-posts-template.php', false, false) ); ?>
            </div>
            <?php echo $content; ?>
            
            
        </div>
        
    </div>
</div>



<?php get_footer(); ?>
