<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chicandsmooth
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div>
       <h1 class="text-4xl xl:text-6xl font-oswald font-normal uppercase tracking-wide text-black"><?php the_title(); ?></h1>
       <hr>
       <?php
       if ( 'post' === get_post_type() ) :
           ?>
           <div class="entry-meta">
               <?php
               chicandsmooth_posted_on();
               chicandsmooth_posted_by();
               ?>
           </div><!-- .entry-meta -->
       <?php endif; ?>
   </div>
    <div class="p-4">
        <?php chicandsmooth_post_thumbnail(); ?>
    </div>
    <div class="max-w-full mt-4">
        <?php the_content(); ?>
    </div>
    <div>
       <?php wp_link_pages(
        array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'chicandsmooth' ),
            'after'  => '</div>',
        )
        );
        ?>
    </div>
</article>
