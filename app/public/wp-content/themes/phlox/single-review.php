<?php
/**
 * The Template for displaying all single posts
 *
 * 
 * @package    Auxin
 * @author     averta (c) 2014-2020
 * @link       http://averta.net
*/

get_header(); ?>
    <main id="main" <?php auxin_content_main_class(); ?> >
        <div id="singleRecipeMainImageContainer">
            <?php 
                $image = get_field('thumnail');
                if( !empty( $image ) ): ?>
                    <img id="singleRecipeMainImage" src="<?php echo esc_url($image['url']); ?>" width="100%" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">
                <div id="primary" class="aux-primary" >
                    <div class="content" role="main"  >

                        <?php
                        if ( ! ( function_exists( 'auxin_theme_do_location' ) && auxin_theme_do_location( 'single' ) ) && ! ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) ) {
                            $is_pass_protected = post_password_required();

                            if ( have_posts() && ! $is_pass_protected ) {
                                get_template_part('templates/theme-parts/single', get_post_type() );
                                comments_template( '/comments.php', true );
                            } elseif( $is_pass_protected ) {
                                echo get_the_password_form();
                            } else {
                                get_template_part('templates/theme-parts/content', 'none' );
                            }
                        }
                        ?>
                        <section>
                            <div class="container">
                                <div class="row">
                                        <div class="col xl12 center-align">   
                                            <div class="titlebox">
                                                <h1 id="singleRecipeTitle" ><?php echo get_the_title();?></h1>
                                                <!-- <b class="white-text"><?php print_r(get_field('star_rating'));?>/5 Stars</b> -->
                                                <?php for($star=0;$star<get_field('star_rating'); $star++){echo '<i class="material-icons orange-text">star</i>';};?>
                                                <?php for($star=0;$star<5-get_field('star_rating'); $star++){echo '<i class="material-icons black-text">star</i>';};?>
                                                <br>
                                                <p class="white-text">Reviewer: <?php echo get_the_author();?></p>
                                            </div>          
                                        </div>  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                    <div class="singleRecipeInfoBox">
                                        <div class="row">
                                            <div class="col xl4 l4 m4 s12">
                                                <div class="bigText"><?php print_r(get_field('average_wait_time'));?></div>
                                                <div class="smallText">Min. Avg. wait</div>
                                            </div>
                                            <div class="col xl4 l4 m4 s12">
                                                <div class="bigText"><?php print_r(get_field('value_rating'));?></div>
                                                <div class="smallText">Price</div>
                                            </div>
                                            <div class="col xl4 l4 m4 s12">
                                                <div class="bigText"><?php print_r(get_field('customer_service_rating'));?>/5</div>
                                                <div class="smallText">Customer Service</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col xl8 m8 s12">
                                        <br>
                                        <br>
                                        <h1><b>Review</b></h1>
                                        <?php print_r(get_field('review'));?>
                                    </div>
                                    <div class="col xl4 m4 s12">
                                        <br><br>
                                        <h1><b>Restaurant Info</b></h1>
                                        <h4>Contact</h4>
                                        <i class="material-icons">phone</i>
                                        <?php print_r(get_field('resturant_phone_number'));?>
                                        <br>
                                        <i class="material-icons">location_on</i>
                                        <?php print_r(get_field('restaurant_address'));?>
                                        <br>
                                        <br>
                                        <h4>Additional Information</h4>
                                        <b>Dine In: </b>
                                        <?php print_r((get_field('dine_in')[0]) == "Yes" ? ✔ : ❌);?>
                                        <br>
                                        <b>Take Out</b>
                                        <?php print_r((get_field('take_out')[0]) == "Yes" ? ✔ : ❌);?>
                                        <br>
                                        <b>Child Friendly</b>
                                        <?php print_r((get_field('vegetarian')[0]) == "Yes" ? ✔ : ❌);?>
                                        <br>
                                        <b>Vegan Options</b>
                                        <?php print_r((get_field('dine_in')[0]) == "Yes" ? ✔ : ❌);?>
                                        <br>
                                        <b>Vegetarian Options</b>
                                        <?php print_r((get_field('dine_in')[0]) == "Yes" ? ✔ : ❌);?>
                                        <br>
                                        <b>Halaal Meats</b>
                                        <?php print_r((get_field('dine_in')[0]) == "Yes" ? ✔ : ❌);?>
                                        <br>
                                        <br>
                                        <h5>Opening Hours</h5>
                                        <?php print_r(get_field('opening_hours'));?>
                                        <br>
                                    </div>
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
