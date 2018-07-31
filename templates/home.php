<?php
/*
 * Template Name: Home
 *
 */
get_header();
?>
    
<?php
/**
 * Hero
 */
get_template_part('partials/home/00 - hero'); ?>



<?php while ( have_posts() ) : the_post();

  $sections = carbon_get_the_post_meta( 'carbon_sections' );
  ?>
  <pre><?php
  print_r($sections);
  ?>
  </pre>
  <?php foreach( (array) $sections as $key => $section ) :

  	//Interstitial Text Image
    if ( $section['_type'] === 'interstitial_open_text' ) :
      include(locate_template('partials/home/01a - Interstitial Text.php'));
    endif;

  endforeach;
  endwhile;
  
?>

<section class="img-text" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hikers.jpg')">
  <div class="img-container img-text-inner">
    <h3>Who we are</h3>
    <p>We establish and manage protected areas, advocate for strong conservation policies, and work with communities to preserve
      healthy thriving oceans and wild coastlines.</p>
    <a href="#" class="btn btn-white">Learn More
      <i class="fa fa-angle-right"></i>
      <i class="fa fa-angle-right"></i>
    </a>
  </div>
</section>

<section class="img-text" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/land-terrain.jpg')">
<div class="img-container img-text-inner<?php if($right) : ?> img-text-right <?php endif; ?>">
    <h3>Where we work</h3>
    <p>From pristine coastlines and mangrove lagoons to remote islands and thriving coral reefs, we conserve some of the most
      globally important coastlines and marine ecosystems on the planet.</p>
    <a href="#" class="btn btn-white">Learn More
      <i class="fa fa-angle-right"></i>
      <i class="fa fa-angle-right"></i>
    </a>
  </div>
</section>

<section class="donate-section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/seal-bkg.jpg')">
  <div class="container"> 
    <div class= "donate-section-inner">
    <h3>How you can help</h3>
    <p>WILDCOAST’s projects provide measurable conservation benefits with long-lasting impact. Through your support, we can
      continue to conserve our planet’s most critical ecosystems. </p>
    <a href="#" class="btn btn-white">Donate
      <i class="fa fa-angle-right"></i>
      <i class="fa fa-angle-right"></i>
    </a>
    </div>
  </div>
  <div class="container-lower">
    <div class="row">
      <div class="col-3">
          <div class="col-inner">
            <h1 class="alt">$25</h1>
            <p>Installs buoys around a coral reef</p>
            <a href="#" class="btn btn-white">Give Now
              <i class="fa fa-angle-right"></i>
              <i class="fa fa-angle-right"></i>
            </a>
          </div> 
      </div>
      <div class="col-3">
          <div class="col-inner">
              <h1 class="alt">$75</h1>
              <p>Sponsors a student on a Floating Lab</p>
              <a href="#" class="btn btn-white">Give Now
                <i class="fa fa-angle-right"></i>
                <i class="fa fa-angle-right"></i>
              </a>
          </div> 
      </div>
      <div class="col-3">
          <div class="col-inner">
              <h1 class="alt">$500</h1>
              <p>Protects a mile of sea turtle habitat</p>
              <a href="#" class="btn btn-white">Give Now
                <i class="fa fa-angle-right"></i>
                <i class="fa fa-angle-right"></i>
              </a>
          </div> 
      </div>
      <div class="col-3">
          <div class="col-inner">
              <h1 class="alt">$1000</h1>
              <p>Conserves 10 acres of mangroves</p>
              <a href="#" class="btn btn-white">Give Now
                <i class="fa fa-angle-right"></i>
                <i class="fa fa-angle-right"></i>
              </a>
          </div> 
      </div>
    </div>
  </div> <!--close container-lower -->
</section> 

<!-- Open text with images -->
<section class="opentext-section open-text-img section--xlarge">
  <h3>In The Wild</h3>
  <p>Check out the latest updates from our blog</p>
  <div class="container container-large container-slider">
    <div class="row">
      <div class="col-4">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/amazon.jpg"/>
        <h4>Give Through Amazon</h4>
        <p>Use the link below for your next eligible AmazonSmile purchase, and Amazon will donate 0.5% of the price to WILDCOAST...</p>
        <a class="btn btn-white btn-outline" href="#">Read more
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <div class="col-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fish-school.jpg"/>
        <h4>Conserving the Coral Reefs, Mangroves and MPAs of Cuba</h1>
        <p>After two short years of working on the ground in Cuba,</p>
        <a class="btn btn-white btn-outline" href="#">Read more
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
      <div class="col-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/surf.jpg"/>
        <h4>Save the Date</h1>
        <p> For our 14th annual Dempsey Holder Ocean Festival and Surf Contest on Saturday, September 16, 2017 in Imperial Beach, CA</p>
        <a class="btn btn-white btn-outline" href="#">Read more
          <i class="fa fa-angle-right"></i>
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="double-img-section">
  <div class="container-large">
    <div class="row">
      <div class="col-6" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mountains.jpg')">
        <div class="text-inner">
        <h3>Our Partners</h3>
        <p>WILDCOAST’s projects provide measurable conservation benefits with long-lasting impact. Through your support, we can
            continue to conserve our planet’s most critical ecosystems. </p>
        <a href="#" class="btn btn-white">All Partners
            <i class="fa fa-angle-right"></i>
            <i class="fa fa-angle-right"></i>
        </a>
      </div>
      </div>
      <div class="col-6" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/man-hat.jpg')">
        <div class="text-inner">
            <p class="right-text">Mangroves Trip with Linkin Park and Pro Surfers Koa Rothman and Koa Smith</p>
        </div>
      </div>
  </div>
</section>

 <div id="modals"></div>

<footer>
	<div class="footer footer-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/under-water.jpg')">
		<div class="row">
			<div class="col-6">
				<div class="text-inner-left">
					<h3>Connect with us</h3>
					<input placeholder="First Name"></input>
					<input placeholder="Last Name"></input>
				</div>
			</div>
			<div class="col-push-2 col-4">

			</div>
		</div>
	</div>
	<div class="footer footer-menu">

	</div>
</footer>
</div>
<!-- #app -->


<!-- jQuery CDN or localhost fallback -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>components/jquery/dist/jquery.min.js"><\/script>')</script> -->



<!-- Plugins & Components JS-->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/components/slick/slick.min.js"></script> 

<!-- Main Application JS -->
<!-- <script src="assets/js/plugins.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/app.js"></script> 



</body>

</html>