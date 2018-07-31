
<?php

$hero_title            = carbon_get_the_post_meta( 'hero_title' );
$hero_option           = carbon_get_the_post_meta( 'hero_option' );

$video		    		= wp_get_attachment_url(carbon_get_the_post_meta('hero_video'));
$video_img 			    = wp_get_attachment_url(carbon_get_the_post_meta('hero_video_image'));

$hero_img 			 	= wp_get_attachment_url(carbon_get_the_post_meta('hero_image'));
$hero_img_subtitle   	= carbon_get_the_post_meta( 'hero_img_subtitle' );

$hero_solid_subtitle   = carbon_get_the_post_meta( 'hero_solid_subtitle' );
$hero_bg_color_option  = carbon_get_the_post_meta( 'hero_bg_color_option' );

?>

<!-- how to add image uploader -->
<section class="hero" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero.jpg')">
    <div class="hero__inner">
      <h1><?php echo $hero_title; ?></h1>
      <p><?php echo $hero_img_subtitle; ?></p>
      <a href="#" class="btn btn-white">Give Now
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
</section>