<?php
/**
 * Title: Hero Banner
 * Slug: kortez-fse/hero-banner
 * Categories: banner
 */
$kortez_fse_img = array(
    KORTEZ_FSE_URL . 'assets/images/hero-banner-img1.jpg',
);
?>

<!-- wp:cover {"url":"<?php echo esc_url($kortez_fse_img[0]); ?>","id":18,"dimRatio":80,"overlayColor":"black","minHeight":680,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:680px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="<?php echo esc_url($kortez_fse_img[0]); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0"}}},"className":"animated animated-fadeInUp"} -->
<div class="wp-block-columns animated animated-fadeInUp" style="padding-top:0"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":1.1},"spacing":{"padding":{"right":"0","bottom":"var:preset|spacing|xx-small","top":"0"}}},"className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-text-align-center" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--xx-small);letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Creative &amp; Minimal Design Concept', 'kortez-fse' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<p class="has-text-align-center" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar orporis repellat sequi auctor.', 'kortez-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button {"style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"16px","bottom":"16px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:16px;padding-right:20px;padding-bottom:16px;padding-left:20px"><?php esc_html_e( 'Discover More', 'kortez-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->