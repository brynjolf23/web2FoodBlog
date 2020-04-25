<?php

/* Template Name: Custom review page */ 

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
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">

                <div id="primary" class="aux-primary" >
                    <div class="content" role="main"  >
                        <section>
                            <br>
                            <br>
                            <br>
                            <h1 class="center-align">Restaurant Reviews</h1>
                            <div class="container">
                                <h4 class="center-align">Browse by Place</h4>
                                <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                        <div class="catpillParent">
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/chagunas">Chaguanas</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/mayaro">Mayaro</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/port_of_spain">POS</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/san_fernando">San Fernando</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/sangre_grande">Sangre Grande</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/siparia">Siparia</a></div>
                                            <div class="catpill"><a href="https://trinieats.varion.co/category/tobago">Tobago</a></div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h4 class="center-align">All Restaurant Reviews</h4>
                                <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                        <div class="listParent">
                                            <?php 
                                                // the query
                                                $wpb_all_query = new WP_Query(array('post_type'=>'review', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                                                <?php if ( $wpb_all_query->have_posts() ) : ?>    
                                                        <!-- the loop -->
                                                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                                            <div class="col xl3 ll3 m4 s12">
                                                                <div class="card">
                                                                    <div class="card-image">
                                                                        <?php 
                                                                                $image = get_field('thumnail');
                                                                                if( !empty( $image ) ): ?>
                                                                                    <img class="recipesItemCardImage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <div class="card-content">
                                                                        <span class="card-title"><?php the_title(); ?></span>
                                                                        <?php for($star=0;$star<get_field('star_rating'); $star++){echo '<i class="material-icons orange-text">star</i>';};?>
                                                                        <?php for($star=0;$star<5-get_field('star_rating'); $star++){echo '<i class="material-icons black-text">star</i>';};?>
                                                                    </div>
                                                                    <div class="card-action">
                                                                        <a class="btn-flat red-text" href="<?php the_permalink(); ?>">View</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endwhile; ?>
                                                        <!-- end of the loop -->
                                                <?php wp_reset_postdata(); ?>
                                            <?php else : ?>
                                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
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
