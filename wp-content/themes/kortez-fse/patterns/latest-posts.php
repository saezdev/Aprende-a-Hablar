<?php
/**
 * Title: Latest Posts
 * Slug: kortez-fse/latest-posts
 * Categories: latest-posts
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|x-large","left":"0","right":"0","top":"0"},"blockGap":"0"}},"backgroundColor":"surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"},"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Checkout Our Recent News &amp; Insights', 'kortez-fse' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-left:var(--wp--preset--spacing--xx-large)"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Mauris fugit! Semper eiusmod veritatis mauris aperiam sodales eu! Dui occaecati consequat. Adipisicing, ullamcorper dolores, molestias. Aliquet at magni rutrum.', 'kortez-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":31,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"},"blockGap":"var:preset|spacing|xx-small"}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}},"border":{"radius":"5px"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:post-title {"level":5,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"fontSize":"x-small"} /-->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"3px"}},"backgroundColor":"highlight","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-highlight-color has-alpha-channel-opacity has-highlight-background-color has-background is-style-default"/>
<!-- /wp:separator -->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->