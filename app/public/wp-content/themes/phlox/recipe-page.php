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
                                    <div class="col xl12 l12 m12 s12">
                                        <div class="catpillParent">
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/chinese_cusine">Chinese</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/creole_cusine">Creole</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/indian_cusine">Indian</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/italian_cusine">Italian</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/spanish_cusine">Spanish</a></div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                            <h4 class="center-align">All Recipes</h4>
                                <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                        <div class="listParent">
                                            <?php 
                                                $wpb_all_query = new WP_Query(array('post_type'=>'recipe', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                                                <?php if ( $wpb_all_query->have_posts() ) : ?>
                                                    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                                        <div class="card listCard">
                                                            <div class="card-image">
                                                                <?php 
                                                                        $image = get_field('thumbnail');
                                                                        if( !empty( $image ) ): ?>
                                                                            <img class="recipesItemCardImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="card-content">
                                                                <span class="card-title"><?php the_title(); ?></span>
                                                                <?php for($star=0;$star<get_field('rating'); $star++){echo '<i class="material-icons orange-text">star</i>';};?>
                                                                <?php for($star=0;$star<5-get_field('rating'); $star++){echo '<i class="material-icons black-text">star</i>';};?>
                                                            </div>
                                                            <div class="card-action">
                                                                <a class="btn-flat red-text" href="<?php the_permalink(); ?>">View</a>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php else : ?>
                                                    <p><?php _e( 'Sorry, no recipes found :(' ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
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
