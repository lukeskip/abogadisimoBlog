<?php 
        $post_id = array(get_the_ID());
        $tags = wp_get_post_tags($post_id);
        if ($tags) {
            $first_tag = $tags[0]->term_id;

            $related = new wp_Query( array(
                'posts_per_page' => 3,
                'post__not_in' 	=> $post_id,
                'orderby'       => 'rand',
                'order'         => 'ASC',
                'tag__in'       => array($first_tag),
            ));
        }else{
            $related = new wp_Query( array(
                'posts_per_page' => 3,
                'post__not_in' 	=> $post_id,
                'orderby'        => 'rand',
                'order'      => 'ASC',
            ));
        }
        
    ?>
    <?php if( $related->have_posts() ):?>
        
<div class="related">
    
    <h3>También te recomendamos...</h3>
    <?php while ( $related->have_posts() ) : $related->the_post(); ?>
        <article class="post">
            <div>
                <div class="description">
                    <h4>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                </div>
                <a href="<?php echo get_permalink(); ?>" class="link"></a>
            </div>
        </article>
        
    
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?> 
</div>
<?php endif; ?>