<?php

/* Template Name: Custom recipe page */ 

/**
 * The template for displaying pages.
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2020
 * @link       http://averta.net
 */
get_header(); ?>

    <main id="main" class="grey lighten-2" <?php auxin_content_main_class(); ?> >
        <img src="foodmenu.jpg" alt="">
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">
                <div id="primary" class="aux-primary" >
                    <div class="content" role="main"  >
                        <section>
                            <br>
                            <br>
                            <br>
                            <h1 class="center-align">Our Best Recipes</h1>
                            <div class="container">
                                <h4 class="center-align">Categories</h4>
                                <div class="row">
                                    <div class="col offset-xl3 offset-l3 offset-m3 xl1 l1 m2 s4 catpill"><a href="https://trinieats.varion.co/category/chinese_cusine">Chinese</a></div>
                                    <div class="col xl1 l1 m2 s4 catpill"><a href="https://trinieats.varion.co/category/creole_cusine">Creole</a></div>
                                    <div class="col xl1 l1 m2 s4 catpill"><a href="https://trinieats.varion.co/category/indian_cusine">Indian</a></div>
                                    <div class="col xl1 l1 m2 s4 catpill"><a href="https://trinieats.varion.co/category/italian_cusine">Italian</a></div>
                                    <div class="col xl1 l1 m2 s4 catpill"><a href="https://trinieats.varion.co/category/spanish_cusine">Spanish</a></div>
                                </div>
                            </div>
                            <div class="container">
                            <h4 class="center-align">All Recipes</h4>
                                <div class="row">
                                    <?php 
                                        $wpb_all_query = new WP_Query(array('post_type'=>'recipe', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                                        
                                        <?php if ( $wpb_all_query->have_posts() ) : ?>
                                            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                                <div class="col xl3 ll3 m4 s12">
                                                    <div class="card">
                                                        <div class="card-image">
                                                            <?php 
                                                                    $image = get_field('thumbnail');
                                                                    if( !empty( $image ) ): ?>
                                                                        <img class="recipesItemCardImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title"><?php the_title(); ?></span>
                                                            <?php print_r(get_field('rating'));?>/5 Stars
                                                        </div>
                                                        <div class="card-action">
                                                            <a class="btn-flat red-text" href="<?php the_permalink(); ?>">View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                            <?php wp_reset_postdata(); ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no recipes found :(' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </section>
                    </div><!-- end content -->
                </div><!-- end primary -->

                <?php get_sidebar(); ?>
            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>
