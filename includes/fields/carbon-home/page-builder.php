 <?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Helper\Helper;

include ('elements.php');

Container::make( 'post_meta', __( 'Page Builder', 'crb' ) )
  ->show_on_template(array(
    'templates/home.php',
  ))
  ->add_fields( array(
    Field::make( 'complex', 'carbon_sections', 'Sections' )
    ->set_layout('tabbed-vertical')

    ->add_fields('interstitial_text_link_image', 'Interstitial Text with Image', array_merge( $interstitial_title_content_link, $image))


    ->add_fields('alternating_blocks', 'Alternating Blocks', array_merge( $title, $general_blocks_title_content_links ))

    ->add_fields('interstitial_open_text', 'Open Text Area', array_merge($title, $content, array(
      Field::make('text', 'text_field', 'Text') )))

  )); // end add_fields;
