
<?php

$hero_title            = carbon_get_the_post_meta( 'hero_title' );
$hero_link_url        = carbon_get_the_post_meta('hero_link_url');
$hero_link_text        = carbon_get_the_post_meta('hero_link_text');
$hero_snapchat_url        = carbon_get_the_post_meta('hero_snapchat_url');
$hero_option           = carbon_get_the_post_meta( 'hero_option' );

$video		    		= wp_get_attachment_url(carbon_get_the_post_meta('hero_video'));
$video_img 			    = wp_get_attachment_url(carbon_get_the_post_meta('hero_video_image'));

$hero_img 			 	= wp_get_attachment_url(carbon_get_the_post_meta('hero_image'));
$hero_img_subtitle   	= carbon_get_the_post_meta( 'hero_img_subtitle' );

$hero_solid_subtitle   = carbon_get_the_post_meta( 'hero_solid_subtitle' );
$hero_bg_color_option  = carbon_get_the_post_meta( 'hero_bg_color_option' );

?>

<!-- how to add image uploader -->
<section class="hero" style="background-image: url('<?php echo $hero_img; ?>')">
    <div class="hero__inner">
      <h1><?php echo $hero_title; ?></h1>
      <p><?php echo $hero_img_subtitle; ?></p>
      <?php if($hero_link_url && $hero_link_text) : ?>
      <a href="<?php echo $hero_link_url; ?>" class="btn btn-white"><?php echo $hero_link_text; ?>
        <i class="fa fa-angle-right"></i>
        <i class="fa fa-angle-right"></i>
      </a>
<?php endif; ?>
    </div>
</section>
<section class="secondary-menu">
  <div class="secondary-menu-wrapper">
    <h6>Follow Us</h6>
    <ul>
    <!-- add href -->
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      <?php if($hero_snapchat_url) :  ?>
      <a href="<?php echo $hero_snapchat_url; ?>"><i class="fa fa-snapchat" aria-hidden="true" ></i></a>
      <?php endif; ?>
    </ul>
  </div>
</section>