<?php
/**
 * The Template for displaying all posttype items.
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2020
 * @link       http://averta.net
 */
get_header();?>

    <main id="main" <?php auxin_content_main_class(); ?> >
        <div class="aux-wrapper">
            <div class="aux-container aux-fold clearfix">
                <div id="primary" class="aux-primary" >
                    <div class="content" role="main" data-target="archive"  >
                        <section>
                            <div class="container">
                                <div class="row">
                                    <?php 
                                        $term = get_queried_object();
                                        $cat = $term->slug;
                                        $wpb_all_query = new WP_Query(array('post_type'=>'review', 'category_name'=> $cat, 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                                        <?php if ( $wpb_all_query->have_posts() ) : ?>
                                            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                                                <div class="col xl4 ll4 m4 s12">
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
                                            <?php wp_reset_postdata(); ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no recipes found :(' ); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </section>
                    </div><!-- end content -->
                </div><!-- end primary -->



            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>
