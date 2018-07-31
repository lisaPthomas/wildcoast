<?php
include ('variables.php');
$test  = $section['text_field'];
?>

<section class="opentext-section section--xlarge">
<?php print_r($section) ?>
  <h3><?php echo $title; ?></h3>
  <p><?php echo $content; ?></p>
  <p><?php echo $test; ?></P>
  <a type="button" class="btn btn-red">Get to Know Us</a>
</section>
