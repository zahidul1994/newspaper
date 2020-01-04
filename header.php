<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css'; ?>">
   <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   
   <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>