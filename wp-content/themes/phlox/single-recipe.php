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
                $image = get_field('thumbnail');
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
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col xl12 center-align">
                                        <div class="titlebox">
                                            <h1 id="singleRecipeTitle" ><?php echo get_the_title( $artistID );?></h1>
                                            <p class="white-text">Made with ❤ by <?php echo get_the_author();?></p>
                                            <b class="singleRecipeTitleLevel">Recipe Difficulty: <?php print_r(get_field('level'));?></b>
                                        </div>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col xl12 l12 m12 s12">
                                        <div class="singleRecipeMainContent">
                                            <div class="singleRecipeInfoBox">
                                                <div class="row">
                                                    <div class="col xl4 l4 m4 s12">
                                                        <div class="bigText"><?php print_r(get_field('average_cook_time'));?></div>
                                                        <div class="smallText">Minutes to Cook</div>
                                                    </div>
                                                    <div class="col xl4 l4 m4 s12">
                                                        <div class="bigText"><?php print_r(get_field('rating'));?>/5</div>
                                                        <div class="smallText">Rating</div>
                                                    </div>
                                                    <div class="col xl4 l4 m4 s12">
                                                        <div class="bigText"><?php print_r(get_field('servings'));?></div>
                                                        <div class="smallText">Servings</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col xl4 m4 s12">
                                        <h3><b>Ingredients</b></h3>
                                        <?php print_r(get_field('ingredients'));?>
                                    </div>
                                    <div class="col xl8 m8 s12">
                                        <h3><b>Cooking Instructions</b></h3>
                                        <?php print_r(get_field('directions'));?>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                            <?php 
                                $level = get_field('excerpt');
                                print_r($level);
                            ?>
                            <h2></h2>
                            <?php 
                                $level = get_field('author');
                                print_r($level);
                            ?>
                    </div><!-- end content -->
                </div><!-- end primary -->

                <!-- <?php get_sidebar(); ?> -->


            </div><!-- end container -->
        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>