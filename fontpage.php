
<?php
/*
Template Name:Slider
*/ 
?>
<?php get_header();
?>
<div class="container"><?php
$showslider=new WP_Query(array(
  'post_type'=>'sliderid',
  'posts_per_page'=>3
)); ?>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <?php
while ($showslider->have_posts()) : $showslider->the_post(); ?>
    <div class="carousel-item ">
    <?php the_post_thumbnail('d-block w-100'); ?>
      </div>
</div>
<?php endwhile;?>
<?php get_footer();?>



    
