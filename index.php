<?php
get_header();
?>
 <div class="container">
<div class="block" style="width:100%;height:360px; background: url(<?php header_image(); ?>)">
<div class="title display-1 text-center bold bg-danger text-sucsess"><?php bloginfo('name');?></div>
<marquee
behavior="alternate" direction="right" onmouseover="this.stop()" onmouseout="this.start()">
<div class="subtitle display-4 text-success text-center"><?php bloginfo('description');?></div></marquee><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="row">
  <nav class="navbar list-inline navbar-dark bg-warning col-12">
<?php
wp_nav_menu(array(
  'theme_location' => 'mainmenu',
  'menu_class'     => 'header-menu',
));
?>
</nav></div>
<!-- function for fast ten menu -->

<div><h3 class="blogwp-posts-heading"><span> <i class=" fa-newspaper"></i> <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()"><?php $recent_posts = wp_get_recent_posts($args);
     foreach( $recent_posts as $recent ){
      echo ' <a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> <em>|</em> ';
    }
    wp_reset_query();
  ?>
</marquee></span></h3></div>
<!-- for latest posts start  -->
<div class="row">
<div class="col-9 ">
<ul class="list-unstyled">
		<?php
  if (have_posts()) :
    while (have_posts()) : the_post();

  ?>
            <div class="card m-2"><li class="media ">
    <img class="align-self-center card m-3" src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="<?php the_title(); ?>">
    
    <div <?php post_class("media-body"); ?> >
    <a href="<?php the_permalink(); ?>">
      <h3 class="mt-0 mb-1 text-success "><?php the_title() ?></h3>
      </a>
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
      _e(" <strong>Writer By:</strong> ");
      ?> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
    <?php
    _e(" - ");
    the_time(' d-M-Y  G:h a');
    _e(" ");
   comments_popup_link('No Comment', 'One Comment', '% comment', 'card', $none)
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
</ul>
</div>
<div class="col-3"><!--sidebar-->

<?php dynamic_sidebar('widgetmain'); 

?>

</div><!--sidebar-->


<?php get_footer(); ?>
