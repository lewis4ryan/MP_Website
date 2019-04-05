<?php
/**
 * Helper functions.
 *
 * @package Winsome
 */
// Bail if no slider.
$slider_details = winsome_get_slider_details();
if (empty($slider_details)) {
    return;
}

// Slider status.
$slider_status = winsome_get_option('slider_status');
if ('disable' === $slider_status) {
    return;
}

if (!( is_front_page()) && !is_page_template('templates/home.php')) {
    return;
}
?>
<div id="featured-slider">
    <div id="main-slider" class="owl-carousel">
        <?php
        $count = 1;
        foreach ($slider_details as $slide) :

            if (!empty($slide['image_url'])) {

                $tag = (1 === $count) ? 'h1' : 'h2';
                ?>

                <div class="item" style="background-image: url(<?php echo esc_url($slide['image_url']); ?>); ">
                    <div class="caption">
                        <?php if (!empty($slide['title'])) { ?>
                            <<?php echo $tag; ?>><?php echo esc_attr($slide['title']); ?></<?php echo $tag; ?>>
                        <?php } ?>

                        <?php if (!empty($slide['excerpt'])) { ?>
                            <div class="slider-meta"><?php echo esc_attr($slide['excerpt']); ?></div>
                        <?php } ?>

                        <?php if (!empty($slide['slider_button']) && !empty($slide['slider_url'])) { ?>
                            <div class="slider-cta">
                                <a href="<?php echo esc_url($slide['slider_url']); ?>"><?php echo esc_attr($slide['slider_button']); ?></a>
                            </div>
                        <?php } ?>

                    </div><!-- .caption -->

                </div>
                <?php
            }
            $count++;
        endforeach;
        ?>
    </div> <!-- #main-slider -->

</div><!-- #featured-slider -->
