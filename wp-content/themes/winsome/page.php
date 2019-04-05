<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Winsome
 */

get_header(); ?>

    <div id="home-page-widget-area" class="widget-area">
        <section id="winsome-about-1" class="widget winsome_widget_about_us">
            <div class="container">
                <div id="about-us" class="about-us-wrap">
                    <h2 class="widget-title"><span>About Us</span></h2>
                    <div class="inner-wrapper">
                        <div class="about-us-content content-align-left" "="">
                        <div class="about-us-text">
                            <p>Winsome is the responsive multipurpose one-page theme. It can be used for business, corporate, portfolio, digital agency, landing page, product showcase, and all informative websites.</p>
                        </div>
                        <div class="about-us-skills">
                            <h3>IOS and Android APPs</h3>
                            <div class="skill-progress-bar progress-bar-striped">
                                <div class="progress-bar-length" style="width:90%">
                                    <span>90%</span>
                                </div>
                            </div>
                            <h3>Web Design and Development</h3>
                            <div class="skill-progress-bar progress-bar-striped">
                                <div class="progress-bar-length" style="width:95%">
                                    <span>95%</span>
                                </div>
                            </div>
                            <h3>Search Engine Optimization</h3>
                            <div class="skill-progress-bar progress-bar-striped">
                                <div class="progress-bar-length" style="width:85%">
                                    <span>85%</span>
                                </div>
                            </div>
                            <h3>Digital Marketing</h3>
                            <div class="skill-progress-bar progress-bar-striped">
                                <div class="progress-bar-length" style="width:90%">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-us-image img-align-right">
                        <img src="https://www.prodesigns.com/wordpress-themes/demo/winsome/wp-content/uploads/sites/32/2017/03/winsome-responsive.png">
                    </div>
                </div>
            </div>
            </div>
        </section>
    <section id="pt-theme-addon-testimonials-1" class="widget pt_theme_addon_widget_testimonials">
        <div class="container">
            <div class="pt-testimonials-main">
                <div class="section-title">

                    <h2 class="widget-title"><span>Testimonials</span></h2>
                    <div class="seperator">
                        <span><i class="fa fa fa-comment-o"></i></span>
                    </div>
                </div>
                <?php pt_theme_addon_testimonials_widget_call('testimonial-home', 4); ?>
            </div>
        </div>
    </section>
    </div>



    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
do_action( 'winsome_action_sidebar' );

get_footer();
