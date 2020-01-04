<?php
get_header();
?>
<div class="container">
<div class="header col-12"> <nav class="navbar list-inline navbar-dark bg-warning col-12">
<?php
wp_nav_menu(array(
  'theme_location' => 'mainmenu',

));
?>
</nav></div>
<br />
<br />
<!-- slider area start -->
<div class="col-12 ">
		<?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
<ul class="list-unstyled">        
		<div class="card m-2"><li class="media ">
    <img class="align-self-center card m-3" src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="<?php the_title(); ?>">
    
    <div <?php post_class("media-body"); ?>>
    <a href="<?php the_permalink(); ?>">
      <h2 class="mt-0 mb-1 text-success "><?php the_title() ?></h2>
      </a>
	  <h5><?php echo(" <strong>Writer By:</strong> ");?><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> Publish Date: <?php  the_date();?></h5>
	  
      <?php 
	 
      if (is_home()) {
        read_more(50) ?>...<a href="<?php the_permalink(); ?>">Read more</a>
        <br/> <br>
        <?php

      } else {
        the_content('..details');
      }


      _e("<strong>Category:</strong>");
      the_category(" | ");
      _e(" ");
      the_tags();
      ?> 
    
    </div>
    
  </li>

  </div>
  
<?php
endwhile;
else :
  _e("<h1>no post available</h1>");
endif;
?>
<?php comments_template();?>
</ul>

<?php get_footer(); ?>