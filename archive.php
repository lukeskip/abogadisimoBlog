<?php get_header(); ?>
<div class="container">
    <h1 class="tagline">
        <?php echo preg_replace('([a-zA-Z.,!?0-9]+(?![^<]*>))', '<span>$0</span>', get_the_archive_title()); ?>
    </h1>
    <div class="masonry-css">
            
        <!-- Start the Loop. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="masonry-css-item">
                <!-- <?php if ( has_post_thumbnail() ):?>
                    <div class="image">
                        <?php the_post_thumbnail();?>
                    </div>
                <?php endif; ?> -->
                <div class="info">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <div class="description">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="author">
                        <?php the_author();?>
                    </div> 
                    <div class="link">
                        <a href="<?php the_permalink(); ?>">Leer más</a>
                    </div>
                </div>
                
            </div>

        <?php endwhile; else : ?>
            <p><?php 'Sorry, no posts matched your criteria.'; ?></p>
        <?php endif; ?>


    
    </div>
</div>



<?php get_footer(); ?>
