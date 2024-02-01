<?php
/**
 * Title: Testimonial
 * Slug: kortez-fse/testimonial
 * Categories: testimonial
 */
$kortez_fse_img = array(
    KORTEZ_FSE_URL . 'assets/images/testimonial-img1.jpg',
    KORTEZ_FSE_URL . 'assets/images/testimonial-img2.jpg',
);
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What Our Client Says', 'kortez-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Auctor condimentum sit mus, pellentesque, aliquip.', 'kortez-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--large);padding-right:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns has-background-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:image {"id":62,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($kortez_fse_img[0]); ?>" alt="" class="wp-image-62" style="border-radius:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"68%","style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-column" style="padding-left:var(--wp--preset--spacing--x-small);flex-basis:68%"><!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}}} -->
<p style="padding-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( '"Diamlorem eiusmod iste veritatis. Provident eum doloremque a felis habitasse vivamus voluptates."', 'kortez-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php esc_html_e( 'William George', 'kortez-fse' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Customer, Agent', 'kortez-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns has-background-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%"><!-- wp:image {"id":141,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url($kortez_fse_img[1]); ?>" alt="" class="wp-image-141" style="border-radius:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"68%","style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-column" style="padding-left:var(--wp--preset--spacing--x-small);flex-basis:68%"><!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small"}}}} -->
<p style="padding-bottom:var(--wp--preset--spacing--small)"><?php esc_html_e( '"Diamlorem eiusmod iste veritatis. Provident eum doloremque a felis habitasse vivamus voluptates."', 'kortez-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php esc_html_e( 'Sally Henderson', 'kortez-fse' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Customer, Agent', 'kortez-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"bottom"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'More Reviews', 'kortez-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->